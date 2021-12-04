<?php

function redirectUrl($path) {
  return header('Location' . $path);
}

?>