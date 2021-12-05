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
      $req = $db->prepare("INSERT INTO article(image, title, content, author, published_date) VALUES(:image, :title, :content, :author, :published_date)");

      $exec = $req->execute([
            'image' => $article["image"],
            'titre' => $article["title"],
            'contenu' => $article["content"],
            'auteur' => $article["author"],
            'published_date' => $article["published_date"]
        ]);

         return $exec;

      // return $req->execute();
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