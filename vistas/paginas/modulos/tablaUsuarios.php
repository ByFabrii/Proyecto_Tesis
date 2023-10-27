<?php
    include "../../../modelo/conexion.php";

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
                <td><a type="button" class ="btn btn-primary fs-4 editar-usuario" data-bs-toggle="modal" data-bs-target="#editarUsuarioModal">Modificar</a></td>
                <td><a type="button" class ="btn btn-danger fs-4" href="../modulos/eliminarUsuario.php?id=<?php echo $datos['idUsuario']?>">Eliminar</a></td>
            </tr>
        </tbody>
        <?php
            } //Esta llave cierra el "while" que se empezó hace un momento.
        ?>
    </table>
</div>

