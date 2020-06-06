<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<?php require 'funkcje.php'?>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
if (isset($_POST["Zaloguj"])){
$Login = $_POST["login"];
$Haslo = $_POST["haslo"];
$Login = test_input($Login);
$Haslo = test_input($Haslo);
//echo "Przeslany login: ";
//echo $Login;
//echo '</br>';
//echo "Przeslane haslo: ";
//echo $Haslo;
//echo '</br>';
//echo '</br>';
if($Login == $osoba1->login && $Haslo == $osoba1->haslo){
$_SESSION['zalogowanyImie'] = $osoba1->imieNazwisko;
$_SESSION['zalogowany'] = 1;
}
else if($Login == $osoba2->login && $Haslo == $osoba2->haslo){
$_SESSION['zalogowanyImie'] = $osoba2->imieNazwisko;
$_SESSION['zalogowany'] = 1;
}
else
{
$_SESSION['zalogowany'] = 0;
}
if($_SESSION['zalogowany'] == 1){
header("Location:user.php");
}
else{
header("Location:index.php");
}
}
?>
</body>
</html>
