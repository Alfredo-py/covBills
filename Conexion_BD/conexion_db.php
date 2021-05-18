<?php
    //Conexión Base de datos
    $servidor = "localhost";
    $usuarioDB = "dogsyste_covbills";
    $passwordDB = "covbills<";
    $nombreDB = "dogsyste_covbills";

    try{
        $conexion = new PDO('mysql:host='.$servidor.';dbname='.$nombreDB.';');
    }catch(){

    }
?>