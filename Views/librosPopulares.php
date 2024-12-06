<?php include __DIR__ . '/../Controllers/librosPopularesController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Biblioteca_proyecto/css/librosPopulares.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php 
    $count = 1;
    if (isset($librosPopulares) && is_array($librosPopulares)) { ?>
        <?php foreach ($librosPopulares as $libro) {  ?>
            <div class="libro" <?php if($count == 2){ ?> style="transform: scale(1.3); <?php }?> ">
                <h2>POPULARES HOY</h2>
                <div class="contenido">
                    <div class="contenido1">
                        <img src="<?= $libro['immagen'] ?>" alt="imagen libro">
                    </div>
                    <div class="contenido2">
                        <h3 class="titulo"> <?= $libro['titulo'] ?></h3>
                        <div class="text_descripcion">
                            <p class="desc"> <?= $libro['descripcion'] ?></p>
                        </div>
                    </div>
                </div>
                <div class="contenedor">
                    <div class="contenedor1">
                        <p class="autor">Autor: <?= $libro['nombre'] ?></p>
                        <p class="estado">Estado: <?= $libro['estado'] ?></p>
                    </div>
                    <form class="contenedor2" action="">
                        <input class="idLibro" type="number" value="<?= $libro['id'] ?>" name="id_libro">
                        <button class="prestar">Tomar prestado</button>
                    </form>
                </div>
            </div>
        <?php $count++;}
    } else { ?>
        <p>No hay libros populares disponibles.</p>
    <?php } ?>

</body>
</html>