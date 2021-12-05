<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";

$controller = new Admin;
$users = $controller->getAllUsers();
var_dump($controller)
?>

<h1>Coucou</h1>


<!-- <?php for ($user = 0; $user <= $users; $user++) { ?>
    <li><?php $user ?></li>
<?php }
?> -->
