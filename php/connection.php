<?php
    $dbHost = getenv('DB_HOST'); // Obtener el host desde una variable de entorno
    $dbUser = getenv('DB_USER'); // Obtener el usuario desde una variable de entorno
    $dbPass = getenv('DB_PASS'); // Obtener la contraseña desde una variable de entorno
    $dbName = getenv('DB_NAME'); // Obtener el nombre de la base de datos desde una variable de entorno

    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    // $connection = mysqli_connect(
    //     "localhost",                    // Host: Nombre del servidor MySQL
    //     "id20764505_adminpollos",       // Username: Nombre de usuario para acceder a la base de datos
    //     "Turqu3s4_2023",                // Password: Contraseña para acceder a la base de datos
    //     "id20764505_pollossilver"       // Dbname: Nombre de la base de datos a la que se desea conectar
    // );

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        // echo 'Connection established';
    }

    
?>