<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tp HP</title>
</head>

<nav>
    <a href="/register">Register</a>
    <a href="/login">Log in</a>
    
    <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === "true") : ?>
         <li>
            <a href="/">User list</a>
         </li>
    <?php endif ?>
</nav> 