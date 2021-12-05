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
      $req->execute();
      $result = $req->fetch(\PDO::FETCH_BOTH);
      return print_r($result);
  }

 function deleteUserById($userId) {
var_dump($userId);
//     $db = db::dbConnect();
//     $req = $db->prepare(`DELETE FROM users WHERE id = $userId`);
// $req->execute();
//     return $req;
  }
}

?>