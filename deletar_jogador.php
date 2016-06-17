<?php
session_start();

if(isset($_SESSION['user'])){
	echo "Logado como ". $_SESSION['user'];
}
else {
	echo"<script language='javascript' type='text/javascript'>alert('Voce de estar logado');window.location.href='index.php';</script>";
}

if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		mysql_connect("localhost", "root","") or die(mysql_error());
		mysql_select_db("baile") or die("Erro ao conectar no bando");
		$id = $_GET['id'];
		mysql_query("DELETE FROM elenco WHERE id='$id'");
		header("location: editar_elenco.php");
	}
?>
