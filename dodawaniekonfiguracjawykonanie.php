<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Konfiguracje</title>
    
</head>
<body>
    
<?php
            $host = 'localhost';
            $user = 'patro_1';
            $password = '8q91?xsQ';
            $database = 'logowanie';

        $dane = $_GET["dane"];
        $email = $_GET["email"];
        $seria = $_GET["seria"];
        $silnik = $_GET["silnik"];
        $kolor = $_GET["kolor"];
    
    

            $dsn = 'mysql:host='. $host .';dbname='. $dbname;
        $pdo = new PDO($dsn, $user, $password);
    

        $sql = 'INSERT into konfiguracje (dane, email, seria, silnik, kolor)
             values(:dane, :email,
             :seria, :silnik, :kolor)';
    
        $stmt = $pdo -> prepare($sql);

        $stmt -> execute(['dane' => $dane, 
                          'email' => $email ,
                          'seria' => $seria,
                          'silnik' => $silnik,
                          'kolor' => $kolor
                            ]);
?>

</body>
</html>