<?php
if(!isset($_SESSION)) {session_start(); }
$_SESSION['link'] = mysqli_connect("localhost","scott","tiger","instytut");
if(!$_SESSION['link'])
{
    printf("Connect failed:%s\n",mysqli_connect_error());
    exit();
}
$sql_stmt="SELECT * FROM pracownicy";
$result=$_SESSION['link']->query($sql_stmt);
$fields=mysqli_fetch_fields($result);
printf("<h1>PRACOWNICY</h1>");
printf("<table boarder=\"1\">");
printf("<tr><th>%s</th><th>%s</th></tr>",$fields[0]->name,$fields[1]->name);
while($row=mysqli_fetch_array($result))
	printf("<tr><td>%s</td><td>%s</td></tr>",$row[0],$row[1]);
printf("</table>");
$result->free();
$_SESSION['link']->close();
?>
<a href="form06_post.php">Add worker</a>
