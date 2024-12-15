<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAW Biblioteca Virtual</title>
    <link rel="shortcut icon" href="/Biblioteca_proyecto/imgs/logo_pagina_biblioteca.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php include './Incluides/header.php';?>

    
    <div class="contenedor_librosPopulares">
        <div class="fondo"></div>
        <?php include_once './Views/librosPopulares.php';?>

    </div>
    


    <?php include_once './Views/buquedaLibros.php';?>
    





    <?php include './incluides/footer.php';?>
 
    <script src="./Js/index.js?v=<?php echo time(); ?>"></script>
</body>
</html>






