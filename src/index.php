<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/config/bootstrap.php";

require_once('./controller/home.php');
require_once('./controller/admin.php');
require($_SERVER["DOCUMENT_ROOT"] . "/controller/UserController.php");


$path = $_SERVER["REQUEST_URI"];

switch ($path) {
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
