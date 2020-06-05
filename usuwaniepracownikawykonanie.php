<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>zadanie</title>
    
</head>
<body>
<?php
            $host = 'localhost';
            $user = 'patro_3';
            $password = 'k7%vr4I3';
            $database = 'pracownicy';       
        
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


            if(isset($_POST['b'])){
                $id = $_POST['id'];
                
                $sql = 'DELETE from danepracownikow WHERE id = :id';
                
                $stmt = $db -> prepare($sql);
                $stmt -> execute(['id' => $id]);
            }          
        
        } catch (PDOException $e) {
            die("");
        } 
?>
<?php
header("Location: tabelapracownicy.php");
?>
</body>
</html>