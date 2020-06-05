<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>
    
</head>
<body>
    
<?php
        $imie = $_GET["imie"];
        $nazwisko = $_GET["nazwisko"];
        $telefon = $_GET["telefon"];
    
    $host       = 'localhost';
    $user       = 'patro_3';
    $password   = 'k7%vr4I3';
    $dbname     = 'pracownicy';

    $conn = mysqli_connect($host, $user, $password, $dbname);
    if(!$conn) {
        die('Connection refused: '.mysqli_connect_error());
    }

    $sql    = 'INSERT INTO danepracownikow (imie, nazwisko, telefon) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$telefon.'")';
    $result = mysqli_query($conn, $sql);

    
?>
<?php
header("Location: tabelapracownicy.php");
?>
</body>
</html>