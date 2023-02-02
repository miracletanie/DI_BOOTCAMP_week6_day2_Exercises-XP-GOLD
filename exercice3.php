<?php

if (isset($_POST["envoyer"])) {

    $bd = $_POST["annee"];
    function siecle($year)
    {
        $siecle = floor(($year - 1) / 100) + 1;
        $suffix = $siecle % 100 == 11 || $siecle % 100 == 12 || $siecle % 100 == 13 ? "th" : ($siecle % 10 == 1 ? "st" : ($siecle % 10 == 2 ? "nd" : ($siecle % 10 == 3 ? "rd" : "th")));
        return $siecle . $suffix . " siecle";

    }
    echo siecle($bd);
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
        <label for="">Entrer une année</label>
        <input type="number" name= "annee" >
        <input type="submit" name="envoyer">
    </form>
</body>
</html>

