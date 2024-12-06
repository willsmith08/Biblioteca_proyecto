<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAW Biblioteca Virtual</title>
    <link rel="shortcut icon" href="/Biblioteca_proyecto/imgs/logo_pagina_biblioteca.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/registroUsuarios.css?v=<?php echo time(); ?>">
</head>
<body>
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

    <div class="contenido">
        <div class="contenedorInicioSession">
            <div class="contenidoImg">
                <h1>REGISTRATE</h1>
                <img src="" alt="">
            </div>
            <form action="../Controllers/registroUsuariosController.php" method="post">
                <p>los campos con * son obligatorios</p>
                <?php if(isset($_SESSION['error'])){?>
                    <div class="error">
                        <div class="er">
                            <img src="../imgs/logoDeUnaX.png" alt="" class="x">
                            <p><?php echo $_SESSION['error'] ?></p>
                        </div>
                        <!-- <p class="veri">wwwwwwwwww</p> -->
                    </div>
                <?php unset($_SESSION['error']); }?>
                <div>
                    <label for="nombre">*Nombre*</label>
                    <input name="nombre" type="text" id="nombre" placeholder="Ingresa tu nombre" required>
                </div>

                <div>
                    <label for="documento">*N° documento*</label>
                    <input name="documento" type="number" id="documento" placeholder="Ingresa tu numero de documento" required>
                </div>

                <div>
                    <label for="gmail">*Email*</label>
                    <input name="gmail" type="email" id="gmail" placeholder="Ingresa tu correo" required>
                </div>

                <div>
                    <label for="telefono">*Telefono*</label>
                    <input name="telefono" type="number" id="telefono" placeholder="Ingresa tu numero de telefono">
                </div>

                <div>
                    <label for="contrasena">*Contrasena*</label>
                    <input name="contrasena" type="text" id="contrasena" placeholder="Ingresa una contraseña" required>
                </div>
                    
                <div>
                    <label for="tipoUsu">*Tipo de usuario*</label>
                    <select name="tipoUsu" id="tipoUsu" required>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Docente">Docente</option>
                    </select>
                </div>
                
                <button type="submit">Registrar</button>
            </form>
        </div>
    </div>


    <footer><h2>¡BIENVENIDO!</h2></footer>


    <script src="../Js/registro.js?v=<?php echo time(); ?>"></script>
</body>
</html>