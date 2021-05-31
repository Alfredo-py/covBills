<?php
    include_once("../Modelo/validacionRegistro.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../Vista/head.php'); ?>
    <title>Registro</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="row g-3 form-big">
        <h1>Registro</h1>
        <div class="col-md-5">      
            <label for="inputNombre4" class="form-label">Nombre: </label>
            <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" class="form-control" id="inputNombre4" placeholder="Juan" required />
        </div>
        <div class="col-md-5">
            <label for="inputPassword4" class="form-label">Contraseña: </label>
            <input type="password" name="contraseña" pattern="[a-zA-Z0-9-@{}?>$]+" class="form-control" id="inputPassword4" required />
        </div>
        <div class="col-md-5">
            <label for="inputNickname4" class="form-label">Nickname: </label>
            <input type="text" name="nickname" class="form-control" id="inputNickname" placeholder="Cov20" required />
            <?php if(!empty($errores)):?>
                <div class="badge bg-danger text-wrap" style="width: 16rem;">
                    <?php echo $errores; ?>
                </div>
            <?php endif; ?>
        </div> 
        <div class="col-md-5">
            <label for="inputEdad4" class="form-label">Edad: </label>
            <input type="number" name="edad" class="form-control" id="inputEdad4" required />
        </div>
        <div class="col-md-5">
            <label for="IngresoMensual4" class="form-label">
                Ingreso Mensual:
            </label>
            <input type="number" name="ingresoMensual" class="form-control" id="inputIngresoMensual4">
        </div>
        <div class="col-md-5">
            <label for="IngresoExtra4" class="form-label">
                Ingresos Extras:
            </label>
            <input type="number" name="ingresoExtra" class="form-control" id="inputIngresoExtra4">
        </div>
        <div class="col-md-5">
            <label for="GastosFijos4" class="form-label">
                Gastos Fijos:
            </label>
            <input type="number" name="gastoFijo" class="form-control" id="inputGastosFijos4">
        </div>
        <div class="col-md-5">
            <label for="GastosExtra4" class="form-label">
                Gastos Extra:
            </label>
            <input type="number" name="gastoExtra" class="form-control" id="inputGastosExtra4">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Registrarme</button>
            <a href="../index.php"><input type="button" value="Regresar" class="btn btn-success"></a>
        </div>
       
    </form>
    
</body>
</html>