<?php
    include('covbills.php');
    session_start();

    $ingresoMensual = $_POST['ingresoMensual'];
    $ingresoExtra = $_POST['ingresoExtra'];
    $gastoFijo = $_POST['gastoFijo'];
    $gastoExtra = $_POST['gastoExtra'];
    $total = 0;
    $ahorro = 0;
    $ingresoTotal = new CovBills();
    $total = $ingresoTotal->Ingreso_Total($ingresoMensual,$ingresoExtra);
    $ahorro = $ingresoTotal->Porcentaje_Salud($total);
    $ingresoTotal->Gastos($gastoFijo,$gastoExtra,$total);
    $ingresoTotal->Analisis($gastoFijo,$gastoExtra,$total,$ahorro);
?>

