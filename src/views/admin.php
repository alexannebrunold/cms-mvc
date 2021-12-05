
<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";

$controller = new Admin;
$users = $controller->getAllUsers();
// if($_SESSION['isAdmin'] === true) {
?>


<h1>Admin</h1>


<?php foreach ($users as $user) { ?>
    <li
    onclick="<?php $controller->deleteUserById($user['id']); ?>"
    >
 <?php print_r($user['id']); ?>
</li>


<?php };
// }
?>