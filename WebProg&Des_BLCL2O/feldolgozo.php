<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozó</title>
</head>
<body>
    <?php

    if (isset($_POST)) {
        echo "<h2>Úrlap adatok:</h2>"
    
        $nev = $_POST["nev"];
        $pin = $_POST["turaname"];
        $fav_fruit = $_POST["szint"];
        $age = $_POST["email"];
        $feet_size = $_POST["accept"];
        $confidence = $_POST["message"];
    
        echo "<p><strong>Név:</strong>". $nev . "</p>"
        echo "<p><strong>Túra neve:</strong>". $turaname . "</p>"
        echo "<p><strong>Felkészültségi szint:</strong>". $szint . "</p>"
        echo "<p><strong>Kapcsolat:</strong>". $email . "</p>"
        echo "<p><strong>Elfogad</strong>". $accept . "</p>"
        echo "<p><strong>Leírás:</strong>". $message . "</p>"
    } else {
        echo "<h2>Űrlap nem lett beküldve"
    }
    ?>

    <a href="BLCL2O_urlap.html">Vissza az űrlap</a>

</body>
</html>