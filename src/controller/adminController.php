<?php
namespace Src;

require_once('./controller/userController.php');
require_once('./model/AdminModel.php');

class Admin extends controller\User {
  // supprimer un user

  //Fonction qui appel un model
   function deleteUserById() {
    var_dump('cc');
    $admin = new AdminModel;
$userId = $admin->getUserById()

    var_dump($abc);
  }
  static function addUser() {
        $user = new UserModel;
        $isEmailExist = $user->verifyEmail($_POST['email']);

        if(!$isEmailExist) {
            $user->insertUser($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'], $_POST['isAdmin']);
        }
    }
}

  //1- trouver et comparer l'id reçu de l'évènement click avec ceux en db
  //2- supprimer l'id trouvé
  //3- Renvoyer une réponse de succès

}

?>