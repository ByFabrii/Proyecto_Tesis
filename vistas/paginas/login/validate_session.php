<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
        <script>
            alert("Por favor, inicia sesión");
            window.location = "../login/login.php";
        </script>
        ';
        session_destroy();
        die();
    }
?>