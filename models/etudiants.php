<?php
namespace App\Models;
class Etudiant extends User{

    // Attributs 
    private string $matricule;

    // one to many avec Inscription
    public function inscriptions():array{

        return []; 
    }
    
    final public function __construct()
    { 
        $this->role="ROLE_Etudiant";
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}