<?php

namespace App\Exception;
class ConnexionException extends \PDOException{
    public $message="Erreur Connexion - Veuillez contacter votre Admin";

}