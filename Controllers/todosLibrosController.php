<?php
include_once __DIR__ . '/../Models/libro.php';

// Número de libros por página
$librosPorPagina = 9; 

// Verificar si es una solicitud AJAX para cargar más libros
if (isset($_GET['pagina'])) {
    $paginaActual = (int)$_GET['pagina'];
} else {
    $paginaActual = 1;  // Página por defecto
}

// Obtener los libros desde el modelo
$libros = Libro::obtenerLibros($paginaActual, $librosPorPagina);

// Calcular el número total de libros
$totalLibros = Libro::cantidadDeLibros();

// Calcular el número total de páginas
$totalPaginas = ceil($totalLibros / $librosPorPagina);

// Si es una solicitud AJAX, devolver los libros en formato JSON
if (isset($_GET['pagina'])) {
    echo json_encode([
        'libros' => $libros,
        'totalPaginas' => $totalPaginas
    ]);
    return;
}





        
