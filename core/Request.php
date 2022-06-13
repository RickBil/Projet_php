<?php 
namespace App\Core;
class Request {
    public function getUrl(){
       return explode("/",$_SERVER['REQUEST_URI']);
    }

    public function getUri(){
        return $this->getUrl()[1]; 
    }

    public function isPost():bool{
        return $_SERVER["REQUEST_METHOD"]=="POST";
    }
    public function isGet():bool{
        return $_SERVER["REQUEST_METHOD"]=="GET";
    }

   public function request():array{
          return $_POST;
   }
   public function query():array{
       $url=$this->getUrl();
       unset($url[0]);//WEB_URL
       unset($url[1]);//Route
       return array_values($url);
}


}