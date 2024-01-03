# Revisao sobre validacoes

Exemplo tirado da *Prova 1 - Grupo 2* do 4Bimestre

## Usuários

* (10 pontos) Adicionar campo de confirmação de senha no cadastro de usuário
* (10 pontos) Validar a confirmação de senha no cadastro de usuário
* (15 pontos) Adicionar o campo matrícula e validar ele no cadastro (obrigatório e
tamanho mínimo)
* (15 pontos) Definir a rota para mostrar os dados do usuário
    * Rota
    * Página


### A pagina de cadastro fica da seguinte forma:
```html

<form action="{{route('register')}}" method="post">
        @csrf
        <label>Email</label> 
        <input type="email" name="email" value={{old('email')}}>   
        @error('email')
        <span>{{ $message }}</span>
        @enderror
        <br>

        <label>Nome</label> 
        <input type="text" name="name" value={{old('name')}}>
        @error('name')
        <span>{{ $message }}</span>
        @enderror
        <br>

        <label>Senha</label> 
        <input type="password" name="password">
        @error('password')
        <span>{{ $message }}</span>
        @enderror
        <br>


        <!-- campo adicionado -->
        <label>Confirme sua senha</label> 
        <input type="password" name="ConfirmPassword">
        @error('ConfirmPassword')
        <span>{{ $message }}</span>
        @enderror
        <br>


        <!-- campo adicionado -->
        <label>Matricula</label> 
        <input type="number" name="matricula">
        @error('matricula')
        <span>{{ $message }}</span>
        @enderror
        <br>

        <button>Enviar</button>
    </form>
```

### E a function no controlador do Cadastro fica assim:

```php
use Illuminate\Support\Facades\Validator;

public function store (StoreUserRequest $request) {

    $validator = Validator::make($request->all(), [
        'password' => 'required',
        'ConfirmPassword' => 'required|same:password',
        'matricula' => 'required|min:15',
    ], [
        'ConfirmPassword.same' => 'As senhas devem ser iguais.',
        'matricula.min' => 'A matrícula deve ter no mínimo 15 caracteres.',
    ]);


    if ($validator->fails()) {
        return redirect('/register')->withErrors($validator)->withInput();
    }

    $usuario = new User;
    $usuario->name = $request->post('name');;
    $usuario->email = $request->email;
    $usuario->password = Hash::make($request->password);
    $usuario->save();
    
    Auth::login($usuario);

    return redirect('/dashboard');
}

```

### Agora com comentarios para facilitar:

```php 

    $validator = Validator::make($request->all(), [
        'password' => 'required',
        'ConfirmPassword' => 'required|same:password',  //'seja Obrigatorio|seja igual a password',
        'matricula' => 'required|min:15',   //'obrigatorio|tamanho minimo:15
    ], [
        'ConfirmPassword.same' => 'As senhas devem ser iguais.',       //mensagens de erro
        'matricula.min' => 'A matrícula deve ter no mínimo 15 caracteres.',
    ]);


    //retornar para pagina de cadastro caso haja erro
    if ($validator->fails()) {
        return redirect('/register')->withErrors($validator)->withInput();
    }

    //salvar registro
    $usuario = new User;
    $usuario->name = $request->post('name');;
    $usuario->email = $request->email;
    $usuario->password = Hash::make($request->password);
    $usuario->save();
    
    //logar usuario
    Auth::login($usuario);

    //redirecionar ao destino :)
    return redirect('/dashboard');


```