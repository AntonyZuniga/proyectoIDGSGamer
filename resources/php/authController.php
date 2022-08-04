<?php

    session_start();

    require 'conexion.php';

    $errors = array();
    $username = "";
    $email = "";

//REGISTRAR
if (isset($_POST['register'])) {
    $username = isset($_POST['user']) ? $_POST['user'] : null;
    $email = $_POST['email'];
    $password = isset($_POST['pass']) ? $_POST['pass'] : null;
    $passwordConf = isset($_POST['passConf']) ? $_POST['passConf'] : null;


    if (empty($username)) {
        $errors['user'] = "Usuario requerido";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){  
        $errors['email'] = "Email erroneo";
    }
    if (empty($email)) {
        $errors['email'] = "Email requerido";
    }
    if (empty($password)) {
        $errors['pass'] = "Contraseña requerida";
    }

    if ($password !== $passwordConf) {
        $errors['pass'] = "Las contraseñas no coinciden";
    }

    $emailQuery = "SELECT * FROM verificacion WHERE Correo=? LIMIT 1";
    $stmt = $DBC->prepare($emailQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if($userCount > 0) {
        $errors['email'] = "Email existente";
    }

    if(count($errors) === 0) {
        $password = password_hash($password, PASSWORD_DEFAULT); 
        $token = bin2hex(random_bytes(50));
        $verified = false;

        $sql = "INSERT INTO verificacion (Usuario, Correo, verificar, token, Contraseña) VALUES (?, ?, ?, ?, ?)";
        $stmt = $DBC->prepare($sql);
        $stmt->bind_param('ssbss', $username, $email, $verified, $token, $password);
        
        if ($stmt->execute()){
            $user_id = $DBC->insert_id;
            $_SESSION['Id_Usuario'] = $user_id;
            $_SESSION['Usuario'] = $username;
            $_SESSION['Correo'] = $email;
            $_SESSION['verificar'] = $verified;



            $_SESSION['message'] = "TE REGISTRASTE!";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: ../views/infoR.php');
            exit();
        }else {
            $errors['db_error'] = "Database error: ERROR AL REGISTRARSE";
        }

    }

}

//INICIAR SESION
if (isset($_POST['login'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    if (empty($username)) {
        $errors['user'] = "Usuario requerido";
    }
    if (empty($password)) {
        $errors['pass'] = "Contraseña requerida";
    }
    if ((!empty($password)) == NULL){
        $errors['pass'] = "Contraseña requerida";;
    }

    if(count($errors) === 0) {
        $sql = "SELECT * FROM verificacion WHERE Correo=? OR Usuario=? LIMIT 1";
        $stmt = $DBC->prepare($sql);
        $stmt->bind_param('ss', $username, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['Contraseña'])) {
            $_SESSION['Id_Usuario'] = $user['Id_Usuario'];
            $_SESSION['Usuario'] = $user['Usuario'];
            $_SESSION['Correo'] = $user['Correo'];
            $_SESSION['verificar'] = $user['verificar'];
    
            $_SESSION['message'] = "SESION INICIADA!";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: ../../index.php');
            exit();
        }else{
            $errors['login_fail'] = "Datos incorrectos";
        }
    }

}


//SALIR DE SESION
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['Id_Usuario']);
    unset($_SESSION['Usuario']);
    unset($_SESSION['Correo']);
    unset($_SESSION['verificar']);
    header('Location: ../views/login.php');
    exit();
}
?>