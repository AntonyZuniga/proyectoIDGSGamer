<?php

    session_start();

    require 'conexion.php';

    $errors = array();
    $username = "";
    $email = "";
    $tipousuario = "";

//REGISTER
if (isset($_POST['register'])) {
    $username = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $passwordConf = $_POST['passConf'];
    $tipousuario = $_POST['txt_role'];

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

    if (empty($tipousuario)) {
        $errors['txt_role'] = "Tipo usuario requerido";
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

        $sql = "INSERT INTO verificacion (Usuario, Correo, verificar, token, Contraseña, tipo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $DBC->prepare($sql);
        $stmt->bind_param('ssbsss', $username, $email, $verified, $token, $password, $tipousuario);
        
        if ($stmt->execute()){
            $user_id = $DBC->insert_id;
            $_SESSION['Id'] = $user_id;
            $_SESSION['Usuario'] = $username;
            $_SESSION['Correo'] = $email;
            $_SESSION['verificar'] = $verified;
            $_SESSION['tipo'] = $tipousuario;
           



            $_SESSION['message'] = "TE REGISTRASTE!";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: ../../../resources/views/templates/infoR.php');
            exit();
        }else {
            $errors['db_error'] = "Database error: ERROR AL REGISTRARSE";
        }

    }

}

//LOGIN
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
            $_SESSION['Id'] = $user['Id'];
            $_SESSION['Usuario'] = $user['Usuario'];
            $_SESSION['Correo'] = $user['Correo'];
            $_SESSION['verificar'] = $user['verificar'];
            $_SESSION['tipo'] = $user['tipo'];
    
            $_SESSION['message'] = "SESION INICIADA!";
            $_SESSION['alert-class'] = "alert-success";
            header('Location: ../../../resources/views/templates/index.php');
            exit();
        }else{
            $errors['login_fail'] = "Datos incorrectos";
        }
    }

}


//LOGOUT
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['Id']);
    unset($_SESSION['Usuario']);
    unset($_SESSION['Correo']);
    unset($_SESSION['verificar']);
    unset($_SESSION['tipo']);
    header('Location: ../../../resources/views/templates/sesion.php');
    exit();
}



?>