<?php
		include_once 'database/database.php';

		$connection = mysql_connect(HOST,USER,PASS);
		mysql_select_db("baile",$connection);
		$adversario = $_POST['adversario'];
		$local = $_POST['local'];
		$horario = $_POST['horario'];
		$info = $_POST['info'];
		$numero = mysql_real_escape_string($_POST['numero']);
		$sql = "INSERT INTO marcar_jogo (adversario,local,horario,info,numero) VALUES ('$adversario', '$local','$horario','$info','$numero')";
		mysql_query($sql);
		echo"<script language='javascript' type='text/javascript'>alert('Solicitacao enviada com sucesso');window.location.href='index.php';</script>";



 ?>
