<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Bootstrap Snippet: Login Form</title>
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
            </div>
          </div>
        </nav>
      <div class="wrapper">
    <form class="form-signin" action="check_login.php" method="post">
      <h2 class="form-signin-heading">Entrar</h2>
      <input type="text" class="form-control" name="usuario" placeholder="Usuario" />
      <input type="password" class="form-control" name="senha" placeholder="Senha" />
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
  </div>
  </body>
</html>
