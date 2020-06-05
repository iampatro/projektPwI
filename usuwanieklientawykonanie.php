<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Usuwanie Klienta wykonaj</title>
    
</head>
<body>
<?php
            $host = 'localhost';
            $user = 'patro_4';
            $password = '7c8q1%yMs';
            $database = 'klienci';       
        
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


            if(isset($_POST['b'])){
                $id = $_POST['id'];
                
                $sql = 'DELETE from daneklientow WHERE id = :id';
                
                $stmt = $db -> prepare($sql);
                $stmt -> execute(['id' => $id]);
            }          
        
        } catch (PDOException $e) {
            die("");
        } 
?>
<?php
header("Location: tabelaklienci.php");
?>
</body>
</html>