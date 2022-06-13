<?php

namespace App\Models;

class Rp extends User{
    
    final public function __construct()
    { 
        $this->role="ROLE_RP";
    }

    public static  function selectAll(){
        $sql="select *  from  ".parent::table()." where roles like ? ";
       return parent::database()->executeSelect($sql,[parent::$role]);
    }

}