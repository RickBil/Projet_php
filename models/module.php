<?php

namespace App\Models;
class Module{
    private int $id;
    private string $libelle;

    // Attributs navigationnels
    // one to many Cours
    public function cours(): array{
            $sql="select c.* from cours c where c.module_id={$this->id}";
        return [];
    }
    // many to many Professeurs
    public function professeurs(): array{

        return [];
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
}