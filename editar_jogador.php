<?php
$connection = mysql_connect("localhost","root","");
mysql_select_db("baile",$connection);


if(isset($_POST['editar'])){
	$nome = $_POST['nome'];
	$posicao = $_POST['posicao'];
	$idade = $_POST['idade'];
	$folego = $_POST['folego'];
	$velocidade = $_POST['velocidade'];
	$forca = $_POST['forca'];
	$drible = $_POST['drible'];
	$id = $_GET['id'];

	$sql = ("UPDATE elenco SET nome='$nome', posicao='$posicao', idade='$idade', folego='$folego', velocidade='$velocidade', forca='$forca', drible='$drible' WHERE id='$id'");
	mysql_query($sql);
	//header("Location:elenco.php");

}
	session_start();
	if(isset($_SESSION['user'])){
		//$id = session_id();
	}
	else {
	echo"<script language='javascript' type='text/javascript'>alert('Voce de estar logado');window.location.href='index.php';</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar Jogo</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
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
            <a class="navbar-brand" href="#">Baile de Munique</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-2">
            <ul class="nav navbar-nav navbar-right">


              <li><a href="home.php">Home</a></li>
              <li>
                <a class="btn btn-default btn-outline btn-circle"  data-toggle="collapse" href="logout.php" aria-expanded="false" aria-controls="nav-collapse2">Logout</a>
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
                <button type="submit" class="btn btn-success">Logout</button>
              </form>
            </div>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav><!-- /.navbar -->

	<h2 align="center">Jogador selecionado</h2>
	<table class="table">
		<thead>
		<tr>
			<th>Nome</th>
			<th>Posicao</th>
			<th>Idade</th>
			<th>Folego</th>
			<th>Velocidade</th>
			<th>Forca</th>
			<th>Drible</th>
		</tr>
	</thead>
	<tbody>
<?php
	$id = $_GET['id'];
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
	$query = mysql_query("Select * from elenco Where id='$id'"); // SQL Query
	while($row = mysql_fetch_array($query)){
		Print "<tr>";
			Print '<td>'. $row['nome'] ."</td>";
			Print '<td>'. $row['posicao'] . "</td>";
			Print '<td>'. $row['idade'] . "</td>";
			Print '<td>'. $row['folego'] . "</td>";
			Print '<td>'. $row['velocidade'] . "</td>";
			Print '<td>'. $row['forca'] . "</td>";
			Print '<td>'. $row['drible'] . "</td>";
		Print "</tr>";
	}
?>
</tbody>
	</table>
</br>
<div class="wrapper">
<form class="form-signin" method="post">
	<h2 class="form-signin-heading">Altere os dados</h2>
	<?php
	$id = $_GET['id'];
	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
	$query = mysql_query("Select * from elenco Where id='$id'"); // SQL Query
	while($row = mysql_fetch_array($query)){
		$nome = $row['nome'];
		$posicao = $row['posicao'];
		$idade = $row['idade'];
	}
	 ?>
	<h4>Nome</h4><input type="text" class="form-control" name="nome" value="<?php echo $nome ?>" /></br>
	<h4>Posicao</h4><input type="text" class="form-control" name="posicao" value="<?php echo $posicao ?>" /></br>
	<h4>Idade</h4><input type="text" class="form-control" name="idade" value="<?php echo $idade ?>" /></br>
	<h2 class="form-signin-heading">Informe os atributos</h2>
	<?php
	function dropdown($titulo){
		$id = $_GET['id'];
		mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
		mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
		$query = mysql_query("Select * from elenco Where id='$id'"); // SQL Query
		while($row = mysql_fetch_array($query)){
			$titulo = strtolower($titulo);
			$valor = $row[$titulo];
		}
		Print '<div class="form-group">';
		Print '<label for="sel1">' . $titulo .' :</label>';
		Print '<select class="form-control" id="sel1" name="' . strtolower($titulo) .'">';

		for ($i=1; $i<100 ; $i++) {
				if($i != $valor){
				Print '<option>' . $i . '</option>';
				}
				else{
				Print '<option selected>' . $i . '</option>';

				}

			}

		Print '</select>';
		Print '</div>';
	}

	 dropdown("Folego");
	 dropdown("Velocidade");
	 dropdown("Forca");
	 dropdown("Drible");
	 ?>

	<button class="btn btn-lg btn-primary btn-block" type="submit" name="editar">Enviar</button>
</form>
</div>
</body>
</html>
