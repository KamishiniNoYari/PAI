<?php if (!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<meta charset='UTF-8' />
</head>
<body>
<?php
require_once("funkcje.php");
if($_SESSION['zalogowany']!=1){
header("Location:index.php");
}
else{
 echo "Zalogowano jako ".$_SESSION['zalogowanyImie'];
}
?>
</br>
<a href='index.php'>Niepoprawny ref</a>
<form action="index.php" method="post">
<input type="submit" value="wyloguj" name="wyloguj"/>
</form>
<form action='load_image.php' method='POST' enctype='multipart/form-data'>
<input type="file" name="plik" id="plik">
<input type="submit" value="zdjecie" name="zdjecie">
</form>
</body>
</html>