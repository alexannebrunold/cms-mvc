<?php
//phpinfo();

$path = $_SERVER["REQUEST_URI"];

echo('coucou');

require_once('./controller/home.php');
require_once('./controller/admin.php');


switch($path) {
  // case null:
  // // Renvoie sur page d'accueil
  // $controller = new Src\controller\Home;
  // $controller->redirectToHomePage($path);
  // case '/':
  //   // Renvoie sur page d'accueil
  //   $controller = new Src\controller\Home;
  //   $controller->redirectToHomePage($path);
  case 'admin':
  //return admin
  $controller = new Src\controller\Admin;
  $controller->$adminController();
  // case 'user':
  //   //return user
  //   $controller = new \controller\AdminController;
  // $controller->$userController();
}
?>