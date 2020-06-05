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
            $user = 'patro_1';
            $password = '8q91?xsQ';
            $database = 'logowanie';
        
        try {
            $db = new PDO("mysql:host=$host;dbname=$database", $user, $password, 
                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $sql = 'SELECT id, dane, email, seria, silnik, kolor
                    from konfiguracje';
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            
            $r = $stmt -> fetchAll();
            
        
        } catch (PDOException $e) {
            die("");
        } 
?>
    
 <form action="usuwaniekonfiguracjawykonanie.php" method="post">
<select name =  'id'>
    <?php
        
            foreach($r as $o){ 
        ?>
        <option value = "<?php echo $o["id"]; ?>">
            <?php echo $o ["dane"]." 
            ".$o ["email"]; ?>
            
        </option>
        <?php
                
            }
    ?>
    </select>
        
      <input type="submit" name = "b" value = "Usuń">
    </form>

</body>
    
</html>