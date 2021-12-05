<?php
class Home {

  function redirectToHomePage($path) {
    var_dump('path', $path);
    return redirectUrl($path);
  }

  function getAllArticles() {

    $user = new UserModel;
    return $user->getAllArticles();
  }
}
?>