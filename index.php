<?php
    include_once("conexion_db.php");
    include_once("sesion.php");
    session_start();
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['password'];
    $result=mysqli_query($con, "select * from usuarios where correo='$correo'")or die('Error en la sesion');
$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bienvenido</title>
<link rel="stylesheet" href="">
</head>
<body>
<h2>Bienvenido <?php echo $row['nombre']; ?></h2>
</body>
</html>
    