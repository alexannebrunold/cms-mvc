<?php
namespace Src;

use db;

class AdminModel {
  function getUserById ($userId) {
      $db = db::dbConnect();
      $req = $db->prepare("SELECT * FROM users WHERE id = $userId");

      return $req;
  }

  public function deleteUserById($userId) {
    $db = db::dbConnect();
    $req = $db->prepare("DELETE FROM users WHERE id = $userId");

    return $req;
  }
}

?>