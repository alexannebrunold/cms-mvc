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

   public function createArticle($article)
   {

      $db = db::dbConnect();

      $columns = implode(", ",array_keys($article));
      // $values = implode(", ", array_values($article));

      $user_id = $article['user_id'];
      $content = $article['content'];
      $image = $article['image'];
      $title = $article['title'];
      $id = $article['id'];
      $published_date = $article['published_date'];

      $req = $db->prepare("INSERT INTO articles($columns) VALUES('$id', '$image', '$title', '$content', '$published_date', '$user_id')");
      $exec = $req->execute();
      return $exec;

   }

   public function getAllArticles () {

      $db = db::dbConnect();
      $query = 'SELECT * FROM articles';
      $req = $db->prepare($query);
      $req->execute();

    $result = $req->fetchAll(\PDO::FETCH_BOTH);

    return $result;
}
}