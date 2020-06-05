<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign in</title>
</head>
<body>


<div class="loging_box">
    <br><br><br><br>
    <h1>Sign In</h1>
    <form action="zaloguj.php" method="post">
        <input type="text" placeholder="Username" name="login">
        <input type="password" placeholder="Password" name="haslo">
        <button type="submit" class="button" name="zaloguj">Zaloguj</button>
    </form>
</div>
<?php
session_start();
if(isset($_SESSION["logowanie"]))
{
    header("Location:panel.php");

}else{
    if(isset($_POST["login"]))
    {

        $haslo = "login";
        $login = "haslo";
        
        if($_POST["login"] == $login && $_POST["haslo"] == $haslo)
        {
            $_SESSION["logowanie"]=$_POST["login"];
            header("Location:panel.php");
        }
        else
        {
            echo "Zła nazwa uzytkownika lub hasło";
        }
    }
}
?>
</body>
</html>