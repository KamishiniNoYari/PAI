<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
<?php require 'funkcje.php'?>
</head>
<body>
<h1>Nasz system</h1>
<form action="logowanie.php" method="post">
<div>
Login: <input name="login" value="" /> <br />
Haslo: <input name="haslo" value="" /> <br />
<input type="submit" value="Zaloguj" name="Zaloguj" />
</div>
</form>
<?php
if(isset($_POST['wyloguj'])){
session_unset();
}
 ?>
<form action = "cookie.php" method="get">
    Czas: <input type="number" id="czas" name="czas">
    <input type="submit" value="utworzCookie" name="utworzCookie">
</form>
<?php if (isset($_COOKIE['Cookie'])){
    echo "Cookie :".$_COOKIE['Cookie'];
}
else{
    echo "Przedawnione Cookie";
}
?>
</body>
</html>
