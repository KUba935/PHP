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
        $liczba1 = 5;
        $liczba2 = 25;

        $suma = $liczba1 + $liczba2;
        $roznica = $liczba2 - $liczba1;
        $iloczyn = $liczba1 * $liczba2;
        $reszta = $liczba1 % $liczba2;
        echo "Suma: $suma, Różnica: $roznica, Iloczyn: $iloczyn, Reszta: $reszta";
    ?>

    <!-- Warunkowe -->

    <?php
        $age = 18;
        echo"<br>";

        if ($age >= 18){
            echo TRUE;
        } else{
            echo FALSE;
        }
    ?>
    <?php
        $temperatura = -1;
        echo"<br>";

        if ($temperatura < 0) {
            echo"Ujemna";
        } elseif ($temperatura > 0) {
            echo"Dodatnia";            
        } else{
            echo"Równa zero";
        }
    ?>
    <?php
        echo"<br>";
        $color = "czerwony";
        switch ($color) {
        case "czerwony":
            echo "zielony";
            break;
        case "zielony":
            echo "niebieski";
            break;
        default:
            echo "inny kolor";
        }
    ?>
    <?php
        echo"<br>";
        $grade = 50;
        if ($grade >= 50) {
            echo "Zdany";
        } elseif ($grade < 50) {
            echo "Niezdany";
        }
    ?>
    <?php
        echo"<br>";
        $username = "";

        if (empty($username)) {
            $username = "nazwa";
        }
        echo "$username";
    ?>
    <!-- Pętle -->

    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<br>$i";
        }
    ?>
    <?php
        $number = 2;
        while ($number < 20 +1) {
            if ($number % 2 == 0) {
                echo"<br>Parzysta $number";
            }
            $number++;
        }
    ?>
    <?php
        echo"<br>";
        $tablice = ["Jakub", "Roman", "Seth", "Dean", "Sebastian"];
        foreach($tablice as $tablica) {
            echo"$tablica";
        }
    ?>
</body>
</html>
