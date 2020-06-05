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
	$seria 	= 'Seria X';

	$host       = 'localhost';
    $user       = 'patro_1';
    $password   = '8q91?xsQ';
    $dbname     = 'logowanie';

    $conn = mysqli_connect($host, $user, $password, $dbname);
    if(!$conn) {
        die('Connection refused: '.mysqli_connect_error());
    }

    $sql    = 'INSERT INTO konfiguracje (seria, dane, email, silnik, kolor) VALUES ("'.$seria.'", "'.$dane.'", "'.$email.'", "'.$engine.'", "'.$color.'")';
    $result = mysqli_query($conn, $sql);

    redirect('index.php');
?>
<?php
header("Location: seriax7.html");
?>
    
    </body>
</html>