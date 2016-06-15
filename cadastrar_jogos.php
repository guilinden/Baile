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
<html >
  <head>
    <meta charset="UTF-8">
    <title>Bootstrap Snippet: Login Form</title>


    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

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

      <div class="wrapper">
    <form class="form-signin" action="register.php" method="post">
      <h2 class="form-signin-heading">Informe os dados</h2>
      <h4>Nome do time</h4><input type="text" class="form-control" name="adversario" placeholder="Time" /></br>
      <h4>Local da partida</h4><input type="text" class="form-control" name="local" placeholder="Local" />
			<h4>Data</h4><input type="datetime-local" class="form-control" name="horario" placeholder="Local" /></br>


      <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
    </form>
  </div>
  </body>
</html>
