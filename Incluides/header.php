<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAW Biblioteca Virtual</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Biblioteca_proyecto/css/header.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="/Biblioteca_proyecto/imgs/logo_pagina_biblioteca.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="/Biblioteca_proyecto/imgs/logo_pagina_biblioteca.png" alt="">
            <div class="letras_logo">
                <h2>VAW</h2>
                <h2>Biblioteca Virtual</h2>
            </div>
        </div>
        <form action="" id="formularioBusqueda">
            <input type="search" placeholder="Buscar libro" id="busqueda">
            <button class="botonBuscar" type="submit" id="botonBuscar"> <i class="fas fa-search"></i> </button>
        </form>
        <div class="logoUsuario">
            <?php if(isset($_SESSION['usuario'])){
                ?><h2 class="inicial_usu"><?php echo $_SESSION['usuario']['nombre'][0] ?></h2><?php
            }else{
                ?><img src="/Biblioteca_proyecto/imgs/user.png" alt=""><?php
            }
            ?>
        </div>
        <div class="menuaLogoUsuario">
        <?php   if(isset($_SESSION['usuario'])){
                    ?><div class="contenedorInvitado">
                        <img src="/Biblioteca_proyecto/imgs/user.png" alt="" class="logo_invitado">
                        <h5 class="inicial_usu"><?php echo $_SESSION['usuario']['tipo']?></h5>
                    </div><?php
                    ?><a href=""><img src="/Biblioteca_proyecto/imgs/user.png" alt="" class="logo_invitado"><p>Ver perfíl</p></a> <hr><?php
                    ?><a class="cerrar" href="/Biblioteca_proyecto/Views/logout.php"> <div> <img src="/Biblioteca_proyecto/imgs/login.png" alt=""><p>Cerrar sesión</p></div></a><?php
                }else{
                    ?><div class="contenedorInvitado">
                        <img src="/Biblioteca_proyecto/imgs/user.png" alt="" class="logo_invitado">
                        <h5 >Invitado</h5>
                    </div><?php
                    ?><a href="/Biblioteca_proyecto/Views/inicioSesion.php">Iniciar sesión</a><hr><?php
                    ?><a href="/Biblioteca_proyecto/Views/registroUsuarios.php">Registrarse</a><?php
                }
            ?>
        </div>
    </header>
</body>
</html>