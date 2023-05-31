<?php
    $response = [];

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_SESSION['empleado'])) {
        $response = $_SESSION['empleado'];
    }

    echo json_encode($response);
?>
