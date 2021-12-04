<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/views/header.php";
?>

<body>
  <div>
    <form action="/createUser" method="post">
      <label>First Name : </label>
      <input type="text" name="firstName" /><br />
      <label>Last Name : </label>
      <input type="text" name="lastName" /><br />
      <label>Email : </label>
      <input type="email" name="email" /><br />
      <label>Admin : </label>
      <input type="checkbox" name="isAdmin" value="true" /><br />
      <label>Password : </label>
      <input type="password" name="password" /><br />
      <label>Verify Password : </label>
      <input type="password" name="confirmationPassword" /><br />
      <br>
      <input type="submit" value="Envoyer">
    </form>
  </div>
</body>

</html>