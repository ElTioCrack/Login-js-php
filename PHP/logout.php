<?php
    // Iniciar la sesión si no está configurada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Destruir la sesión y cerrarla
    session_unset();
    session_destroy();
    session_write_close();

    // Verificar si la sesión ha sido destruida correctamente
    $response = [
        "session_start" => (session_status() === PHP_SESSION_NONE && empty($_SESSION))
    ];

    echo json_encode($response);
?>
