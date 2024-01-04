# Requisitos

### Criar migration para Player
### Adicionar controlador para Player
```bash

php artisan make:migration create_players_table

php artisan make:controller PlayerController

```
### Adicionar forms para cadastro de Players
* Redirecionar para pagina de listagem
* Definir Rotas

### Adicionar formulario para editar Players
* Redirecionar para pagina de listagem
* Definir Rotas

### Adicionar listagem de Players
### Usar sqlite
### Aplicar FormRequest
```bash
php artisan make:request CreatePlayerRequest
// Isso criará um arquivo chamado CreatePlayerRequest.php na pasta app/Http/Requests.
```
entre no arquivo e adicione na function rules():

```php
public function rules()
{
    return [
        //adicione aqui as regras
    ];
}
```

No seu controlador:

```php
use App\Http\Requests\CreateUserRequest;

public function store(CreateUserRequest $request)
{
    // Os dados foram validados neste ponto
    // Prossiga com o processamento, por exemplo, criando um novo usuario
    $player = new Player;
    $player->nome = $request->nome;
    $player->numero = $request->numero;
    $player->save();

    return redirect('/player');
}

```
### Utilizar 1 Layout