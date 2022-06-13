<?php
   function dd($data){
    echo"<pre>";
       var_dump($data);
     echo"</pre>";
      die();
   }

  function redirectToRoute(string $uri){
      $url=WEB_URL."".$uri;
      header("location:$url");
  }