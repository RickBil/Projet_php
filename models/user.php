<?php
namespace App\Models;
namespace App\Core;
class User extends Model{
    // Attributs d'instances 
    protected int $id;
    protected string $login;
    protected string $password;
    protected string $role;
    // Attributs Static
    public function __construct()
    {
    self::$table="user" ;
    }

    public function insert(){
        //die(parent::$table);
        $sql="INSERT INTO  ".parent::$table." ('login','password') VALUES ( ?, ?);";
        return parent::database()->executeUpdate($sql,[
                $this->login,$this->password,self::$role],$this->nom,$this->prenom);
    }
    public function update(){
        $sql="update user set login={$this->login},password={$this->password} where id={$this->id}";
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
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

}