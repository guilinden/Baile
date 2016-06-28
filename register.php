<?php
include_once 'database/database.php';
$connection = mysql_connect(HOST,USER,PASS);
mysql_select_db("baile",$connection);

$adversario = $_POST['adversario'];
$local = $_POST['local'];
$horario = $_POST['horario'];

$sql = "INSERT INTO jogos (adversario,local,horario) VALUES ('$adversario','$local','$horario')";
mysql_query($sql);
header("Location:home.php");

 ?>
