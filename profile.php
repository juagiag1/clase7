<!DOCTYPE html>
<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse bg-primary">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="./inicio.php">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="./profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
      <li><a href="./logout.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div style="margin-top: 20px;"></div>
  <div class="col-md-4 col-md-offset-4">
    <h2 class="text-center">Datos personales</h2>

    <form action="#" method="POST">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control"  name="name" value="prueba">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control"   name="email" value="prueba@mail.com">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control"  name="password" value="123">
      </div>
    </form>

  </div>
</div>

</body>
</html>