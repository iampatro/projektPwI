<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pracownicy</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    
        <style>
        
            
            form input{
    width: 100px;
    height: 30px;
    border:none;
    margin-top: 10px;
    text-align: center;
    font-size: 12px;
    color: #666;
}

.tilelink
{
	text-decoration: none;
	display: block;
    width: 100px;
    height: 30px;
    border: none;
    margin-top: 10px;
    text-align: center;
    font-size: 12px;
    color: #666;
}

    </style>
    
</head>


    
<table class="table">

<body>
    
    <div class="container-fluid">
    <table class="table">
        <thead>
    <tr>
    <th> ID </th>
    <th> Imie </th>
    <th> Nazwisko </th>
    <th> Telefon </th>
    </tr>
        </thead>
        <tbody>
        
<?php
    $host = 'localhost';
    $user = 'patro_3';
    $password = 'k7%vr4I3';
    $database = 'pracownicy';
    
    try {
        $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
              array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $sql = 'SELECT * FROM danepracownikow';
        $stmt = $db -> query($sql) -> fetchAll();
        
        foreach($stmt as $row){
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["imie"] . "</td><td>"
            . $row["nazwisko"]. "</td><td>" . $row["telefon"] . "</td>";
        }
        echo '</tbody></table>';
    
    } catch (PDOException $e) {
        die('');
    } 
?>

    

        <div class="btn-group" role="group" aria-label="example">
            <form action="dodawaniepracownika.php">
                <button class="btn btn-primary" type="submit">Dodaj</button>
            </form>

            <form action="panel.php">
                <button class="btn btn-primary" type="submit">Powrót </button>
            </form>

            <form action="usuwaniepracownika.php">
                <button class="btn btn-primary" type="submit">Usuń </button><br />
            </form>
        </div>
        </div>
        </body>

</html>