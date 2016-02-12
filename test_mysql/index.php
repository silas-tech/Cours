<?php
DEFINE(SERVER,"localhost");
DEFINE(LOGIN,"root");
DEFINE(PASSWORD,"mdpsql");
DEFINE(BASE,"myBase");

$connect = mysqli_connect(SERVER,LOGIN,PASSWORD,BASE)or die("pb de connexion au serveur");


//$reInsert = mysqli_query($connect,"INSERT INTO login VALUES ('','Jack', 'password')");
$update = mysqli_query($connect,"UPDATE login SET login = 'ptdr', mdp = 'mdpddp' WHERE id = 3");


$result = mysqli_query($connect,"SELECT * FROM login");
while($data=mysqli_fetch_assoc($result)) {
  echo "login: " . $data["login"] . "<br>";
  echo "password: " . $data["mdp"] . "<br><br>";
};
?>
