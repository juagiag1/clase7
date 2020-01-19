<?php
 include('./librerias/conexion.php');
?>
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

<div class="container">
  <div style="margin-top: 100px;"></div>
  <div class="col-md-4 col-md-offset-4">
    <h2 class="text-center">Accede a tu contenido</h2>
    <p><?php if (isset($_GET['message'])) {
        echo '<div class="alert alert-warning" role="alert">
          <p class="text-center">'.$_GET['message'].'</p>
        </div>';
    } ?></p>
    <form action="./login.php" method="POST">
      <div class="form-group">
        <input type="email" class="form-control"  placeholder="Email" name="email">
      </div>
      <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    </form>
  </div>
</div>

</body>
</html>
