<?php

namespace App\Models;

class Rp extends User{
    
    final public function __construct()
    { 
        $this->role="ROLE_RP";
    }

}