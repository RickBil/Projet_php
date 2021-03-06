<?php

namespace App\Models;
class Inscription {
    private $id;
    private \DateTime $dateIns;

    //
    
    // many to one avec Classe
    public function classe():Classe{
        $sql="select c.* from inscription i,classe c where c.id=i.classe_id and i.id={$this->id}";
        return new Classe(); 
    }
    // many to one avec Etudiant
    public function etudiant():Etudiant{
        $sql="select e.* from inscription i,etudiant e where e.id=i.etudiant_id and i.id={$this->id}";
        return new Etudiant(); 
    }
    public function __construct(){

    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of dateIns
     */ 
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set the value of dateIns
     *
     * @return  self
     */ 
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }
}