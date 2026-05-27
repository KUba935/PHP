<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Zadanie 1
    try {
        $conn = mysqli_connect("localhost", "root", "", "phpprzyklad");

        if (mysqli_connect_errno()) {
            echo "Nie połączono";
            throw new Exception('roman');
        } else {
            echo "Połączono";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    echo "<br>";

    // Zadanie 2

    $sql = "SELECT * FROM uzytkownicy";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nazwa = $row['nazwa'];
        $email = $row['email'];
        echo "<p> Id: $id - Imię: $nazwa - Nazwisko: $email </p>";
    }

    echo "<br>";

    // Zadanie 3

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['insert'])) {

        $nazwa = $_POST['nazwa'];
        $email = $_POST['email'];
        $haslo = $_POST['password'];

        $sql = "INSERT INTO uzytkownicy (nazwa, email, haslo) VALUES ('$nazwa', '$email', '$haslo')";
        mysqli_query($conn, $sql);

        echo "Użytkownik dodany pomyślnie";
    }

    // Zadanie 4

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['insert2'])) {

        $id = $_POST['id'];
        $nazwa = $_POST['nazwa'];
        $email = $_POST['email'];

        $sql = "UPDATE uzytkownicy SET nazwa = '$nazwa', email = '$email'  WHERE id = '$id'";
        mysqli_query($conn, $sql);
    }

    // Zadanie 5

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['insert3'])) {

        $id = $_POST['id'];

        $sql = "DELETE FROM uzytkownicy WHERE id = '$id'";
        mysqli_query($conn, $sql);
    }

    // Zadanie 6

    $sql = "SELECT id, nazwa, cena FROM produkty WHERE dostępność = 1";
    $result = mysqli_query($conn, $sql);

    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse;' class=\"xd1\">";
    echo "<tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Cena</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {

        if (!is_array($row) || empty($row)) {
            echo "<tr><td>Brak Danych!</td></tr>";
            exit;
        }

        $id = htmlspecialchars($row['id']);
        $nazwa = htmlspecialchars($row['nazwa']);
        $cena = htmlspecialchars($row['cena']);

        echo "
            <tr>
                <td>$id</td>
                <td>$nazwa</td>
                <td>$cena</td>
            </tr>
        ";
    }


    echo "</table>";

    // Zadanie 7



    ?>
    <form action='index.php' method='POST'>
        <label for='nazwa'>
            <p>Podaj Nazwe:</p>
            <input type='text' name='nazwa' id='nazwa' />
        </label>
        <label for='email'>
            <p>Podaj Email:</p>
            <input type='email' name='email' id='email' />
        </label>
        <label for='password'>
            <p>Podaj Hasło:</p>
            <input type='password' name='password' id='password' />
        </label>
        <button name="insert">Dodaj użytkownika</button>
    </form>

    <br>

    <form action='index.php' method='POST'>
        <label for='id'>
            <p>Podaj id</p>
            <input type="number" name='id' id='id'>
        </label>
        <label for='nazwa'>
            <p>Podaj nową nazwę</p>
            <input type='text' name='nazwa' id='nazwa'>
        </label>
        <label for="email">
            <p>Podaj nowy email</p>
            <input type="email" name='email' id='email'>
        </label>
        <button name="insert2">Zaaktualizuj</button>
    </form>

    <br>

    <form action='index.php' method='POST'>
        <label for='id'>
            <p>Podaj id</p>
            <input type="number" name='id' id='id'>
        </label>
        <button name="insert3">Usuń</button>

        

    </form>

    <br>

    <form action="index.php" method='POST'>
        <label for="nazwa">
            <p>Podaj nazwę produktu</p>
            <input type="text" name='nazwa' id='nazwa'>
        </label>
        <label for="opis">
            <p>Podaj opis produktu</p>
            <input type="text" name='opis' id='opis'>
        </label>
        <label for=""></label>
    </form>
</body>

</html>