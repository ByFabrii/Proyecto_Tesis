<?php
    include "../../../modelo/conexion.php";
?>

<?php
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Actualizado'){
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Se actualizó exitosamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>!
    </div>
<?php
}
?>

<?php
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Eliminado'){
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Se eliminó exitosamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>!
    </div>
<?php
}
?>

<?php
    if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'Agregado'){
?>
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        Se agregó exitosamente
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>!
    </div>
<?php
}
?>

<div class = "container" id="VerEstaciones">
    <?php
        include "../../../modelo/consultas/consultaEstaciones.php";
    ?>
    <div>
        <div class="vista" id="divContenedorTabla">
            <h2 class = "text-center pt-2">Estaciones:</h2>
            <table class="container-sm table table-hover border border-dark table-striped-columns">
                <thead class="bg-warning text-white table-dark">
                    <tr>
                        <td>Id</td>
                        <td>Nombre</td>
                        <td>Longitud</td>
                        <td>Latitud</td>
                    </tr>
                </thead>

                <?php                            
                    while($datos=mysqli_fetch_array($resultado)){

                ?>
                <tbody>
                    <tr>
                        <td><?php echo $datos['idEstaciones']?></td>
                        <td><?php echo $datos['Nombre']?></td>
                        <td><?php echo $datos['Longitud']?></td>
                        <td><?php echo $datos['Latitud']?></td>
                        <td><a type="button" class ="btn btn-success fs-4 editar-estacion" href="../modulos/updateEstacion.php?id=<?php echo $datos['idEstaciones']?>">Modificar</a></td>
                        <td><a type="button" class ="btn btn-danger fs-4" href="../modulos/eliminarEstacion.php?id=<?php echo $datos['idEstaciones']?>">Eliminar</a></td>
                    </tr>
                </tbody>
                <?php
                    } //Esta llave cierra el "while" que se empezó hace un momento.
                ?>
            </table>
        </div>
    </div>
</div>