<?php
namespace Src\controller;

require_once('./utils/redirectUrl.php');

class Home {

  function redirectToHomePage($path) {
    var_dump('path', $path);
    return redirectUrl($path);
  }

}
?>