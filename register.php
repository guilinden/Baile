<?php
$connection = mysql_connect("localhost","root","");
mysql_select_db("baile",$connection);

$adversario = $_POST['adversario'];
$local = $_POST['local'];
$horario = $_POST['horario'];

$sql = "INSERT INTO jogos (adversario,local,horario) VALUES ('$adversario','$local','$horario')";
mysql_query($sql); 
header("Location:home.php");

 ?>