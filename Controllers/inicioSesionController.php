<?php

session_start();

require '../config/conexion.php';
require '../Models/usuario.php';

$gestionUsuario = new usuario($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST["gmail"]) && isset($_POST["contrasena"]) && $_POST["gmail"] && $_POST["contrasena"]){
        $usuario = $gestionUsuario->usuarioEspecifico($_POST['gmail']);
        if ($usuario){
            if(password_verify($_POST['contrasena'], $usuario['contrasena'])){
                $_SESSION['usuario'] = $usuario;
                setcookie('usuario', $usuario['gmail']);
                header('location: ../index.php');
                exit();
            }else{
                unset($usuario);
                $_SESSION['error'] = "Credenciales invalidas";
                header('location: ../Views/inicioSesion.php');
                exit();
            }
        }else{
            unset($usuario);
            $_SESSION['error'] = "Credenciales invalidas";
            header('location: ../Views/inicioSesion.php');
            exit();
        }

    }else{
        unset($usuario);
        $_SESSION['error'] = "No pueden haber campos vacios";
        header('location: ../Views/inicioSesion.php');
        exit();
    }
}



