<?php
    session_start();
    if (!isset($_SESSION['usuario']) || (trim($_SESSION['contraseña']) == '')) {
        header("location: saludFinanciera.html");
        exit();
        }
        $usuario=$_SESSION['usuario'];
?>