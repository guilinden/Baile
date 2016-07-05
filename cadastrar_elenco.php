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
<html >
  <head>
    <meta charset="UTF-8">
    <title>Cadastrar elenco</title>
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
	</head>
	<body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Baile de Munique</a>
        </div>
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
      <div class="wrapper">
    <form class="form-signin" method="post" enctype="multipart/form-data">
      <h2 class="form-signin-heading">Informe os dados</h2>
      <h4>Nome</h4><input type="text" class="form-control" name="nome" placeholder="Time" /></br>
      <h4>Posicao</h4><input type="text" class="form-control" name="posicao" placeholder="Local" /></br>
			<h4>Idade</h4><input type="text" class="form-control" name="idade" placeholder="Local" /></br>
			<h2 class="form-signin-heading">Selecione uma imagem</h2>
			<h4>Foto</h4>
			<input type="file" name="arquivo">
			<h2 class="form-signin-heading">Informe os atributos</h2>
			<?php
			function dropdown($titulo){
				Print '<div class="form-group">';
	      Print '<label for="sel1">' . $titulo .' :</label>';
	      Print '<select class="form-control" id="sel1" name="' . strtolower($titulo) .'">';
				for ($i=1; $i<100 ; $i++) {
						Print '<option>' . $i . '</option>';
				}
				Print '</select>';
				Print '</div>';
			}

			 dropdown("Folego");
			 dropdown("Velocidade");
			 dropdown("Forca");
			 dropdown("Drible");
			 ?>

      <button class="btn btn-lg btn-primary btn-block" type="submit" name="enviar">Enviar</button>
    </form>
  </div>
  </body>
</html>
<?php
if(isset($_POST['enviar'])){

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$posicao = $_POST['posicao'];
$folego = $_POST['folego'];
$velocidade = $_POST['velocidade'];
$drible = $_POST['drible'];
$forca = $_POST['forca'];
$extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
	$novo_nome = md5(time()) . $extensao;
	$diretorio = "imagens/";
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);
$connection = mysql_connect(HOST,USER,PASS);
mysql_select_db("baile",$connection);

$sql = "INSERT INTO elenco (nome,idade,posicao,folego,velocidade,drible,forca,name) VALUES ('$nome','$idade','$posicao','$folego','$velocidade','$drible','$forca','$novo_nome')";
mysql_query($sql);
//header("Location:home.php");
}
 ?>
