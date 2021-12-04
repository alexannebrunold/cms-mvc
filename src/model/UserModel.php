<?php


class UserModel
{
   public function insertUser(UserEntity $user)
   {
      $db = db::dbConnect();
      $req = $db->prepare("INSERT INTO users(firstName, lastName, email, password, isAdmin) VALUES(:firstName, :lastName,  :email,  :password, :isAdmin)");

      $req->bindValue(':email', $user->getEmail());
      $req->bindValue(':password', $user->getPassword());
      $req->bindValue(':firstName', $user->getFirstName());
      $req->bindValue(':lastName', $user->getLastName());
      $req->bindValue(':isAdmin', $user->getIsAdmin());

      return $req->execute();

      $_SESSION['email'] = $user->getEmail();
      $_SESSION['isAdmin'] = $user->getIsAdmin();
   }

   public function verifyEmail(string $email)
   {
      $db = db::dbConnect();
      $userEmail = $db->prepare("SELECT email FROM users WHERE email = :email");

      $userEmail->execute([
         'email' => $email,
      ]);

      $emailExist = $userEmail->fetch();

      if ($emailExist) return true;

      return false;
   }
}