<?php
class Admin extends UserController {

  function getAllUsers () {
    $admin = new AdminModel;
    return $admin->getAllUsers();
  }

   function deleteUserById($id) {
    $admin = new AdminModel;

    $userId = $admin->getUserById($id);

    $isUserDeleted = $admin->deleteUserById($userId);

  }

}

?>