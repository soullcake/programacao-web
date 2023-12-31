# Revisão
Uma pequena revisão para auxiliar na avaliação da disciplina. Aqui vou abordar: instalação do Breeze, middlewares, validação e algumas dependências.


# Sumário

- [Revisão](#revisão)
- [Sumário](#sumário)
    - [Novo projeto e Breeze:](#novo-projeto-e-breeze)


### Novo projeto e Breeze:

- **Novo Projeto**: 
```bash
composer create-project --prefer-dist laravel/laravel=9.0.0 Projeto
```
A flag *--prefer-dist* ajuda a baixar as coisas mais rápido

- **Breeze**: 
```bash
composer require laravel/breeze:1.10 --dev

php artisan breeze:install
```
Quando surgir as opções no terminal siga a sequencia:
* Blade
* no
* yes

```bash 
php artisan migrate
npm install
npm run dev
```

Na página guest.blade.php dentro da pasta layouts, comente o link do @vite e adicione:

```html
<link rel="stylesheet" href="{{@asset('/css/app.css')}}">
```

Isso fará com que as estilizações associadas ao Breeze sejam aplicadas.