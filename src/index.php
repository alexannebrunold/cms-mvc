<?php
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/bootstrap.php";
require($_SERVER["DOCUMENT_ROOT"] . "/controller/UserController.php");

$path = $_SERVER["REQUEST_URI"];

switch($path) {
  // case null:
  // // Renvoie sur page d'accueil
  // $controller = new Src\controller\Home;
  // $controller->redirectToHomePage($path);
  // case '/':
  //   // Renvoie sur page d'accueil
  //   $controller = new Src\controller\Home;
  //   $controller->redirectToHomePage($path);

  case '/admin':
  require './views/admin.php';
  break;

  case '/register':
    require './views/register.php';
    break;

  case '/createUser':
    UserController::createUser();
    break;
}

?>
