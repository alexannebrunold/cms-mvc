<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
UserController::createArticle();
?>

<body>

<p> Welcome <?php echo $_POST["title"]; ?><br>
Your email address is: <?php echo $_POST["content"]; ?> </p>

  <div class="container mt-3" style="width: 40%;">
    <form  method="post">
      <!-- <div class="mb-3">
        <label class="form-label" for="image">Image</label>
        <input class="form-control" id="image" type="text" name="image" />
      </div> -->

      <div class="mb-3">
        <label class="form-label" for="title">Titre</label>
        <input class="form-control" id="title" type="text" name="title" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="content">content</label>
        <input class="form-control" id="content" type="content" name="content" />
      </div>
<!--
      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" id="password" type="password" name="password" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="published_date">published_date</label>
        <input class="form-control" id="published_date" type="published_date" name="published_date" />
      </div> -->
      <button class="mt-3 btn btn-primary" type="submit">Envoyer</button>
    </form>
  </div>


</body>


</html>