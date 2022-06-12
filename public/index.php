<?php
// Front Controllers 

use App\Exceptions\BdConnexionException;

require_once('../vendor/autoload.php');
require_once('./../core/Constantes.php');
require_once('./../core/fonction.php');
use App\Models\User;
use App\Models\Rp;
use App\Models\Ac;
use App\Models\Classe;
use App\Models\Cours;
use App\Core\Request;
use App\Core\Model;
use App\Core\Router;
use App\Controller\SecuriteController;

use App\Core\DataBase;

echo "Je suis là ! ";

$db =new DataBase;
$db->openConnexion();

$router=new Router();
$router->route("/",["App\Controller\SecuriteController"]);
// $rp =new Rp();
// $rp->setLogin("rp1");
// $rp->setPassword("rp");
// $rp->insert();
// echo "<pre>";
// RP::selectAll();
// var_dump(Rp::selectById(1));
// echo "</pre>";

