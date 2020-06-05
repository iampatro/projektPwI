
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>BMW POLSKA</title>
	
	
	<link rel="stylesheet" href="adminpanel.css" type="text/css" />

		
</head>
    <body>
        <!-- LOGOWANIE -->
        <?php 
            session_start();  
            
            if(empty($_SESSION['zalogowany']))
            {
                $login  = $_POST['login'];
                $pass   = $_POST['haslo'];

                $host       =  'localhost';
                $user       = 'patro_1';
                $password   = '8q91?xsQ';
                $dbname     = 'logowanie';

                $conn = mysqli_connect($host, $user, $password, $dbname);
                if(!$conn) {
                    die('Connection refused: '.mysqli_connect_error());
                }

                $sql    = "SELECT * FROM pracownicy WHERE `login` = '".$login."'";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_array($result);
                    if($pass == $row['haslo']) 
                    {
                        //logowanie użytkownika
                        $_SESSION['zalogowany'] = TRUE;
                        $_SESSION['login'] = $row['login'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['haslo'] = $row['haslo'];
                    }
                    else
                    {
                        header('Location: index.php');
                    }

                    #echo '<br><h1>'.$row['email'].'</h1><br>';
                    #print_r($row);
                }
                else
                {
                    header('Location: index.php');
                }
            }
            else
            {
                echo '<b>Zalogowany:</b> '.$_SESSION['login'];
            }
            
            /**
            $dsn = 'mysql:host='. $host .';dbname='. $dbname;
            $pdo = new PDO($dsn, $user, $password);
            
            $sql = "SELECT * FROM pracownicy WHERE login = ".$login;
            $stmt = $pdo -> prepare($sql);
            $stmt -> execute();
        
            $result = $stmt -> fetchAll();
            
            print_r($result);
            **/
        ?>

	<div id="container">
	
		<div class="rectangle">
			<div id="logo"><a href="panel1.html" class="tilelinkhtml5">Admin Panel</a></div>
		</div>
		
		<div class="square">
			<div class="tile1">
				<a href="tabelapracownicy.php" class="tilelink"><br />Pracownicy</a>
			</div>
            

            <div class="tile1">
                <a href="konfiguracje.php" class="tilelinkhtml5"><br />Konfiguracje</a>
            </div>
			</a>
			
			<div class="tile2">
				<a href="tabelaklienci.php" class="tilelink"><br />Klienci</a>
			</div>
            
			<div class="tile3">
				<a href="wyloguj.php" class="tilelink"><br />Wyloguj się</a>
			</div>
			
			<div class="tile4">
				<a href="" class="tilelink"><br /> </a>
			</div>
			<div class="tile4">
				<a href="" class="tilelink"><br /></a>
			</div>
            
            			<div class="tile4">
				<a href="" class="tilelink"><br /></a>
			</div>
			<div class="tile4">
				<a href="index.php" class="tilelink"><br />Strona główna</a>
			</div>
            
            
		</div>

	
	</div>
	
</body>
</head>
</html>