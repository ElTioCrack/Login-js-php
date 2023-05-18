<?php
    include('connection.php');

    if (isset($_POST["ci"])) {
        $ci = $_POST["ci"];
        $password = $_POST["password"];

        // $query = "SELECT tipo FROM usuarios where ci LIKE '$data%' and contrasena = '$contrasena'";
        $query = "SELECT tipousuario.tipo FROM usuarios inner join tipousuario on usuarios.id_tipousuario = tipousuario.id_tipousuario WHERE ci = '$ci' and contrasena = '$password'";
        
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query failed".mysqli_error($connection));
        }

        $row = mysqli_fetch_assoc($result);
        if ($row) {
            $typeUser = $row['tipo'];

            session_start();
            
            $_SESSION['rol'] = $typeUser;
            //Obtener datos del logueado
            // $_SESSION['firts_name'] = $firts_name;
            // $_SESSION['last_name'] = $last_name;
            echo $typeUser;
        } else {
            echo "null";
        }
        
    }
    mysqli_close($connection);
    // 1069525
    // CONTRASENA123
?>