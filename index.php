<?php
include_once 'database/database.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Baile de Munique</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- Custom CSS -->
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
              <li><a href="index.php">Tabela de jogos</a></li>
              <li><a href="elenco.php">Elenco</a></li>
              <li><a href="marcar_jogo.php">Marcar um jogo</a></li>
              <li><a href="login.php">Login</a></li>

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
    </br>
      <h3>Acompanhe os jogos da nossa equipe</h3></br>
      <div id='tab_jogos'>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Adversario</th>
            <th>Local</th>
            <th>Data/Horario</th>
          </tr>
        </thead>
        <tbody>
          <?php
              $cont = 0;
              $con =  mysqli_connect(HOST,USER,PASS,'baile') or die ("ERROR"); //Connect to server
              $query = mysqli_query($con,"SELECT * FROM jogos"); // SQL Query
              while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
              {
                  $cont = $cont + 1;
                  Print "<tr>";
                      Print '<th>'. $cont . "</th>";
                      Print '<th>'. $row['adversario'] . "</th>";
                      Print '<td>'. $row['local'] . "</td>";
                      Print '<td>'. date('d/m/Y H:i:s', strtotime($row['horario'])) . "</td>";
		   Print "</tr>";
              }

          ?>
        </tbody>
      </table>
    </div>






</body>

</html>
