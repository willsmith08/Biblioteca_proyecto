<?php

class libro{
    private $conexion;

    public function __construct($conexion)
    {
        $this->conexion = $conexion;
    }


    public function tresLibrosPopulares(){
        $query = $this->conexion->prepare("SELECT l.immagen, 
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
}