<?php
    session_start();

    $response = [];

    if (isset($_SESSION['tipo_tipousuario'])) {
        // La sesión está iniciada
        $response = [
            "tipo_tipousuario" => $_SESSION['tipo_tipousuario'],
        ];
    }

    echo json_encode($response);
?>
