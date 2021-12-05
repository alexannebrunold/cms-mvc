<?php

class Admin extends UserController {
  // supprimer un user

  function getAllUsers () {
    $admin = new AdminModel;
    var_dump($admin);
    // return $admin->getAllUsers();
  }

   function deleteUserById($id) {
    var_dump('cc');
    $admin = new AdminModel;

    //Fonction qui appel un model pour récupérer l'user à delete
      //1- trouver et comparer l'id reçu de l'évènement click avec ceux en db

    $userId = $admin->getUserById($id);


    //Fonction qui apl l'entity pour deleter l'user
    $isUserDeleted = $admin->deleteUserById($userId);

    var_dump($isUserDeleted);
  }

}

?>