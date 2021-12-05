<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Tp HP</title>
</head>

<nav>
  <ul class="nav justify-content-center">
    <li class="nav-item">
      <a class="nav-link" href="/">Acceuil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/register">Créer un utilisateur</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/login">Connexions</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/addArticle">Ajouter un article</a>
    </li>
  </ul>



  <?php if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === "true") : ?>
    <li>
      <a href="/">User list</a>
    </li>
  <?php endif ?>
</nav>