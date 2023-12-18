<?php
require_once('conexion_db.php');

function authenticar($email, $password) {
    global $conn;
    
    $query = "SELECT CONCAT_WS(' ', u.nombre, u.apellidos) AS usuario, u.correo, u.contrasenha, u.rol_nivel ";
    $query.= "FROM usuario u ";
    $query.= "WHERE u.correo = ? ";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $query);

    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row && md5($password) === $row['contrasenha']) {
        return $row;
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

?>