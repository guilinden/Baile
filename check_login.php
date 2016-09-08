<?php
include_once 'database/database.php';
$connection = mysqli_connect(HOST,USER,PASS,'baile');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysqli_query($connection,"SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'");
		if(mysqli_num_rows($sql)==0){
			echo "<script language='javascript' type='text/javascript'>alert('Usuario e/ou senha incorretos');window.location.href='login.php';</script>";
		}
		else{
		session_start();
		$_SESSION['user'] = $usuario;
		header("Location:home.php");
		}

?>
