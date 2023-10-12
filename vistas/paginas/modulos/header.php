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
    <header>
    <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="../interfaz_pg/publico.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                    
                    <a type="button" class="nav-link text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">Contacto</a>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content text-dark">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">CONTACTO</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="h3 my-5 contacto-p">Si necesitas obtener más información del historico de las estaciones, o si necesitas obtener los datos de otras variables que no aparezcan en la página principal, dejános lo que necesitas y nosotros te haremos llegar dicha información al correo proporcionado.</p>
                                <p class="h3 my-5 contacto-p">Deja tus datos aquí:</p>
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label mb-4">Correo electrónico</label>
                                            <input type="email" class="form-control mb-5 fs-3" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label mb-4">Requerimientos</label>
                                            <textarea class="form-control fs-3" id="exampleFormControlTextarea1" rows="8"></textarea>
                                        </div>
                                    </form>
                                </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary fs-3" data-bs-dismiss="modal">Close</button>
                                <input class="btn btn-primary fs-3" type="submit" value="Enviar petición">
                            </div>
                            </div>
                        </div>
                    </div>

                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <h2 class="fs-2 pt-3 pb-3 w-75">Red Meteorológica CUCostaSur</h2>
        <img class="logo" src="../../img/logoUDG.png" alt="Logo de la Universidad de Guadalajara">

        
    </header>
    
