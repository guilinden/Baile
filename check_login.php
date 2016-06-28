<?php
include_once 'database/database.php';
$connection = mysql_connect(HOST,USER,PASS);
mysql_select_db("baile",$connection);

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");
		if(mysql_num_rows($sql)==0){
			echo "<script language='javascript' type='text/javascript'>alert('Usuario e/ou senha incorretos');window.location.href='login.php';</script>";
		}
		else{
		session_start();
		$_SESSION['user'] = $usuario;
		header("Location:home.php");
		}

?>
