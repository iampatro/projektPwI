<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Usuwanie Klienta</title>
    
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
            $sql = 'SELECT id, imie, nazwisko, telefon
                    from daneklientow';
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            
            $r = $stmt -> fetchAll();
            
        
        } catch (PDOException $e) {
            die("");
        } 
?>
    
 <form action="usuwanieklientawykonanie.php" method="post">
<select name =  'id'>
    <?php
        
            foreach($r as $o){ 
        ?>
        <option value = "<?php echo $o["id"]; ?>">
            <?php echo $o ["imie"]." 
            ".$o ["nazwisko"]; ?>
            
        </option>
        <?php
                
            }
    ?>
    </select>
        
      <input type="submit" name = "b" value = "Usuń">
    </form>

</body>
    
</html>