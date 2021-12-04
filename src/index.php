<?php
session_start();

$path = $_SERVER["REQUEST_URI"];

echo('coucou');

require_once('./controller/home.php');
require_once('./controller/admin.php');

require($_SERVER["DOCUMENT_ROOT"]."/controller/UserController.php");

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

  case '/register':
    require "./views/register.php";

  case '/createUser': 
    UserController::createUser();
    break;
}
