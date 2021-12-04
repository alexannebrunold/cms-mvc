<?php

include ("./entity/UserEntity.php");

class UserModel {
   public function insertUser(UserEntity $user) {
      $db = data::dbConnect();
      $cryptedPassword =  password_hash(getPassword(), PASSWORD_DEFAULT);
      $req = $db->prepare("INSERT INTO users(firstName, lastName, email, password, isAdmin) VALUES(:firstName, :lastName,  :email,  :password, :isAdmin)");
      

      $req->execute(array(
         "firstName" => getFirstName(),
         "lastName" => getLastName(),
         "email" => getEmail(), 
         "password" => $cryptedPassword,
         "isAdmin" => getIsAdmin() 
      ));

      $_SESSION['email'] = getEmail();
      $_SESSION['isAdmin'] = getIsAdmin(); 
   }

   public function verifyEmail() { 
      $db = data::dbConnect();
      $userEmail = $db->prepare("SELECT email FROM users WHERE email = :email");

      $userEmail->execute([
          'email' => getEmail(),
      ]);

      $emailExist = $userEmail->fetch();
 
      if ($emailExist) return true;

      return false;
  }
}