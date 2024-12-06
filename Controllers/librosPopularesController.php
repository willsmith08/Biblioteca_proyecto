<?php
include __DIR__ . '/../config/conexion.php';
include __DIR__ . '/../Models/libro.php';

$libro = new libro($conexion);

$librosPopulares = $libro->tresLibrosPopulares();

