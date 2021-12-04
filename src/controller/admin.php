<?php
namespace Src\controller;

class Admin {

  function redirectToHomePage($path) {
    var_dump('path', $path);
    return redirectUrl($path);
  }

}
?>