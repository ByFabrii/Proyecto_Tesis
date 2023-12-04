<?php
    include "../login/validate_session.php";
    include "../login/validate_roles.php";
    include "../../../modelo/conexion.php";
    include "../modulos/headerAdmin.php";

    include "../../../modelo/consultas/consultaUsuarios.php";
    include "../../../modelo/conexionExitosaYValidacionUsuario.php";
        
?>

<div class="col-auto col-sm-3 px-sm-1 px-0 bg-dark d-flex flex-column">
<div class="d-flex flex-column flex-grow-1 align-items-center align-items-sm-start px-3" id ="contenidosidebar" style="left: 0;">
        <ul class="nav nav-pills mt-3 fs-1 flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0 text-white" id="homeLink">
                    <i class="bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                </a>
            </li>
            <li>
                <button href="#" class="btn btn-primary nav-link px-4 align-middle text-white" id="alternador" onclick="alternarContenido()">Mostrar tabla</button>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                    <i class="bi-person"></i> <span class="ms-1 d-none d-sm-inline fs-2">Selecciona estación</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li>
                        <?php
                            include "../modulos/filtroPorEstacion2.php";
                        ?>
                    </li>
                </ul>
            </li>
            

        </ul>

        <hr>
        <div class="">
            <div class="dropdown mt-auto fixed-bottom pb-5" id="menuUsuario">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-sm-inline m-3 fs-2"><?php echo $nombre;?></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                    <li><a class="dropdown-item" href="../login/cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
