<?php
include_once __DIR__ . '/../config/conexion.php';
include_once __DIR__ . '/../Models/libro.php';

$libro = new libro();

$librosPopulares = $libro->tresLibrosPopulares();

