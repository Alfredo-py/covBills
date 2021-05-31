<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once('../Vista/head.php'); ?>
    <title>CovBills</title>
</head>
<body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form-small">
        
   
        <div class="mb-3">
                <h1>Iniciar sesión</h1>
                <i class="bi bi-person-circle"></i>
                <label for="exampleInputNickname1" class="form-label">Nickname:</label> 
                <input type="text" name="nickname" pattern="[a-zA-Z0-9]+" required class="form-control">
            </div>
            <div class="mb-3">
                <i class="bi bi-key-fill"></i>
                <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" required>   
            </div>
            <button type="submit" class="btn btn-success">Iniciar</button>
            <a href="../Vista/registro.php"><input type="button" value="Registro" class="btn btn-success"></a>
        </form>
</body>
</html>