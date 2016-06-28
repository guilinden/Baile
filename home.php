<?php
include_once 'database/database.php';
session_start();
if(isset($_SESSION['user'])){

	$id = session_id();

}
else {
	echo"<script language='javascript' type='text/javascript'>alert('Voce de estar logado');window.location.href='index.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Paginate Table Script - Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.css" rel="stylesheet">
		<link href="estilo.css" rel="stylesheet">
<body>
	<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="home.php"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="cadastrar_jogos.php"><i class="fa fa-list-alt fa-fw"></i>Cadastrar jogos</a></li>
                <li><a href="cadastrar_elenco.php"><i class="fa fa-file-o fa-fw"></i>Cadastrar elenco</a></li>
								<li><a href="jogos_solicitados.php"><i class="fa fa-calendar fa-fw"></i>Jogos solicitados</a></li>
                <li><a href="editar_jogos.php"><i class="fa fa-bar-chart-o fa-fw"></i>Editar jogos</a></li>
                <li><a href="editar_elenco.php"><i class="fa fa-table fa-fw"></i>Editar elenco</a></li>
                <li><a href="logout.php"><i class="fa fa-cogs fa-fw"></i>Logout</a></li>
            </ul>
        </div>
        <div align="center" class="col-md-9 well">
            Painel administrador
        </div>
    </div>
</div>
<div id="foto">
<img src="logo.png" alt="Smiley face">
</div>
</body>
</html>
