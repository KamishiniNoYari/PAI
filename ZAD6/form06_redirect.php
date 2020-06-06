<?php
if(!isset($_SESSION)){ session_start();}
$_SESSION['link'] = mysqli_connect("localhost","scott","tiger","instytut");
if(!$_SESSION['link'])
{
	printf("Connect failed:%s\n",mysqli_connect_error());
	exit();
}
if(isset($_POST['id_prac'])&&is_numeric($_POST['id_prac'])&&is_string($_POST['nazwisko'])){
	$sql_query="INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
	$stmt=$_SESSION['link']->prepare($sql_query);
	$stmt->bind_param("is",$_POST['id_prac'],$_POST['nazwisko']);
	$result=$stmt->execute();;
	if(!$result)
	{
		printf("Query failure:%s\n",mysqli_error($_SESSION['link']));
		header("Location:form06_post.php");
		$_SESSION['message'] = "Add new user failure!";
	}
	else{
		header("Location:form06_post.php");
		$_SESSION['message'] = "Add new user success!";
	}
}
?>