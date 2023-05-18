<?php
    session_start();

    if (isset($_SESSION['rol'])) {
    // La sesión está iniciada
        echo $_SESSION['rol'];
    } else {
    // La sesión no está iniciada
        echo "null";
    }
?>