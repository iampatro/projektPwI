<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>BMW POLSKA</title>
	
	
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap&subset=latin-ext" rel="stylesheet" type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<script src="timer.js"></script>
		
</head>

<body onload="odliczanie();">
	
	<div id="container">
	
		<div class="rectangle">
			<div id="logo"><a href="index.html" class="tilelinkhtml5">BMW Polska</a></div>
			<div id="zegar">12:00:00</div>
			<div style="clear: both;"></div>
		</div>
		
		<div class="square">
			<div class="tile1">
				<a href="Seria1.html" class="tilelink"><i class="icon-cab"></i><br />Seria 1</a>
			</div>
			<a href="Seria3.html" class="tilelinkhtml5">
				<div class="tile1">
					<i class="icon-cab"></i><br />Seria 3
				</div>
			</a>
			<div style="clear:both;"></div>
			
			<div class="tile2">
				<a href="Seria5.html" class="tilelink"><i class="icon-cab"></i><br />Seria 5</a>
			</div>
			<div class="tile3">
				<a href="Seria7.html" class="tilelink"><i class="icon-cab"></i><br />Seria 7</a>
			</div>
			<div style="clear:both;"></div>
			
			<div class="tile4">
				<a href="SeriaX7.html" class="tilelink"><i class="icon-cab"></i><br />Seria X</a>
			</div>
			<div class="tile4">
				<a href="" class="tilelink"><br /></a>
			</div>
		</div>
		<div class="square">
			<div class="tile5">
                <form action="panel.php" method="post">
        <h1>Dane do logowania</h1> 
        
        <input type="text" placeholder="Login" name="login">
        <input type="password" placeholder="Haslo" name="haslo">
        
        <input type="submit" value="Zaloguj się">
                    </form>
                
			</div>
            
            			<div class="gmail">
				<a href="https://www.gmail.com" target="_blank" class="sociallink"><i class="icon-mail"></i></a>
			</div>
			<div class="facebook">
				<a href="https://www.facebook.com/BMW.Polska/?__tn__=%2Cd%2CP-R&eid=ARDav3wuZqSacy_VX6gYHrQ46TvYGE8UoxyhXglDeMh187sj28xgnou3uLRNNcFjTkXaf3RCviBkNKCi" target="_blank" class="sociallink"><i class="icon-facebook"></i></a>
			</div>
			<div class="twitter">
				<a href="https://twitter.com/bmw" target="_blank" class="sociallink"><i class="icon-twitter"></i></a>
			</div>
			<div class="youtube">
				<a href="https://www.youtube.com/user/BMWPolska" target="_blank" class="sociallink"><i class="icon-youtube"></i> </a>	
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="clear: both;"></div>
		
		<div class="rectangle"> Patryk Jurewicz - Salon BMW Polska  <i class="icon-mail-alt"></i> patrykk.jurewicz@gmail.com</div>
	
	</div>
	
</body>
</html>