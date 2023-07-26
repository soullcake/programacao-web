<?php

class Route
{   

    protected static $routes;

    protected $caminho; //uri
    protected $controller; //controller
    protected $method; // POST, GET..
    protected $rule;

    public function __construct(string $caminho, string $controller, string $method)
    {
        $this->caminho = $caminho;
        $this->controller = $controller;
        $this->method = $method;    
    }

    public function getCaminho () : string {
        return $this->caminho;
    }

    public function getController() : string {
        return $this->controller;
    }

    public function getMethod () : string {
        return $this->method;
    }

    //faz o registro de uma rota
    public static function get (string $caminho, string $controller) : Route {
        if (self::$routes == NULL) {
            self::$routes = [];
        }
        $route = new Route( $caminho,  $controller,  'GET');
        array_push(self::$routes, $route);
        return $route;
    }

    //Faz o registro de uma rota
    public static function post (string $caminho, string $controller) : Route {
        if (self::$routes == NULL) {
            self::$routes = [];
        }
        $route = new Route( $caminho,  $controller,  'POST');
        array_push(self::$routes, $route);
        return $route;
    }

    /**
     * Função para aplicar regras de autorização futuras
     */
    // public function can (User $id) {
    //     $query= "UPDATE users SET is_admin = 1 WHERE ID = $id";

    //     return $query;
    // }

    public static function dispatch (string $uri, string $method) {      

        foreach (self::$routes as $route) {
           
            if ($route->getCaminho() == $uri) {
               
                //se methodo não autorizado - METHOD INCORRETO                
                if ($route->getMethod() == $method) {

                    //inclui o html ou controlador
                    include __DIR__ . $route->getController();
                    exit;                    
                    
                } else {
                    echo "Method inválido HTTP inválido";
                    exit;
                }

            } 
        }
        echo "Página não encontrada";            
        exit;
    }  

}
