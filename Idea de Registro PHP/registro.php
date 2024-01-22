<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foot Lucky</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/799bc4e5c6.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style_registro.css">
</head>

<header id="cuerpo">
    <div class="d-flex justify-content-between align-items-center" style="background-color:rgb(76, 76, 76); padding: 10px;">
        <div class='d-flex align-items-center'>
            <a href='../index.php' class='btn btn-light btn-sm me-2'>INICIO</a>
            <a href='contacto.php' class='btn btn-light btn-sm me-2'>CONTACTO</a>
        </div>
    </div>

        <div class="inicio" style="background-color: rgb(76, 76, 76);">
            <img class="inicio__logo1" src="../img/logos/zapatillas.png" alt="logo zapatillas">
            <h1 class="inicio__titulo">Bienvenido a Foot Lucky</h1>
            <img class="inicio__logo2" src="../img/logos/zapatillas.png" alt="logo zapatillas">
        </div>
        <div class="container-fluid" style="background-color: beige; padding: 0.5vh 0.5vw;">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <a class="btn btn-secondary" href="tienda.php">Envio gratis a partir de 50€
                            <span><i class="fa-solid fa-cart-shopping"></i></span></a>
                    </div>
                    <div class="col">
                        <a class="btn btn-secondary" href="tienda.php">Envio entre 3 y 5 días
                            <span><i class="fa-solid fa-truck-fast"></i></span></a>
                    </div>
                    <div class="col">
                        <a class="btn btn-secondary" href="tienda.php">Nuevos productos <span><i class="fa-solid fa-magnifying-glass"></i></span></a>
                    </div>
                    <div class="col">
                        <a class="btn btn-secondary" href="contacto.php">Contactanos <span><i class="fa-solid fa-phone"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
</header>

<body>
    <div class="login">
        <form action="../PHP/credenciales.php" method="post">
            <h2 class="h2">REGISTRO</h2>
            <hr>
            <?php
            if (isset($_GET["error"])) {
            ?>
                <p class="error">
                    <?php
                    echo $_GET["error"]
                    ?>
                </p>
            <?php
            } elseif (isset($_GET["success"])) {
            ?>
                <p class="success">
                    <?php
                    echo $_GET["success"]
                    ?>
                </p>
            <?php
            }

            ?>


            <hr>
            <label>Nombre de Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario">

            <label>Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">

            <label>Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com">

            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">

            <label>Apellidos</label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellidos">

            <label>Direccion</label>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección">

            <label>Télefono Móvil</label>
            <input type="text" name="telefono" id="telefono" placeholder="Teléfono">

            <hr>
            <div style="display: flex;justify-content:center; align-items: center;">
                <button class="btn btn-primary" type="submit" name="register">Registrarse</button>
            </div>
            <br>
            <div style="display: flex;justify-content:center; align-items: center;">
                <a class="btn btn-link" href="login.php">¿Ya tienes cuenta? Inicia Sesión aquí</a>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer id="footer">
    <div class="texto--footer">
        <h3>Mis pedidos</h3>
        <p>Inicia sesión para ver tus pedidos</p>
        <a class="buttoms--envios" href="login.php">Ver pedidos</a>
        <a href="Pages/tienda.php">
            <p>Encuentra lo que buscas en nuestra tienda</p>
        </a>
        <a href="Pages\miembros_FLX.html">
            <p>Descuentos para miembors FLX</p>
        </a>
        <h1>Foot Lucky <span><i class="fa-regular fa-registered"></i></span> </h1>
    </div>
    <div class="texto--footer">
        <h3>Atención al cliente</h3>
        <a href="login.php">
            <p>Estado de mi pedido</p>
        </a>
        <a href="login.php">
            <p>Devoluciones y reembolsos</p>
        </a>
        <a href="contacto.php">php <p>Temas de ayuda</p>
        </a>
    </div>
    <div class="texto--footer">
        <h3>Información legal</h3>
        <a href="contacto.php">php <p>Tus derechos y privacidad</p>
        </a>
        <a href="contacto.php">php <p>Términos y condiciones</p>
        </a>
        <a href="contacto.php">php <p>Configuración de cookies</p>
        </a>
    </div>
    <div class="contacto--mapa">
        <h3>¿Donde estamos?</h3>
        <p>Calle Consuegra, 3</p>
        <p>
            <iframe id="mapa--footer" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3035.020564965345!2d-3.6791206242415706!3d40.47481005210282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229475fc7e749%3A0x71a6fb4707b13a23!2sC.%20Consuegra%2C%203%2C%2028036%20Madrid!5e0!3m2!1ses!2ses!4v1695728533657!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </p>
    </div>
</footer>

</html>