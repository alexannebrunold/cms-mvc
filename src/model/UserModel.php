<?php

class UserModel {
   public function insertUser(UserEntity $user) {
      $db = db::dbConnect();
      $cryptedPassword =  password_hash($user->getPassword(), PASSWORD_DEFAULT);
      $req = $db->prepare("INSERT INTO users(firstName, lastName, email, password, isAdmin) VALUES(:firstName, :lastName,  :email,  :password, :isAdmin)");     

      $req->execute(array(
         "firstName" => $user->getFirstName(),
         "lastName" => $user->getLastName(),
         "email" => $user->getEmail(), 
         "password" => $cryptedPassword,
         "isAdmin" => $user->getIsAdmin() 
      ));

      $_SESSION['email'] = $user->getEmail();
      $_SESSION['isAdmin'] = $user->getIsAdmin(); 
   }
 
   public function verifyEmail(UserEntity $user) { 
      $db = db::dbConnect();
      $userEmail = $db->prepare("SELECT email FROM users WHERE email = :email");

      $userEmail->execute([
          'email' => $user->getEmail(),
      ]);

      $emailExist = $userEmail->fetch();
 
      if ($emailExist) return true;

      return false;
  }
}