<?php
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $nombre = $_SESSION['usuario'];
    }
?>