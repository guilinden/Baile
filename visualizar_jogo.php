<?php
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	

	<h2 align="center">Jogo selecionado</h2>
	<table class="table">
		<thead>
		<tr>
			<th>#</th>
			<th>Time</th>
			<th>Local</th>
			<th>Horario</th>
      <th>Info</th>
		</tr>
	</thead>
	<tbody>
		<?php
				$cont = 0;
				$id = $_GET['id'];
				mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
				mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
				$query = mysql_query("Select * from marcar_jogo Where id='$id'"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					$cont = $cont + 1;
					Print "<tr>";
						Print '<th>' . $cont . "</th>";
						Print '<td>'. $row['adversario'] . "</td>";
						Print '<td>'. $row['local'] . "</td>";
						Print '<td>'. $row['horario'] . "</td>";
            Print '<td>'. $row['info'] . "</td>";
					Print "</tr>";
				}
			?>
		</tbody>
	</table>
	</br>
	<div align="center">
	<h2>Marcar esse jogo?</h2>
  <form method="post" align="center">
  <input type="submit" name="marcar" value="Marcar">
	</form>
  </div>
</body>
</html>

<?php
$connection = mysql_connect("localhost","root","");
mysql_select_db("baile",$connection);


if(isset($_REQUEST['marcar'])){
  $id = $_GET['id'];
  $sql="INSERT INTO jogos (adversario,local,horario) SELECT adversario,local,horario FROM marcar_jogo WHERE id='$id'";
  $sql2 = "DELETE FROM marcar_jogo WHERE id='$id'";
	header("Location:home.php");
  mysql_query($sql);
  mysql_query($sql2);
}

 ?>
