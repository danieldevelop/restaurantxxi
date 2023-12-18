<?php 
require_once('functions.php');

if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];

    if (isset($accion)) 
    {
        switch ($accion)
        {
            case 'login':
                $email = $_POST['email'];
                $password = $_POST['password'];

                $auth = authenticar($email, $password);

                if ($auth) {
                    // session_start();
                    // $_SESSION['usuario'] = $auth;
                    $respuesta = array('estado' => 'ok', 'rol' => $auth['rol_nivel']);
                } else {
                    $respuesta = array('estado' => 'fail', 'mensaje' => 'Usuario y Contraseña no son correctas');
                }

                echo json_encode($respuesta);
                break;
        }
    }
}
?>