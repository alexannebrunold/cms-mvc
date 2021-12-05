<?php
class Admin extends UserController {

  function getAllUsers () {
    $admin = new AdminModel;
    return $admin->getAllUsers();
  }

   function deleteUserById($userId) {
    var_dump($userId);
    // $admin = new AdminModel;

    // // $userIdd = $admin->getUserById($userId);

    // return $admin->deleteUserById($userId);

  }

}

?>