<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
?>

<body>
  <div class="container mt-3" style="width: 40%;">
    <form action="createUser" method="post">
      <div class="mb-3">
        <label class="form-label" for="firstName">First Name</label>
        <input class="form-control" id="firstName" type="text" name="firstName" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="lastName">Last Name</label>
        <input class="form-control" id="lastName" type="text" name="lastName" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="password">Password</label>
        <input class="form-control" id="password" type="text" name="password" />
      </div>

      <div class="mb-3">
        <label class="form-label" for="confirmationPassword">Confirm Password</label>
        <input class="form-control" id="confirmationPassword" type="text" name="confirmationPassword" />
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" name="isAdmin">
        <label class="form-check-label" for="flexCheckChecked">
          This user is ADMIN
        </label>
      </div>

      <button class="mt-3 btn btn-primary" type="submit">Envoyer</button>
    </form>
  </div>
</body>

</html>