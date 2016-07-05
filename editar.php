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
<!DOCTYPE html>
<html>
<head>
	<title>Editar Jogo</title>
	<link href="css/bootstrap.css" rel="stylesheet">
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

	<h2>Jogo selecionado</h2>
	<table class="table">
		<thead>
		<tr>
			<th>#</th>
			<th>Adversario</th>
			<th>Local</th>
			<th>Horario</th>
		</tr>
	</thead>
	<tbody>
		<?php
				$cont = 0;
				$id = $_GET['id'];
				mysql_connect(HOST,USER,PASS) or die(mysql_error()); //Connect to server
				mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
				$query = mysql_query("Select * from jogos Where id='$id'"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					$cont = $cont + 1;
					Print "<tr>";
						Print '<td>' . $cont . "</td>";
						Print '<td>'. $row['adversario'] . "</td>";
						Print '<td>'. $row['local'] . "</td>";
						Print '<td>'. $row['horario'] . "</td>";




					Print "</tr>";
				}
			?>
		</tbody>


	</table>
	</br>
	<div align="center">
	<h2>Editar Partida</h2>
	<form method="post" >
		Time: <input type="text" name="adversario"/></br></br>
		Local: <input type="text" name="local"/></br></br>
		Horario: <input type="datetime-local" name="horario"/></br></br>
		<input type="submit" name="editar" value="Editar">
	</form>
	</div>
</body>
</html>

<?php
$connection = mysql_connect(HOST,USER,PASS);
mysql_select_db("baile",$connection);


if(isset($_POST['editar'])){
	$adversario = $_POST['adversario'];
	$local = $_POST['local'];
	$horario = $_POST['horario'];

	$sql = ("UPDATE jogos SET adversario='$adversario', local='$local', horario='$horario' WHERE id='$id'");
	mysql_query($sql);
	header("Location:home.php");

}

 ?>
