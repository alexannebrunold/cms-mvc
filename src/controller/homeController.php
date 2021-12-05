<?php
class Home {

  function redirectToHomePage($path) {
    var_dump('path', $path);
    return redirectUrl($path);
  }

}
?>