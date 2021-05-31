<?php
    include("../Modelo/conexion_db.php");
    $errores = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = filter_var(strtoupper($_POST['nombre']), FILTER_SANITIZE_STRING);
        $clave =  $_POST['contraseña'];
        $nickname = filter_var(strtoupper($_POST['nickname']), FILTER_SANITIZE_STRING);
        $edad = $_POST['edad'];
        $ingresoMensual = $_POST['ingresoMensual'];
        $ingresosExtras = $_POST['ingresoExtra'];
        $gastoFijo = $_POST['gastoFijo'];
        $gastoVariable = $_POST['gastoExtra'];
        
        $tabla = $conexion->prepare('SELECT * FROM Usuarios WHERE Nickname = :Nickname LIMIT 1');
        $tabla->execute(array(':Nickname' => $nickname));
        $resultado = $tabla->fetch();
        //print_r($resultado);
        if (is_array($resultado) == true){
            $errores .= "Ya esta en uso el nickname elegido";
        } 
        $clave = hash('sha512', $clave);
        if ($errores == ''){
            $tabla = $conexion->prepare("INSERT INTO Usuarios (Id, Nombre, Nickname, Edad, Clave, GastoFijo, GastoVariable, IngresoMensual, IngresoExtra) VALUES (null, :Nombre, :Nickname, :Edad, :Clave, :GastoFijo, :GastoVariable, :IngresoMensual, :IngresoExtra)");
            if($tabla->execute(array(':Nombre' => $nombre,':Nickname' => $nickname,':Edad' => $edad,':Clave' => $clave,':GastoFijo' => $gastoFijo,':GastoVariable' => $gastoVariable,':IngresoMensual' => $ingresoMensual,':IngresoExtra' => $ingresosExtras))) {
                echo "Se ha creado el nuevo registro!";
            }else{
                echo "hay errores en la carga, consulte al administrador";
            }
                    
        }
        
    }
?>