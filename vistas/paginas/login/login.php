<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Meteorológica CUCSur</title>

    <!--Enlaces a los archivos -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playfair+Display:wght@700&family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/estilos.css">


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div id="header-login" class ="bg-dark">
        <h2 class="fs-2 pt-3 pb-3 w-100">Red Meteorológica CUCostaSur</h2>
        <img class="logo" src="../../img/logoUDG.png" alt="Logo de la Universidad de Guadalajara">
    </div>
    



<section id="login">
    <div class="form-box">
        <div class="form-value">
            <form action ="login_data.php" method = "POST">
                <h2>Iniciar sesión</h2>
                <div class="inputbox">
                    <ion-icon name="person-circle"></ion-icon>
                    <input type="text" name="nombre" required>
                    <label for="">Usuario</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="">Contraseña</label>
                </div>
                <input type="submit" value="Entrar" class="btn btn-primary fs-1">
                <div class="forget mt-4 d-flex justify-content-center">
                    <label for=""><a class="text-primary" href="../../../index.php">VOLVER AL INICIO</a></label>
                </div>
                
            </form>
        </div>
    </div>
</section>