<?php 
namespace App\Core;

use App\Exceptions\ConnexionException;


class DataBase{
    public \PDO|null $pdo=null;//Pas de connexion
    //Mode Deconnecte
    private string $className;
    public function openConnexion(){
        $Serveur="127.0.0.1";
        $use="root";
        $pass="";
        $base="Gestion_Scolaire";
        //host : adresse du server BD
        try {
            //Essaie de te connecter
            $this->pdo=new \PDO("mysql:host=$Serveur;dbname=$base",$use,$pass);
                // die("Connexion ");
        } catch (\Exception $ex) {
            die("Erreur Connexion -Veuillez contacter votre Admin!");
              //throw new BdConnexionException;
        }
    }
    
    public function closeConnexion(){
        $this->pdo=null;
    }

    public function executeSelect(string $sql,array $data=[],$single=false){
    //Requete non preparee  => Pas du Securise
    //Requete dont les variables sont injectees a l'ecriture
    // $id=1;
    // $sql="Select * from classe where id=$id ";

    //Requete preparee  => Securise
        //Requete dont les donnee sont injectees a l'exection de la requete
        //a l'eriture les variables sont remplacees par des joker
        $this->openConnexion();
    // $sql="Select * from classe where id=? and role like ? ";
        $stm=$this->pdo->prepare($sql);
        $stm->execute($data);
        if($single){
            $result=$stm->fetch();// retourne one ligne
        }else{
            $result=$stm->fetchAll(); //plusieurs lignes
        }
        $this->closeConnexion();
        return  $result;
        
    }

    public function executeUpdate(string $sql,array $data=[]):int{
        $this->openConnexion();
    // $sql="Select * from classe where id=? and role like ? ";
        $stm=$this->pdo->prepare($sql);
        $stm->execute($data);
        $result=$stm->rowCount();
        $this->closeConnexion();
        return  $result;
    }

    /**
     * Set the value of className
     *
     * @return  self
     */ 
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }
}