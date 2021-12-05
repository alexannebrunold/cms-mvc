<?php

require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";

$controller = new Admin;
$users = $controller->getAllUsers();
print_r($users);

?>

<h1>Coucou</h1>


<?php foreach ($users as $key => $value) { ?>
    <li><?php echo $key." has the value". $value;
 ?></li>
<?php }
?>
