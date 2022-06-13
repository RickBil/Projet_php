<?php 
namespace App\Controllers;

use App\Core\Controller;
use App\Core\IController;
use App\Models\Classe;

class CoursController extends Controller implements IController{


    public function lister(){

    }
    public function listerCoursDelaClasse(){
        if( $this->request->isGet()){  
          $classeId= intval($this->request->query()[0]) ;
          $classe=Classe::selectById( $classeId);
         // $cours=$classe->cours()[0];
          // dd( $cours->professeur());
          //dd($classe->cours());
          $this->render("cours/liste.classe",[
              "classe"=>$classe
          ]);
      } 
    }

    public function ajouter(){
        
    }

    public function supprimer(){
        
    }

    public function modifier(){
        
    }


   
}