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

<?php
    include "../../../modelo/consultas/consultaUsuarios.php";
?>

<div class ="container" id="VerUsuarios">
    <h2 class = "text-center pt-2">Usuarios:</h2>
    <table class="table table-hover border border-dark table-striped-columns">
        <thead class="bg-warning text-white table-dark">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellido Paterno</td>
                <td>Apellido Materno</td>
                <td>Profesión</td>
                <td>Institución</td>
                <td>Tipo de usuario</td>
                </tr>
        </thead>

        <?php                            
            while($datos=mysqli_fetch_array($resultado)){

        ?>
        <tbody>
            <tr>
                <td><?php echo $datos['idUsuario']?></td>
                <td><?php echo $datos['nombre']?></td>
                <td><?php echo $datos['apellidoP']?></td>
                <td><?php echo $datos['apellidoM']?></td>
                <td><?php echo $datos['profesion']?></td>
                <td><?php echo $datos['institucion']?></td>
                <td><?php echo $datos['tipoUsuario_usuario']?></td>
                <td><a type="button" class ="btn btn-success fs-4 editar-usuario" href="../modulos/updateUsers.php?id=<?php echo $datos['idUsuario']?>">Modificar</a></td>
                <td><a type="button" class ="btn btn-danger fs-4" href="../modulos/eliminarUsuario.php?id=<?php echo $datos['idUsuario']?>">Eliminar</a></td>
            </tr>
        </tbody>
        <?php
            } //Esta llave cierra el "while" que se empezó hace un momento.
        ?>
    </table>
</div>

