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
    <link rel="stylesheet" href="Css\style.css">
</head>
<header id="cuerpo">
    <div class='d-flex justify-content-between align-items-center' style='background-color:rgb(76, 76, 76); padding: 10px;'>
        <div>
            <?php
            session_start();
            if (isset($_SESSION["Nombre_Usuario"])) {
            ?>

                <div class='d-flex align-items-center'>
                    <a href='index.php' class='btn btn-light btn-sm me-2'>INICIO</a>
                    <a href='Pages/MostrarCarrito.php' class='btn btn-light btn-sm me-2'>CARRITO(<?php echo empty($_SESSION['CARRITO']) ? 0 : count($_SESSION['CARRITO']) ?>)</a>
                    <a href='Pages/pedidos.php' class='btn btn-light btn-sm me-2'>PEDIDOS</a>
                    <a href='Pages/contacto.php' class='btn btn-light btn-sm me-2'>CONTACTO</a>
                    <a href='Pages/mostrarComentarios.php' class='btn btn-light btn-sm me-2'>MIS COMENTARIOS</a>
                </div>
            <?php
            } else {
            ?>

                <div class='d-flex align-items-center'>
                    <a href='index.php.php' class='btn btn-light btn-sm me-2'>INICIO</a>
                    <a href='Pages/contacto.php' class='btn btn-light btn-sm me-2'>CONTACTO</a>
                </div>
            <?php
            }
            ?>
        </div>

        <div>
            <?php
            if (isset($_SESSION["Nombre_Usuario"])) {
                // Botones de nombre de usuario y cerrar sesión
                echo "<a href='#' class='btn btn-dark btn-sm me-2'>" . $_SESSION["Nombre_Usuario"] . "</a>";
                echo "<a href='PHP/cerrar_sesion.php' class='btn btn-danger btn-sm'>Salir</a>";
            } else {
                // Botones de iniciar sesión y registrarse
                echo "<a href='Pages/login.php' class='btn btn-light btn-sm me-2'>INICIAR SESION</a>";
                echo "<a href='Pages/registro.php' class='btn btn-dark btn-sm me-2'>REGISTRARSE</a>";
            }
            ?>
        </div>
    </div>
    <div class="inicio" style="background-color: rgb(76, 76, 76);">
        <img class="inicio__logo1" src="img\logos\zapatillas.png" alt="logo zapatillas">
        <h1 class="inicio__titulo">Bienvenido a Foot Lucky</h1>
        <img class="inicio__logo2" src="img\logos\zapatillas.png" alt="logo zapatillas">
    </div>
    <div class="container-fluid" style="background-color: beige; padding: 0.5vh 0.5vw;">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <a class="btn btn-secondary" style="width: 100%; margin-bottom: 10px; " href="Pages/tienda.php">Envio gratis a partir de 50€ <span><i class="fa-solid fa-cart-shopping"></i></span></a>
                </div>
                <div class="col">
                    <a class="btn btn-secondary" style="width: 100%; margin-bottom: 10px; " href="Pages/tienda.php">Envio entre 3 y 5 días <span><i class="fa-solid fa-truck-fast"></i></span></a>
                </div>
                <div class="col">
                    <a class="btn btn-secondary" style="width: 100%; margin-bottom: 10px; " href="Pages/tienda.php">Nuevos productos <span><i class="fa-solid fa-magnifying-glass"></i></span></a>
                </div>
                <div class="col">
                    <a class="btn btn-secondary" style="width: 100%; margin-bottom: 10px; " href="Pages/contacto.php">Contactanos <span><i class="fa-solid fa-phone"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</header>

<body style="background-color: beige;">
    <section class="portada">
        <h1 id="titulo">ES HORA DE MOVERSE</h1>
        <p class="texto1">Es hora de renovar tu vestuario. Hazte miembo y consigue envios gratis.</p>
        <a class="btn btn-light" href="Pages/tienda.php">Comprar ahora
            <span><i class="fa-solid fa-arrow-right"></i></span>
        </a>
    </section>
    <section class="articles">
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen1" src="img\Section1\section1.webp" alt="imagen 1"></a>
            <h2 class="subtitulo">Baloncesto</h2>
            <br>
            <a class="btn btn-dark" href="Pages/tienda.php">Comprar ahora</a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen1" src="img\Section1\section2.webp" alt="imagen 2"></a>
            <h2 class="subtitulo">Colección de Fútbol</h2>
            <br>
            <a class="btn btn-dark" href="Pages/tienda.php">Comprar ahora</a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen1" src="img\Section1\section3.webp" alt="imagen 3"></a>
            <h2 class="subtitulo">Correr con estilo</h2>
            <br>
            <a class="btn btn-dark" href="Pages/tienda.php">Comprar ahora</a>
        </article>
    </section>
    <section class="articles">
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen2" src="img\Marcas\NB.webp" alt="Logo New Balance"></a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen2" src="img\Marcas\ADIDAS.webp" alt="Logo Adidas"></a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen2" src="img\Marcas\NIKE.webp" alt="Logo Nike"></a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen2" src="img\Marcas\CONVERSE.webp" alt="Logo Converse"></a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen2" src="img\Marcas\ASICS.webp" alt="Logo Asics"></a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen2" src="img\Marcas\TODAS.webp" alt="Todas las marcas"></a>
        </article>
    </section>
    <div class="banner">
        <div>
            <a class="btn btn-light" style="    margin-top: 20vh; padding: 1vh 2.5vw;" href="Pages/tienda.php">
                Comprar ahora
                <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>
    </div>
    <div>
        <h1 class="titulo2">FAVORITOS DE FOOT LUCKY</h1>
    </div>
    <section class="articles2">
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen3" src="img\Section2\puma.webp" alt="imagen 1"></a>
            <h2 class="subtitulo">Puma Exotek</h2>
            <br>
            <a class="btn btn-dark" href="Pages/tienda.php">Comprar ahora</a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen3" src="img\Section2\cloud.webp" alt="imagen 2"></a>
            <h2 class="subtitulo">On Cloud Nova</h2>
            <br>
            <a class="btn btn-dark" href="Pages/tienda.php">Comprar ahora</a>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles imagen3" src="img\Section2\adidas_simp.webp" alt="imagen 3"></a>
            <h2 class="subtitulo">adidas x The Simpsons</h2>
            <br>
            <a class="btn btn-dark" href="Pages/tienda.php">Comprar ahora</a>
        </article>
    </section>
    <div>
        <h1 class="titulo2">COMPRAR POR CATEGORÍAS</h1>
    </div>
    <section class="articles">
        <article>
            <a href="Pages/tienda.php"><img class="articles category" src="img\Categorias\hombre.webp" alt="Categoría Hombre"></a>
            <h5>Hombre</h5>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles category" src="img\Categorias\mujer.webp" alt="Categoría Mujer"></a>
            <h5>Mujer</h5>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles category" src="img\Categorias\niños.webp" alt="Categoría Niños"></a>
            <h5>Niños</h5>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles category" src="img\Categorias\mas_vendidos.gif" alt="Artículos más vendidos"></a>
            <h5>Artículos más vendidos</h5>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles category" src="img\Categorias\disponible_solo.webp" alt="Disponible solo en Foot Lucky"></a>
            <h5>Disponible solo en Foot Lucky</h5>
        </article>
        <article>
            <a href="Pages/tienda.php"><img class="articles category" src="img\Categorias\novedades.webp" alt="Novedades"></a>
            <h5>Novedades</h5>
        </article>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer id="footer">
    <div class="texto--footer">
        <h3>Mis pedidos</h3>
        <p>Inicia sesión para ver tus pedidos</p>
        <a class="buttoms--envios" href="index.php">Ver pedidos</a>
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
        <a href="Pages/login.php">
            <p>Estado de mi pedido</p>
        </a>
        <a href="Pages/login.php">
            <p>Devoluciones y reembolsos</p>
        </a>
        <a href="Pages/contacto.php">
            <p>Temas de ayuda</p>
        </a>
    </div>
    <div class="texto--footer">
        <h3>Información legal</h3>
        <a href="Pages/contacto.php">
            <p>Tus derechos y privacidad</p>
        </a>
        <a href="Pages/contacto.php">
            <p>Términos y condiciones</p>
        </a>
        <a href="Pages/contacto.php">
            <p>Configuración de cookies</p>
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