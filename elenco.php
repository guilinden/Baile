<?php
include_once 'database/database.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Elenco</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
      </nav><!-- /.navbar -->
	<h2>Elenco</h2>
	<div width="100px" >
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Posicao</th>
				<th>Idade</th>
			</tr>
		</thead>
		<tbody>
		<?php
				$cont = 0;
				mysql_connect(HOST,USER,PASS) or die(mysql_error()); //Connect to server
				mysql_select_db("baile") or die("Cannot connect to database"); //connect to database
				$query = mysql_query("SELECT * FROM elenco"); // SQL Query
				while($row = mysql_fetch_array($query))
				{
					$cont = $cont + 1;
					Print "<tr>";
						Print '<th class="col-md-1">'. $cont . "</th>";
						Print '<th class="col-md-2"><a href="perfil_elenco.php?id=' . $row['id'] .'">'. $row['nome'] .'</a></th>';
						Print '<td class="col-md-2">'. $row['posicao'] . "</td>";
						Print '<td class="col-md-2">'. $row['idade'] . "</td>";
					Print "</tr>";
				}

			?>
		</tbody>
	</table>
</div>
</body>
</html>
