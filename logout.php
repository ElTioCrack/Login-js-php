<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    session_unset();
    session_destroy();
    session_write_close();

    // Verificar si la sesión ha sido destruida
    if (session_status() === PHP_SESSION_NONE && empty($_SESSION)) {
        echo "true";
    } else {
        echo "false";
    }
?>
