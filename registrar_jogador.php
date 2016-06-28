<?php
include_once 'database/database.php';
$connection = mysql_connect(HOST,USER,PASS);
mysql_select_db("baile",$connection);

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$posicao = $_POST['posicao'];
$folego = $_POST['folego'];
$velocidade = $_POST['velocidade'];
$drible = $_POST['drible'];
$forca = $_POST['forca'];
$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
$novo_nome = md5(time()) . $extensao;
$diretorio = "../Baile/imagens/";
move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

$sql = "INSERT INTO elenco (nome,idade,posicao,folego,velocidade,drible,forca,foto) VALUES ('$nome','$idade','$posicao','$folego','$velocidade','$drible','$forca','$novo_nome')";
mysql_query($sql);
header("Location:home.php");

 ?>
