<?php
		include_once 'database/database.php';

		$connection = mysqli_connect(HOST,USER,PASS,'baile') or die("ERRO AO CONECTAR NO BANCO");
		$adversario = $_POST['adversario'];
		$local = $_POST['local'];
		$horario = $_POST['horario'];
		$info = $_POST['info'];
		$numero = $_POST['numero'];
		$sql = "INSERT INTO marcar_jogo (adversario,local,horario,info,numero) VALUES ('$adversario', '$local','$horario','$info','$numero')";
		mysqli_query($connection,$sql);
		echo"<script language='javascript' type='text/javascript'>alert('Solicitacao enviada com sucesso');window.location.href='index.php';</script>";



 ?>
