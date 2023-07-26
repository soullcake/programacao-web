<?php 

class App
{

    public static function dispatch () {

        //roteamento inicia aqui
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        //esta função é usada para rotear o usuário
        Route::dispatch($uri, $method);
    }
    
}
