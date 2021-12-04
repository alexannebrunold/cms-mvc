<?php
session_start();

require_once $_SERVER["DOCUMENT_ROOT"] . "/config/bootstrap.php";


require($_SERVER["DOCUMENT_ROOT"] . "/controller/UserController.php");
require_once('./controller/userController.php');
require_once('./controller/homeController.php');
require_once('./controller/adminController.php');

use controller\UserController;

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
  //return admin
  require './views/admin.php';
break;
  case '/register':
    require './views/register.php';

  case '/createUser':
    UserController::createUser();
    break;
}
