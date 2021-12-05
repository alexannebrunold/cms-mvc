<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";

$controller = new Admin;
$users = $controller->getAllUsers();
?>


<h1>Coucou //deleteUserById($user['id'])</h1>


<?php foreach ($users as $user) { ?>
    <button
    onclick="<?php $controller->deleteUserById($user['id']); ?>"
    >
 <?php print_r($user['id']); ?>
</button>


<?php }; ?>
