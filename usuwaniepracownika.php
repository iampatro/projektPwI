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
            $sql = 'SELECT id, imie, nazwisko, telefon
                    from danepracownikow';
            $stmt = $db -> prepare($sql);
            $stmt -> execute();
            
            $r = $stmt -> fetchAll();
            
        
        } catch (PDOException $e) {
            die("");
        } 
?>
    
 <form action="usuwaniepracownikawykonanie.php" method="post">
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