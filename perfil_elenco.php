<?php
include_once 'database/database.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<script src="jquery-3.0.0.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Baile de Munique</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Tabela de jogos</a></li>
              <li><a href="elenco.php">Elenco</a></li>
              <li><a href="marcar_jogo.php">Marcar um jogo</a></li>
              <li>
                <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="login.php" aria-expanded="false" aria-controls="nav-collapse2">Sign in</a>
              </li>
            </ul>
            <div class="collapse nav navbar-nav nav-collapse" id="nav-collapse2">
              <form class="navbar-form navbar-right form-inline" role="form">
                <div class="form-group">
                  <label class="sr-only" for="Email">Email</label>
                  <input type="email" class="form-control" id="Email" placeholder="Email" autofocus required />
                </div>
                <div class="form-group">
                  <label class="sr-only" for="Password">Password</label>
                  <input type="password" class="form-control" id="Password" placeholder="Password" required />
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
              </form>
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>

	<div id="teste">

  <ul class="list-group">
			<?php

			$connection = mysql_connect(HOST,USER,PASS);
			mysql_select_db("baile",$connection);
			$id = $_GET['id'];
			$sql = mysql_query("SELECT * FROM elenco WHERE id='$id'");
			while($row = mysql_fetch_array($sql)){

				Print '<div id="testando">';
				Print $row['nome'];
        Print '</br>';
        
				Print '</div>';


			}

			function info($valor){
				$connection = mysql_connect(HOST,USER,PASS);
				mysql_select_db("baile",$connection);
				$id = $_GET['id'];
				$sql = mysql_query("SELECT * FROM elenco WHERE id='$id'");
				while($row = mysql_fetch_array($sql)){
					Print '<li class="list-group-item">';
					$first = strtoupper(substr($valor, 0, 1));
					$num = 0 - (strlen($valor) - 1);
					$second = strtolower(substr($valor,$num));
					$valor1  = $first . $second;
					Print $valor1 . ": " . $row[$valor];
					Print '</li>';

				}
			}

			function habilidades($valor){
			$connection = mysql_connect(HOST,USER,PASS);
			mysql_select_db("baile",$connection);
			$id = $_GET['id'];
			$sql = mysql_query("SELECT * FROM elenco WHERE id='$id'");
			while($row = mysql_fetch_array($sql)){
				$first = strtoupper(substr($valor, 0, 1));
				$num = 0 - (strlen($valor) - 1);
				$second = strtolower(substr($valor,$num));
				$valor1  = $first . $second;
				$numero = $row[$valor] . "%";
				if($row[$valor] < 75 AND $row[$valor] > 40){
						$bg = "#ffff00";
				}
				elseif($row[$valor] < 41){
						$bg = "#ff4000";
				}
				else{
						$bg = "#27ae60";
				}
				Print '<div class="skillbar clearfix " data-percent="'. $numero .'">';
				Print '<div class="skillbar-title" style="background: '. $bg .';"><span>'. $valor1 .'</span></div>';
				Print '<div class="skillbar-bar" style="background: '. $bg .';"></div>';
				Print '<div class="skill-bar-percent">'. $row[$valor] .'%</div>';
				Print '</div>';
			}
			}
			info("idade");
			info("posicao");
			Print '<h2>Atributos</h2>';
			habilidades("folego");
			habilidades("velocidade");
			habilidades("forca");
			habilidades("drible");

			 ?>

  </div>
  </ul>
</div>
	<script src="jquery.js"></script>
</body>
</html>
