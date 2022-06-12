<?php
namespace App\Models;
class Etudiant extends User{

    // Attributs 
    private string $nomComplet;
    private string $matricule;

    // one to many avec Inscription
    public function inscriptions():array{
        $sql="select e.* from inscription i where i.etudiant_id={$this->id}";
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

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }
}