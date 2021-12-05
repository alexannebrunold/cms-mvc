<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
UserController::createArticle();
?>

<body>
  <div class="container mt-3" style="width: 40%;">
    <form  method="post">
      <div class="mb-3">
        <label class="form-label" for="image">Image</label>
        <input class="form-control" id="image" type="text" name="image" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="title">Titre</label>
        <input class="form-control" id="title" type="text" name="title" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="content">Contenu</label>
        <input class="form-control" id="content" type="content" name="content" />
      </div>

      <button class="mt-3 btn btn-primary" type="submit">Créer l'article</button>
    </form>
  </div>


</body>


</html>