<!DOCTYPE html>
<html>
<head>
  <title>Ma liste à faire</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <nav>
    <a href="#">Accueil</a>
    <a href="#">Ajouter une tâche</a>
  </nav>
  <h1>Ma liste à faire</h1>
  <ul>
    <?php
      $tasks = array("Aller en cours", "Faire des courses");
      foreach ($tasks as $task) {
        echo "<li>$task</li>";
      }
    ?>
  </ul>
</body>
</html>