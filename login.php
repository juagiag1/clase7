<?php 
session_start();

include('./librerias/conexion.php');

if (isset($_POST['email']) && isset($_POST['password']) && $_POST['email'] !== "" && $_POST['password'] !== "") {
	$sql = "SELECT * FROM users WHERE email = '".$_POST['email']."' ";
	$result = mysqli_query($link,$sql);
	$count=mysqli_num_rows($result);
	$message = "";
	if ($count<=0) {
		$message = "el usuario no exite"; //no hay en la bbddd ninguna fila con ese valor para email
		header('Location:./index.php?message='.$message.'');
	}else{
		while($row = mysqli_fetch_array($result)){
			if ($row["password"] === $_POST["password"]) {
				// registramos la variable de sesión que guarda la id del usuario
				$_SESSION['user_id'] = $row['id'];
				header('Location:./inicio.php');
			}
			else{
				$message= "contraseña incorrecta";
				header('Location:./index.php?message='.$message.'');
			}
		}
	}
}else{
	$message= "Rellena los campos";
	header('Location:./index.php?message='.$message.'');
}


 ?>
