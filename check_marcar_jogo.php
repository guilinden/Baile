<?php

		$connection = mysql_connect("localhost","root","");
		mysql_select_db("baile",$connection);
		$adversario = $_POST['adversario'];
		$local = $_POST['local'];
		$horario = $_POST['horario'];
		$info = $_POST['info'];
		$sql = "INSERT INTO marcar_jogo (adversario,local,horario,info) VALUES ('$adversario', '$local','$horario','$info')";
		mysql_query($sql);
		echo"<script language='javascript' type='text/javascript'>alert('Solicitacao enviada com sucesso');window.location.href='index.php';</script>";



 ?>
