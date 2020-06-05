<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Seria 3</title>
	<link rel="stylesheet" href="style2.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Lato|Josefin+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
	
<body>
        <h1 class="text-center">Skonfiguruj swój model 3</h1>

        <div class="container">
            <form action="dodajKonfiguracje3.php" method="post">
                <div class="form-group">
                    <label for="inputName">Podaj imię i nazwisko</label>
                    <input type="text" class="form-control" name="inputName">
                </div>
                <div class="form-group">
                    <label for="inputEmail">Podaj adres email</label>
                    <input type="text" class="form-control" name="inputEmail">
                </div>  

                <div class="form-group">
                    <label for="selectEngine">Wybierz silnik</label>
                    <select class="form-control" id="selectEngine" name="selectEngine">
                        <option id="1">1.6d 150hp</option>
                        <option id="2">2.0 192hp</option>
                        <option id="3">3.0 240hp</option>
                        <option id="4">4.4 480hp</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="selectColor">Wybierz kolor</label>
                    <select class="form-control" id="selectColor" name="selectColor">
                        <option id="1">Czarny</option>
                        <option id="2">Biały</option>
                        <option id="3">Zielony</option>
                        <option id="4">Czerwony</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-block btn-success" onclick="closeWindow()">Wyślij konfigurację do najbliższego salonu</button>
            </form>
        </div>

    
        <script>
            function configureX() {
                conf = window.open('confgiureX.php', '', 'width=500,height:700');
            }

            function closeWindows() {
                conf.close();
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>