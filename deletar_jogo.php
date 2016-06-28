<?php
include_once 'database/database.php';
session_start();
if(isset($_SESSION['user'])){
	echo "Logado como ". $_SESSION['user'];
	$id = session_id();

}
else {
	echo"<script language='javascript' type='text/javascript'>alert('Voce de estar logado');window.location.href='index.php';</script>";
}

if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect(HOST,USER,PASS) or die(mysql_error());
		mysql_select_db("baile") or die("Erro ao conectar no bando");
		$id = $_GET['id'];
		mysql_query("DELETE FROM marcar_jogo WHERE id='$id'");
		header("Location:jogos_solicitados.php");
	}
?>
