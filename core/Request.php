<?php

namespace App\Core;
Class Request {
    public function getUrl(){
        return explode("/",$_SERVER["REQUEST_URI"]);
    }
    public function getUri(){
        return $this->getUrl();
    }
    public function isPost():bool{
        return $_SERVER["REQUEST_METHOD"]=="POST";
    }
    public function isGet():bool{
        return $_SERVER["REQUEST_METHOD"]=="GET";
    }
}