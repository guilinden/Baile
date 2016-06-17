<?php
$connection = mysql_connect("localhost","root","");
mysql_select_db("baile",$connection);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$posicao = $_POST['posicao'];
$folego = $_POST['folego'];
$velocidade = $_POST['velocidade'];
$drible = $_POST['drible'];
$forca = $_POST['forca'];

$sql = "INSERT INTO elenco (nome,idade,posicao,folego,velocidade,drible,forca) VALUES ('$nome','$idade','$posicao','$folego','$velocidade','$drible','$forca')";
mysql_query($sql);
header("Location:home.php");

 ?>
