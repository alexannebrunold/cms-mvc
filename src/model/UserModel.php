<?php


class UserModel
{
   public function insertUser(UserEntity $user)
   {
      $db = db::dbConnect();
      $req = $db->prepare("INSERT INTO users(firstName, lastName, email, password, isAdmin) VALUES(:firstName, :lastName,  :email,  :password, :isAdmin)");

      $exec = $req->execute(array(
         ':email' => $user->getEmail(),
         ':password' => $user->getPassword(),
         ':firstName' => $user->getFirstName(),
         ':lastName' => $user->getLastName(),
         ':isAdmin' => $user->getIsAdmin()
      ));

      return $exec;

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
