<?php

class Admin extends UserController {
  // supprimer un user

  function getAllUsers () {
    $admin = new AdminModel;
    return $admin->getAllUsers();
  }

   function deleteUserById($id) {
    // var_dump('cc');
    $admin = new AdminModel;

    $userId = $admin->getUserById($id);

    $isUserDeleted = $admin->deleteUserById($userId);

    // var_dump($isUserDeleted);
  }

}

?>