<?php

class UserModel
{
   public function insertUser($user)
   {
      // $userEntity = new UserEntity;

      $db = db::dbConnect();

      $columns = implode(", ",array_keys($user));

      var_dump($columns);

      $article_id = $user['article_id'];
      $first_name = $user['first_name'];
      $email = $user['email'];
      $type = $user['type'];
      $id = $user['id'];
      $last_name = $user['last_name'];

      $req = $db->prepare("INSERT INTO users ($columns) VALUES('$id', '$type', '$article_id', '$first_name', '$last_name', '$email')");
      $exec = $req->execute();
      return $exec;

      // $_SESSION['email'] = $userEntity->getEmail();
      // $_SESSION['isAdmin'] = $userEntity->getIsAdmin();
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