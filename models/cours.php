<?php
namespace App\Models;
class Cours{
    
    private int $id;
    private string $heureD;
    private string $heureF;
    private \DateTime $dateCours;

    public function __construct()
        {
            self::$table="cours";
        }

     // many to one avec Classe
    public function classe():Classe{
        $sql="select m.* from cours c, 
            module m where c.module_id=m.id and c.id={$this->id}";
        return new Classe(); 
    }
     // many to one avec Professeur
    public function professeur():Professeur{
        $sql="select u.* from cours c, 
            user u where c.professeur_id=u.id and c.id={$this->id} 
            and role like 'ROLE_Professeur";
        return new Professeur(); 
    }
     // many to one avec Module
    public function module():Module{
        return new Module(); 
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
     * Get the value of heureD
     */ 
    public function getHeureD()
    {
        return $this->heureD;
    }

    /**
     * Set the value of heureD
     *
     * @return  self
     */ 
    public function setHeureD($heureD)
    {
        $this->heureD = $heureD;

        return $this;
    }

    /**
     * Get the value of heureF
     */ 
    public function getHeureF()
    {
        return $this->heureF;
    }

    /**
     * Set the value of heureF
     *
     * @return  self
     */ 
    public function setHeureF($heureF)
    {
        $this->heureF = $heureF;

        return $this;
    }

    /**
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }
}