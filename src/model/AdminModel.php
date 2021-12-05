<?php

class AdminModel {
public function getAllUsers () {

      $db = db::dbConnect();
      $query = 'SELECT * FROM users';
      $req = $db->prepare($query);
      $req->execute();

    $result = $req->fetchAll(\PDO::FETCH_BOTH);

    return $result;
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