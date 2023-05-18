<?php
    $connection = mysqli_connect(
        "localhost",                    // Host: Nombre del servidor MySQL
        "id20764505_adminpollos",       // Username: Nombre de usuario para acceder a la base de datos
        "Turqu3s4_2023",                // Password: Contraseña para acceder a la base de datos
        "id20764505_pollossilver"       // Dbname: Nombre de la base de datos a la que se desea conectar
    );

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo 'Connection established';
    }

    
?>