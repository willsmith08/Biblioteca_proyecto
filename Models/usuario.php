<?php
class usuario{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }

    public function usuarioEspecifico($gmail_a_buscar){
        $query = $this->conexion->prepare("SELECT * FROM usuarios where correo_electronico = :correo_electronico");
        $query->execute([':correo_electronico' => $gmail_a_buscar]);
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        return $usuario ?: false;
    }

    public function registrarUsuario(string $nombre, int $numero_documento, string $tipo, string $telefono, string $gmail, string $contrasena){
        $query = $this->conexion->prepare("INSERT INTO usuarios(nombre,numero_documento,tipo,telefono,correo_electronico,contrasena) VALUES(:nombre,:numero_documento,:tipo,:telefono,:gmail,:contrasena)");
        $query->execute([':nombre' => $nombre, ':numero_documento' => $numero_documento, ':tipo' => $tipo, ':telefono' => $telefono, ':gmail' => $gmail, ':contrasena' => $contrasena]);
    }

    public function documentoExist($documento){
        $query = $this->conexion->prepare("SELECT numero_documento FROM usuarios WHERE numero_documento = :numero_documento");
        $query->execute([':numero_documento' => $documento]);
        $documento = $query->fetch(PDO::FETCH_ASSOC);
        return $documento ?: false;
    }

    public function correoExist($correo){
        $query = $this->conexion->prepare("SELECT numero_documento FROM usuarios WHERE correo_electronico = :correo_electronico");
        $query->execute([':correo_electronico' => $correo]);
        $correo = $query->fetch(PDO::FETCH_ASSOC);
        return $correo ?: false;
    }
}