<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP 1</title>
  </head>

  <body>
    <h2>
      Passare come argomenti in GET nome e cognome e salutare l'interlocutore
    </h2>

    <?php

    $nome = $_GET["name"];
    $cognome = $_GET["surname"];

    ?>

    <h4>Buongiorno <?php echo $nome ?> <?php echo $cognome ?>.</h4>

    <?php echo "Ciao ". $nome . " " . $cognome . ".";?>

  </body>
</html>
