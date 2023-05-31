<?php
include('connection.php');

$response = [];

if (isset($_POST["ci"], $_POST["password"])) {
    $ci = $_POST["ci"];
    $password = $_POST["password"];

    //para prevenir inyecciones SQL
    if (!is_numeric($ci)) die(json_encode($response));
    $password = mysqli_real_escape_string($connection, $password);

    // Consulta preparada para proteger contra inyecciones SQL
    $query = "SELECT 
                usuarios.ci, usuarios.contrasena, 
                tipousuario.id_tipousuario, tipousuario.tipo as tipo_tipousuario
                FROM usuarios 
                JOIN tipousuario ON tipousuario.id_tipousuario = usuarios.id_tipousuario
                WHERE usuarios.ci = ? AND usuarios.contrasena = ?";

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "is", $ci, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $response = [
            "ci" => $row["ci"],
            "contrasena" => $row["contrasena"],
            "tipousuario" => [
                "id_tipousuario" => $row["id_tipousuario"],
                "tipo_tipousuario" => $row["tipo_tipousuario"],
            ],
        ];
    } else {
        if ($result && mysqli_num_rows($result) === 0) {
            die(json_encode($response));
        } else {
            die("Query failed: " . mysqli_error($connection));
        }
    }

    // Cerrar la conexión y enviar la respuesta JSON
    mysqli_stmt_close($stmt);
}

echo json_encode($response);

mysqli_close($connection);
?>
