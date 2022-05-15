<?php

namespace App\Models;
class Professeur extends User{
    private string $grade;

     // one to many Cours
    public function cours(): array{
        
        return [];
    }
     // many to many Module
    public function modules(): array{
        
        return [];
    }
     // many to one avec Adresse
    public function adresse():Adresse{
        return new Adresse(); 
    }

    final public function __construct()
    { 
        $this->role="ROLE_Professeur";
    }

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
}