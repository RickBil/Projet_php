<?php
namespace App\Models;
class Ac extends User{
    
    final public function __construct()
    { 
        $this->role="ROLE_AC";
    }
}