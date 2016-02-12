
    <?php
    DEFINE(SERVER,"localhost");
    DEFINE(LOGIN,"root");
    DEFINE(PASSWORD,"mdpsql");
    DEFINE(BASE,"challenge");

    $connect = mysqli_connect(SERVER,LOGIN,PASSWORD,BASE)or die("pb de connexion au serveur");

    $answer = mysqli_query($connect,"SELECT * FROM testAjax WHERE id =" . $_POST["value"]);
    while($data = mysqli_fetch_assoc($answer)) {
      echo "First Name: " . $data["firstName"] . "<br>";
      echo "Surname: " . $data["SurName"] . "<br>";
      echo "age: " . $data["age"] . "<br>";
      echo "sex: " . $data["sex"] . "<br>";
      echo "@: " . $data["email"] . "<br>";
    };
    ?>
