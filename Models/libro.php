<?php
include_once __DIR__ . '/../config/conexion.php';

class libro{

    public function tresLibrosPopulares(){
        global $conexion;

        $query = $conexion->prepare("SELECT l.immagen, 
            l.titulo, l.descripcion,
            count(p.id_libro) as cantidad_libro_prestado, 
            a.nombre, l.estado, l.id  from libros l 
            inner join prestamos p on p.id_libro = l.id
            inner join autores a on a.id = l.id_autor_es
            group by l.titulo
            order by cantidad_libro_prestado desc
            limit 3;"
            );
        $query->execute();
        $Libros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $Libros ?: false;
    }

    public static function obtenerLibros($NumeroPagina, $librosPorPagina){
        global $conexion;

        $offset = ($NumeroPagina-1) * $librosPorPagina;

        $query = $conexion->prepare("SELECT * FROM libros LIMIT 9 OFFSET :saltar");

        $query->bindValue(':saltar', $offset, PDO::PARAM_INT);

        $query->execute();

        $Libros = $query->fetchAll(PDO::FETCH_ASSOC);
        return $Libros ?: false;
    }

    public static function cantidadDeLibros(){
        global $conexion;
        $query = $conexion->prepare("SELECT * FROM libros");
        $query->execute();
        $registros = $query->fetchAll(PDO::FETCH_ASSOC);
        return count($registros);
    }
}