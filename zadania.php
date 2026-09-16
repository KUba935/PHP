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
        $age = "16";
        $country = "Polski";
        echo "Cześć nazywam się $name! Mam $age! Pochodzę z $country";
    ?>
    <?php
        $width = 8;
        $height = 5;
        $sum = $width * $height;
        echo "Pole prostokąta wynosi $sum";
    ?>
    <?php
        $x = 10;
        $x += 1;
        echo "$x";
    ?>
    <?php
        $isMember = false;
        echo var_dump($isMember);
    ?>
    <?php
        $liczba1 = 6;
        $liczba2 = 7;

        $suma = $liczba1 + $liczba2;
        $różnica = $liczba2 - $liczba1;
    ?>
</body>
</html>