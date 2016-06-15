<?php
$connection = mysql_connect("localhost","root","");
mysql_select_db("baile",$connection);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$posicao = $_POST['posicao'];

$sql = "INSERT INTO elenco (nome,idade,posicao) VALUES ('$nome','$idade','$posicao')";
mysql_query($sql); 
header("Location:home.php");

 ?>