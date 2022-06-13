<?php

namespace App\Models;
use App\Core\Model;
class Classe{

    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;

    public function __construct()
    {
        self::$table="classe";
    }

     // one to many Cours
    public function cours():array{
        $sql="select c.* from cours c, 
              classe cl where c.classe_id=cl.id and cl.id=? 
              ";
            return  parent::selectWhere($sql,[$this->id],false,Cours::class);
       }
    
    // one to many Inscription
    public function inscriptions(): array{
        $sql="select i.* from inscription i where i.classe_id={$this->id}";
        return [];  
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function insert(){
        $sql="INSERT INTO  ".parent::table()."  (`libelle`, `filiere`, `niveau`) VALUES (?,?,?)";
        return parent::database()->executeUpdate($sql,[
                 $this->libelle,
                 $this->filiere,
                 $this->niveau,
        ]);
   }

   public function update(){
       $sql="UPDATE ".parent::table()." SET `libelle` = ?, `filiere` = ?, `niveau` = ? WHERE `classe`.`id` = ? ";
       return parent::database()->executeUpdate($sql,[
           $this->libelle,
           $this->filiere,
           $this->niveau,
           $this->id
      ]);
   }
}