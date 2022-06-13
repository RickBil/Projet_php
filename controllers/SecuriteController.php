<?php 
namespace App\Controllers;

use App\Models\User;
use App\Core\Request;
use App\Core\Controller;
use App\Core\Session;
use Rakit\Validation\Validator;




class SecuriteController extends Controller{
    
    public function connexion(){
        $this->layout="connexion";
        //Formulaire
          //1-Affichage du Formulaire => GET
         if( $this->request->isGet()){  
               $this->render("securite/login");
         }
          //request
         //2-Soumission des donnees  => POST
         if($this->request->isPost()){
                //Validation du Formulaire
                $validator = new Validator;
                $validation = $validator->make($this->request->request(),[
                    'login'   => 'required|email',
                    'password'=> 'required|min:6|max:10',
                ],
                [
                     'required' => ':attribute est obligatoire',
                      'email' => 'email est invalide',
                      'min' => ":attribute doit contenir au moins 6 caracteres "
                 ]);
                $validation->validate();
                 if ($validation->fails()) {
                   $errors = $validation->errors();
                    $this->render("securite/login",[
                         'errors'=>$errors->firstOfAll()
                    ]);
                 }else{
                         //Connexion
                         $data=$this->request->request();
                         $user=new User;
                              $user->setLogin($data['login']);
                              $user->setPassword($data['password']);
                         $result=$user->selectUserByLoginAndPassword();
                         if($result){
                              Session::setUser($result);
                              $this->redirectToRoute("/classe");
                         }else{
                              $this->render("securite/login",[
                                   'error'=>"Login ou Mot de Passe Incorrect"
                              ]); 
                         }

                 } 
         }
         
    }

    public function deconnexion(){
          Session::destroy();
         $this->redirectToRoute("");
    }
}
?>



