<?php
include_once 'database/database.php';
$connection = mysqli_connect(HOST,USER,PASS,'baile');

$adversario =$_POST['adversario'];
$local =  $_POST['local'];
$horario = $_POST['horario'];

$sql = "INSERT INTO jogos (adversario,local,horario) VALUES ('$adversario','$local','$horario')";
mysqli_query($connection,$sql);
header("Location:home.php");

 ?>
