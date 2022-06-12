<?php

namespace App\Core;
Class Router {
    private Request $request;
    private array $routes=[];
    public function __construct() {
        $this->request=new Request;
    }
    public function route(string $uri,array $route){
        $this->routes[$uri]=$route;
    }
} 