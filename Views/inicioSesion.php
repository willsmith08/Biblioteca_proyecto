<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAW Biblioteca Virtual</title>
    <link rel="shortcut icon" href="/Biblioteca_proyecto/imgs/logo_pagina_biblioteca.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/inicioSession.css?v=<?php echo time(); ?>">
</head>
<body>
    <div class="todoInicioSession">
        <header>
            <a id="atras" href="../index.php"><img src="../imgs/right.png" alt=""></a>
            <div class="logo">
                <img src="../imgs/logo_pagina_biblioteca.png" alt="">
                <div class="letras_logo">
                    <h2>VAW</h2>
                    <h2>Biblioteca Virtual</h2>
                </div>
            </div>
        </header>

        <div class="contenedorInicioSession">
            <form action="../Controllers/inicioSesionController.php" method="post">
                <h1>INICIAR SESIÓN</h1>
                <input type="email" placeholder="Gmail" name="gmail" id="gmail">
                <p id="mensajeGmail"></p>
                <input type="password" placeholder="Contraseña" name="contrasena" id="contrasena">
                <p id="mensajeContrasena"></p>
                <div class="chequeo">
                    <input type="checkbox" name="recordarContrasena" id="recordar" value="1">
                    <label for="recordar">Recordar</label>
                </div>
                <button type="submit" class="ingresar">Ingresar</button>
                <a href="./registroUsuarios.php">¿AÚN NO TIENES UNA CUENTA? REGISTRATE AQUI</a>
            </form>
            <div class="contenidoImg">
                <?php if(isset($_SESSION['error'])){?>
                    <div class="error">
                        <div class="er">
                            <img src="../imgs/logoDeUnaX.png" alt="" class="x">
                            <p><?php echo $_SESSION['error'] ?></p>
                        </div>
                        <!-- <p class="veri">wwwwwwwwww</p> -->
                    </div>
                <?php unset($_SESSION['error']); }?>
                <img src="../imgs/imagen_nina_leyendo.jpg" alt="">
            </div>
        </div>


        <footer><h2>¡BIENVENIDO!</h2></footer>
    </div>


    <script src="../Js/inicioSesion.js?v=<?php echo time(); ?>"></script>
</body>
</html>
