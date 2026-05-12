<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $name = "Jakub";
    $age = 16;
    $country = "Polska";
    echo ("Nazywam się $name, mam $age lat, i mieszkam w $country");

    echo("<br>");

    $width = 8;
    $height = 5;

    $pole = $width + $height;

    echo("Pole: $pole");

    echo("<br>");

    $wartosc = 10;
    $dodatek = $wartosc + 1;

    echo("$dodatek");

    echo("<br>");

    $isMember = false;
    var_dump($isMember);

    echo("<br>");

    $zmienna1 = 5;
    $zmienna2 = 9;

    $Suma = $zmienna1 + $zmienna2;
    $Różnica = $zmienna1 - $zmienna2;
    $Iloczyn = $zmienna1 * $zmienna2;
    $Reszta = $zmienna1 / $zmienna2;

    echo "Suma: $Suma, Różnica: $Różnica, Iloczyn: $Iloczyn, Reszta: $Reszta";

    // Dział 2

    echo "<br>";

    $liczba = 18;

    if ($liczba >= 18) {
        echo " Jesteś pełnoletni ";
    } elseif ($liczba < 18) {
        echo " Nie jesteś pełnoletni ";
    }

    echo "<br>";

    $temperatura= 20;

    if ($temperatura >= 20) {
        echo " Jest dodatnia ";
    } elseif ($temperatura == 0) {
        echo " Jest zero";
    } elseif ($temperatura < 0) {
        echo " Jest ujemna ";
    }

    echo "<br>";

    



    ?>




</body>
</html>