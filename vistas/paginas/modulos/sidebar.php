<?php
    include "../login/validate_session.php";
    include "../login/validate_roles2.php";
    include "../../../modelo/conexion.php";
    include "../modulos/headerAdmin.php";

    include "../../../modelo/consultas/consultaUsuarios.php";
    include "../../../modelo/conexionExitosaYValidacionUsuario.php";

    include "../modulos/modalNuevoUsuario.php";
    include "../modulos/modalNuevaEstacion.php";

?>

<div class="col-auto col-sm-3 px-sm-1 px-0 bg-dark d-flex flex-column ">
    <div class="d-flex flex-column flex-grow-1 align-items-center align-items-sm-start px-3" id ="contenidosidebar" style="left: 0;">
        <ul class="nav nav-pills mt-3 fs-1 flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <li class="nav-item">
                <a href="#" class="nav-link align-middle px-0 text-white" id="homeLink">
                    <i class="bi-house"></i> <span class="ms-1 d-none d-sm-inline">Inicio</span>
                </a>
                
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                    <i class="bi-person"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li>
                        <a type ="button" class="nav-link px-5 fs-3 text-white" onclick ="alternarTablaUsuarios()"> 
                            <span class="d-none d-sm-inline text-white">Ver usuarios</span><i class="bi-person mx-2"></i>
                        </a>
                    </li>
                    <li>
                        <a type ="button" class="nav-link px-5 fs-3 text-white" data-bs-toggle="modal" data-bs-target="#usuariosModal"> 
                            <span class="d-none d-sm-inline text-white">Crear nuevo</span><i class="bi-person-plus mx-2"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                    <i class="bi-pc-horizontal"></i> <span class="ms-1 d-none d-sm-inline">Estaciones</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li>
                        <a type ="button" class="nav-link px-5 fs-3 text-white" onclick ="alternarTablaEstaciones()"> 
                            <span class="d-none d-sm-inline text-white">Ver estaciones</span><i class="bi-pc-horizontal mx-2"></i>
                        </a>
                    </li>
                    <li>
                        <a type ="button" class="nav-link px-5 fs-3 text-white" data-bs-toggle="modal" data-bs-target="#estacionesModal"> 
                            <span class="d-none d-sm-inline text-white">Crear nuevo</span><i class="bi-node-plus-fill mx-2"></i>
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                    <i class="bi-journal"></i> <span class="ms-1 d-none d-sm-inline">Registros</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li>
                        <a type ="button" class="nav-link px-5 fs-3 text-white" onclick ="alternarTablaRegistros()"> 
                            <span class="d-none d-sm-inline text-white">Ver registros</span><i class="bi-journal-check mx-2"></i>
                        </a>
                    </li>
                    
                </ul>
            </li>

            <li>
                <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                    <i class="bi-clipboard-check"></i> <span class="ms-1 d-none d-sm-inline">Generar reportes</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                    <li>
                        <a type ="button" class="nav-link px-3 fs-3 text-white" href="../../fpdf/reporteUsuarios.php" target="_blank">
                            <span class="d-none d-sm-inline text-white">Reporte usuarios</span><i class="bi-person-check mx-2"></i>
                        </a>
                    </li>
                    <li>
                        <a type ="button" class="nav-link px-3 fs-3 text-white" href="../../fpdf/reporteEstaciones.php" target="_blank">
                            <span class="d-none d-sm-inline text-white">Reporte estaciones</span><i class="bi-pc-horizontal mx-2"></i>
                        </a>
                    </li>
                    <li>
                        <a type ="button" class="nav-link px-3 fs-3 text-white" href="../../fpdf/reporteRegistrosPC.php" target="_blank">
                            <span class="d-none d-sm-inline text-white">Reporte proteccion Civil</span><i class="bi-bricks mx-2"></i>
                        </a>
                    </li>
                    <li>
                        <a type ="button" class="nav-link px-3 fs-3 text-white" href="../../fpdf/reporteRegistrosAG.php" target="_blank">
                            <span class="d-none d-sm-inline text-white">Reporte agricultores</span><i class="bi-tree-fill mx-2"></i>
                        </a>
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
