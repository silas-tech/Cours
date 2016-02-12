<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>test sql</title>
</head>
<body>
  <form class="cakeForm" action="#" method="post" name="addCake">
    <label for="cakeName">Name: </label>
    <input type="text" name="cakeName" value="" maxlength="50">
    <br><br>
    <label for="cakeDesc">Description</label>
    <textarea name="cakeDesc" rows="8" cols="40">Describe</textarea>
    <br>
    <button type="submit" name="button">Add</button>
  </form>
  <?php
  if (isset($_POST['cakeName'])) {
    include 'indent.php';
    $connect = mysqli_connect(SERVER,LOGIN,PASSWORD,BASE)OR DIE("oups");
    //$req = "INSERT INTO tableCake (cakeName, cakeDesc) VALUES ()"
    unset($_POST['cakeName']);
  }

  ?>
</body>
</html>
