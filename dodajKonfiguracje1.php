<!DOCTYPE html>
<html lang="en">
    
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">>
    
</head>
<body>
<?php
	$dane 	= $_POST['inputName'];
	$email 	= $_POST['inputEmail'];
	$engine = $_POST['selectEngine'];
	$color 	= $_POST['selectColor'];
	$seria 	= 'Seria 1';

	$host       = 'localhost';
    $user       = 'patro_1';
    $password   = '8q91?xsQ';
    $dbname     = 'logowanie';

    echo 'debug: before conn';
    $conn = mysqli_connect($host, $user, $password, $dbname);
    if(!$conn) {
        die('Connection refused: '.mysqli_connect_error());
    }

    echo 'debug: before sql';
    $sql    = 'INSERT INTO konfiguracje (seria, dane, email, silnik, kolor) VALUES ("'.$seria.'", "'.$dane.'", "'.$email.'", "'.$engine.'", "'.$color.'")';
    $result = mysqli_query($conn, $sql);
    echo 'debug: before header';
    
    #header("Location: seria1.html");
    ?>
    <script>
        close();
    </script>
    </body>
</html>