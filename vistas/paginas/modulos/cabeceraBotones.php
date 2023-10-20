<div class="row">
    <div class="col px-5 mb-5 date-container text-center">
        <!--Este div queda vacio para darle un margen a las otras dos columnas -->
    </div>
    <div class="col px-5 mb-5 date-container text-center">
        <h2 class=" text-center">Selecciona una vista</h2>
        <button class="btn btn-primary fs-1" id="alternador" onclick="alternarContenido()">Mostrar tabla</button>    </div>

    <div class="col date-container text-end mt-2">
        <div id="fechaYDia" class="col"></div>
        <div id="nombreUsuario" class="my-3"><?php echo $nombre; ?></div>
        <div class="col">
            <a type="button" class="btn btn-secondary fs-3 text-white" href="../login/cerrar_sesion.php">Cerrar sesión</a>
        </div>            
    </div>
</div>