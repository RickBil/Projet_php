<?php
// Front Controllers 
use App\Core\DataBase;
use App\Exceptions\BdConnexionException;

require_once('../vendor/autoload.php');
require_once('./../core/Constantes.php');
use App\Models\Rp;
use App\Models\Ac;
use App\Models\User;
use App\Models\Classe;
use App\Models\Cours;
use App\Core\Request;



// echo "Je suis là ! ";

$db =new DataBase;
// $db->openConnexion();

// $rp =new RP();
// $rp->setLogin("rp3");
// $rp->setPassword("rp");
// $rp->insert();
// echo "<pre>";
// RP::selectAll();
// var_dump(RP::selectById(1));
// echo "</pre>";

