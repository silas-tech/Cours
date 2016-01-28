<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Challenge PHP Basics</title>
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
    $("#array").DataTable();
  } );
  </script>
</head>
<body>
  <?php
  // Afficher les erreurs à l'écran
  ini_set('display_errors', 1);
  // Enregistrer les erreurs dans un fichier de log
  ini_set('log_errors', 1);
  // Nom du fichier qui enregistre les logs (attentionaux droits à l'écriture)
  ini_set('error_log', dirname(__file__) . '/log_error_php.txt');

  $games = array("battlefront" ,"metro" ,"black ops" ,"gta" ,"mario" ,"mortal combat" ,"skyrim" ,"shadow of mordor");
  $max = sizeof($games);

  // affichage d'une ligne du tableau jeux
  function abc($game){
    echo "<tr><td>" . $game . "</td></tr>";
  }

  ?>
  <table id="array" class="display" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th>Video Games:</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < $max; $i++){
        abc($games[$i]);
      }
      ?>
    </tbody>
  </table>
</body>
</html>
