<?php
    include('connection.php');

    $data = $_POST['ci'];
    if(!empty($data)){

        $query = "SELECT * FROM usuarios where ci LIKE '$data%'";
        $result = mysqli_query($connection, $query);
        if(!$result) {
            die("Query failed".mysqli_error($connection));
        }
        
        $json = array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                "ci" => $row["ci"],
                "contrasena" => $row["contrasena"],
                "id_tipousuario" => $row["id_tipousuario"]
            );
        }

        $json_string = json_encode($json);
        echo $json_string;
    }
    
    mysqli_close($connection);
?>