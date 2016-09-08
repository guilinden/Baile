<?php
include_once 'database/database.php';
session_start();

if(isset($_SESSION['user'])){
	echo "Logado como ". $_SESSION['user'];
}
else {
	echo"<script language='javascript' type='text/javascript'>alert('Voce de estar logado');window.location.href='index.php';</script>";
}

if($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$con = mysql_connect(HOST,USER,PASS,'baile');
		$id = $_GET['id'];
		mysql_query($con,"DELETE FROM elenco WHERE id='$id'");
		header("location: editar_elenco.php");
	}
?>
