<?php
session_start();
require_once '../config/conexion.php';
require_once '../Models/usuario.php';

$gestionUsuario = new usuario($conexion);

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (isset($_POST["nombre"]) && isset($_POST["documento"]) &&
    isset($_POST["gmail"]) && isset($_POST["telefono"]) &&
    isset($_POST["contrasena"]) && isset($_POST["tipoUsu"]) 

    && $_POST["nombre"] && $_POST["documento"]
    && $_POST["gmail"] && $_POST["telefono"]
    && $_POST["contrasena"] && $_POST["tipoUsu"]
    
    ){
        $nombre = $_POST["nombre"];
        $documento = intval($_POST["documento"]);
        $gmail = $_POST["gmail"];
        $telefono = $_POST["telefono"];
        $contrasena = $_POST["contrasena"];
        $tipoUsu = $_POST["tipoUsu"];

        if($gestionUsuario->documentoExist($documento)){
            $_SESSION['error'] = "Numero de documento Ya esta vinculado a una cuenta";
            header('location: ../Views/registroUsuarios.php');
            exit();
        }else if($gestionUsuario->correoExist($gmail)){
            $_SESSION['error'] = "Correo electronico Ya esta vinculado a una cuenta";
            header('location: ../Views/registroUsuarios.php');
            exit();
        }else if(!preg_match('/\d/', $contrasena) || strlen($contrasena) < 8 || !preg_match('/[a-z]/', $contrasena)){
            $_SESSION['error'] = "La contraseña debe de tener mas de 7 digitos, al menos un numero y al menos un caracter en minuscula";
            header('location: ../Views/registroUsuarios.php');
            exit();
        }else{
            $passwordHash = password_hash($contrasena, PASSWORD_DEFAULT);
            $gestionUsuario->registrarUsuario($nombre, $documento, $tipoUsu, $telefono, $gmail, $passwordHash);
            header('location: ../index.php');
            exit();
        }

    }
}
