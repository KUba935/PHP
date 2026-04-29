<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

$liczba = 1;

    if ($liczba >= 1) {
        echo " Jest dodatnia ";
    } elseif ($liczba == 0) {
        echo " Jest zero";
    } elseif ($liczba < 0) {
        echo " Jest ujemna ";
    }


$liczba = 2;

    if ($liczba % 2 == 0) {
        echo " Jest parzysta ";
    } else {
        echo " Nie jest parzysta ";
    }



$liczbaa = 5;
$liczbab = 4;

    if ($liczbaa > $liczbab) {
        echo "  Liczbaa jest większa ";
    } else {
        echo " Liczbab jest mniejsza ";
    }


$liczba = 18;

    if ($liczba >= 18) {
        echo " Jest pełnoletni ";
    } elseif ($liczba < 18) {
        echo " Nie jest pełnoletni ";
    }


$liczba = 80;

    if ($liczba == 100) {
        echo " 6 ";
    } elseif ($liczba == 80) {
        echo " 4 ";
    }
    
    




?>



</body>
</html>