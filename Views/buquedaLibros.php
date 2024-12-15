<?php
require_once __DIR__ . '/../Controllers/todosLibrosController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Biblioteca_proyecto/css/buquedaLibros.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="contenedorBusqueda">
        <div class="contenidoBusqueda" id="contenedor-libros">
            <!-- Los libros se cargarán aquí dinámicamente -->
            <?php foreach($libros as $libro){ ?>
                <div class="librobusqueda">
                    <div class="contenLibro">
                        <div class="conLibroBus1">
                            <div class="imgLibro">
                                <img src="<?php echo ($libro['immagen']) ?>" alt="">
                            </div>
                        </div>
                        <div class="conLibroBus2">
                            <h3 class="titulo"><?= $libro['titulo'] ?></h3>
                            <div>
                                <p class="descripcion"><?= $libro['descripcion'] ?></p>
                            </div>
                        </div>
                    </div>
                    <p>Autor(es): </p>
                    <p>Estado: <?= $libro['estado'] ?></p>
                    <a href="" class="tomar">Tomar prestado</a>
                </div>
            <?php };?>
        </div>
        <div class="todasLasPaginas">
            <?php for ($i = 1; $i <= $totalPaginas; $i++) { ?>
                <button class="btn-pagina" data-pagina="<?= $i ?>"> <?= $i ?> </button>
            <?php };?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/Biblioteca_proyecto/Js/paginacion.js?v=<?php echo time(); ?>"></script>
</body>
</html>

