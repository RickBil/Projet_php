<?php 
namespace App\Core;

use App\Core\Session;
use App\Exceptions\RouteNotFoundException;


class Router {
  private Request $request;
  private array $routes=[];
  public function __construct()
  {
      $this->request=new Request;

  }

  public function route(string $uri,array $route){
    $this->routes[$uri]=$route;
  }

  public function resolve(){
     $uri= "/".$this->request->getUri();
     if(isset( $this->routes[$uri])){
         //Destrtruction
        [$ctrlClass,$action] =$this->routes[$uri];
       /**
        * $ctrl=$this->routes[$uri][0]
        * $action=$this->routes[$uri][1]
        */
        if(class_exists($ctrlClass) && method_exists($ctrlClass,$action)){
             Session::openSession();
             //surcharger le controller
              $ctrl=new $ctrlClass($this->request);
              //Injection Objet request dans une action
              call_user_func_array([$ctrl,$action],[$this->request]);

        }else{
              throw new RouteNotFoundException();   
        }
     }else{
         //Soulever l'exception
         throw new RouteNotFoundException();  
     }
  }
    

}