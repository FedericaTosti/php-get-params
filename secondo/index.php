<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP 2</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <h1>
      Passare come argomento in GET una mail e stampare un div che contenga OK se contiene un punto e una chiocciola KO altrimenti
    </h1>

    <?php

    $mail = $_GET["mail"];


    $output = "OK";

    if (strpos($mail, "@") === false || strpos($mail, ".") === false) {

      $class = "red";
      $output = "KO";

    } else {

      $class = "green";
      $output;
    }

    // echo "<div class='stampa'>";
    // echo $output;
    // echo "</div>";

    echo "<div class='stampa'>" . $output . "</div>";

    ?>

    <h2 class="<?php echo $class; ?>"> <?php echo $output; ?></h2>

  </body>
</html>
