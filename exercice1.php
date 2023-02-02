<?php

  function fact($n){ 
    $f = 0; 
    for ($i = 0; $i <= $n; $i++){ 
      $f = $f * $i; 
    } 
    return $f; 
  } 
  $n = $_GET["n"] ?? "";
  $f = fact($n); 
  echo "La factorielle de $n est $f"; 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form method="get">
        <label for="">Entrer un nombre</label>
        <input type="number" name="n">
        <input type="submit" >
    </form>
    </body>
</html>