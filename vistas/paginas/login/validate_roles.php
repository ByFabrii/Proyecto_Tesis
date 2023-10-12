<?php
    $roles_permitidos = ['Admin', 'Usuario1'];

    if(!array_key_exists('rol', $_SESSION) || !in_array($_SESSION['rol'], $roles_permitidos)){
        echo '
        <script>
            alert("Tu rol no esta permitido para esta página");
            window.location = "../login/login.php";
        </script>
        ';
        session_destroy();
        die();
    }
?>