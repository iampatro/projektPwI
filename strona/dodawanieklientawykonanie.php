<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
    
</head>
<body>
    
<?php
            $host = 'localhost';
            $user = 'patro_4';
            $password = '7c8q1%yMs';
            $database = 'klienci';

            $imie = $_GET["imie"];
            $nazwisko = $_GET["nazwisko"];
            $telefon = $_GET["telefon"];
        

            $conn = mysqli_connect($host, $user, $password, $database);
            if(!$conn) {
                die('Connection refused: '.mysqli_connect_error());
            }

            $sql    = 'INSERT INTO daneklientow (imie, nazwisko, Telefon) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$telefon.'")';
            $result = mysqli_query($conn, $sql);
?>
<?php
header("Location: tabelaklienci.php");
?>
</body>
</html>