<?php
  session_start();
 include('./librerias/conexion.php');
 if (isset($_SESSION['user_id'])) {
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
    <?php  
    $sql = "SELECT * FROM users WHERE id = '".$_SESSION['user_id']."' ";
    $result = mysqli_query($link,$sql);
    while($row = mysqli_fetch_array($result)){
    ?>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control"  name="name" value="<?=$row['name']?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control"   name="email" value="<?=$row['email']?>">
      </div>
      <div class="form-group">
        <label for="password">Contraseña:</label>
        <input type="password" class="form-control"  name="password" value="<?=$row['password']?>">
      </div>
    </form>
    <?php  
    }
    ?>
  </div>
</div>

</body>
</html>
<?php 
 }
 else{
  header('Location:./index.php');
 }
?>
