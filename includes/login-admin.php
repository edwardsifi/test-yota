<?php
 $usuario = $_POST['usuario'];
 $password = $_POST['password'];

if(isset($_POST['login-admin']) && $usuario && $password) {
  
    try {
        include_once './database.php';
        $stmt = $db->prepare("SELECT * FROM usuario WHERE nombre_usuario = ?;");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->bind_result($codigo_usuario, $login, $password_usuario, $nombre_usuario, $apellido_usuario);
        if($stmt->affected_rows) {
            $existe = $stmt->fetch();
            if($existe) {
                // if(password_verify($password, $password_usuario)) {
                    if($password == $password_usuario) {
                    session_start();
                    $_SESSION['login'] = $login;
                    $_SESSION['usuario'] = $nombre_usuario;
                    $_SESSION['id'] = $codigo_usuario;
                    $_SESSION['apellido'] = $apellido_usuario;
                    $respuesta = array(
                        'respuesta' => 'exitoso',
                        'usuario' => $nombre_usuario
                    );
                    header ("Location: admin-area.php");
                } else {
                    $respuesta = array(
                        'respuesta' => 'error',
                        'info error' => 'contrasena erronea'
                    );
                    
                    header ("Location: ../index.php?contrasenaerronea=si");
                }
            } else {
                $respuesta = array(
                    'respuesta' => 'error',
                    'info error' => 'no existe el usuario'
                );
                header ("Location: ../index.php?noexisteusuario=si");
            }
        }
        $stmt->close();
        $db->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    
    die(json_encode($respuesta));
} else {
    header ("Location: ../index.php?datosvacios=si");
}
