<?php
function mostrarMensaje($tipo, $mensaje) {
    $alertClass = '';
    $alertText = '';

    if ($tipo === 'Actualizado') {
        $alertClass = 'alert-success';
        $alertText = 'Se actualizó exitosamente';
    } elseif ($tipo === 'Eliminado') {
        $alertClass = 'alert-danger';
        $alertText = 'Se eliminó exitosamente';
    } elseif ($tipo === 'Agregado') {
        $alertClass = 'alert-primary';
        $alertText = 'Se agregó exitosamente';
    }

    if (!empty($alertClass) && !empty($alertText)) {
        echo '<div class="alert alert-dismissible fade show ' . $alertClass . '" role="alert">';
        echo $alertText;
        echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>!';
        echo '</div>';
    }
}

if (isset($_GET['mensaje'])) {
    mostrarMensaje($_GET['mensaje'], $_GET['mensaje']);
}
?>
