<?php
if (!isset($_SESSION)){ session_start(); };
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
</head>
<body>
<form action="form06_redirect.php" method="POST">
id_prac <input type="text" name="id_prac"><br></br>
nazwisko <input type="text" name="nazwisko"><br></br>
<input type="submit" value="Insert">
<input type="reset" value="Clean">
</form>
<a href="form06_get.php">See workers list</a>
</html>
<?php
if(isset($_SESSION['message'])){
	printf($_SESSION['message']);
	unset($_SESSION['message']);
}
?>
