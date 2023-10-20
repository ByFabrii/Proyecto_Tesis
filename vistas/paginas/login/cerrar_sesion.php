<?php

    session_start();

    session_destroy();
    
    header("location: ../interfaz_pg/publico.php");

?>