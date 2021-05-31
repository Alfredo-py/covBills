<?php
    include_once("../Modelo/sesion.php");
    include('covbills.php');

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('Vista/head.php'); ?>
    <title>Estado Financiero</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row g-3 form-big">
        <h1>Estado Financiero</h1>
        
        <div class="col-12">
            <button type="submit" class="btn btn-success">Calcular</button>
            <a href="../index.html"><input type="button" value="Regresar" class="btn btn-success"></a>
        </div>
    </form>
</body>
</html>
