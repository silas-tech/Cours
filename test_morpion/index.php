<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>test morpion</title>
</head>
<body>
  <tr>
    <td id="1" onclick="this_id"></td>
    <td id="2"></td>
    <td id="3"></td>
  </tr>
  <script type="text/javascript">
  var cel1 = 0;
  var cel2 = 0;
  var cel3 = 0;
  var cel3 = 0;
  var cel4 = 0;
  var cel5 = 0;
  var cel6 = 0;
  var cel7 = 0;
  var cel8 = 0;
  var cel9 = 0;

  var cel = 'cel' + ts_id;
  if (eval(cel) === 0) {
    if (true) {
      getElementById('id');
    } else if (true) {
      getElementById('id');
    }
  }

  fonction winnerCheck(idPlayer) {
    if (cel5 === idPlayer) {
      if (cel1 === idPlayer && cel9 === idPlayer) {
        alert ("player" + idPlayer +  "wins");
      } else if (cel3 === idPlayer && cel7 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      } else if (cel4 === idPlayer && cel6 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      } else if (cel2 === idPlayer && cel8 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      }
    } else if (cel9 === idPlayer) {
      if (cel8 === idPlayer && cel7 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      } else if (cel6 === idPlayer && cel3 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      }
    } else if (cel1 === idPlayer) {
      if (cel2 === idPlayer && cel3 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      } else if (cel4 === idPlayer && cel7 === idPlayer) {
        alert ("player" + idPlayer + "wins");
      }
    } else {
      alert ("Game Over Tie")
    }
  }
  </script>
</body>
</html>
