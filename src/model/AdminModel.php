<?php

class AdminModel {
public function getAllUsers () {
  echo('c');
      // $dbConnection = new db();
      // $test = $dbConnection->dbConnect();
      // echo($test);
      // $req = $test->prepare('SELECT * FROM users');

      // return $req;
}

  public function getUserById ($userId) {
      $db = db::dbConnect();
      $req = $db->prepare(`SELECT * FROM users WHERE id = $userId`);

      return $req;
  }

  public function deleteUserById($userId) {
    $db = db::dbConnect();
    $req = $db->prepare(`DELETE FROM users WHERE id = $userId`);

    return $req;
  }
}

?>