<?php
session_start();
include("../Config/config.php");
include("../PHP/carrito.php");

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacto Foot Lucky</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/799bc4e5c6.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../Css/style_mostrarCarrito.css">
</head>

<header id="cuerpo">
    <div class='d-flex justify-content-between align-items-center' style='background-color:rgb(76, 76, 76); padding: 10px;'>
        <div>
            <?php
            if (isset($_SESSION["Nombre_Usuario"])) {
            ?>

                <div class='d-flex align-items-center'>
                    <a href='../index.php' class='btn btn-light btn-sm me-2'>INICIO</a>
                    <a href='mostrarCarrito.php' class='btn btn-light btn-sm me-2'>CARRITO(<?php echo empty($_SESSION['CARRITO']) ? 0 : count($_SESSION['CARRITO']) ?>)</a>
                    <a href='pedidos.php' class='btn btn-light btn-sm me-2'>PEDIDOS</a>
                    <a href='contacto.php' class='btn btn-light btn-sm me-2'>CONTACTO</a>
                    <a href='mostrarComentarios.php' class='btn btn-light btn-sm me-2'>MIS COMENTARIOS</a>
                </div>
            <?php
            } else {
            ?>

                <div class='d-flex align-items-center'>
                    <a href='../index.php' class='btn btn-light btn-sm me-2'>INICIO</a>
                    <a href='Pages/contacto.php' class='btn btn-light btn-sm me-2'>CONTACTO</a>
                </div>";
            <?php
            }
            ?>
        </div>

        <div>
            <?php
            if (isset($_SESSION["Nombre_Usuario"])) {
                // Botones de nombre de usuario y cerrar sesión
                echo "<a href='../index.php' class='btn btn-dark btn-sm me-2'>" . $_SESSION["Nombre_Usuario"] . "</a>";
                echo "<a href='../PHP/cerrar_sesion.php' class='btn btn-danger btn-sm'>Salir</a>";
            } else {
                // Botones de iniciar sesión y registrarse
                echo "<a href='Pages/login.php' class='btn btn-light btn-sm me-2'>INICIAR SESION</a>";
                echo "<a href='Pages/registro.php' class='btn btn-dark btn-sm me-2'>REGISTRARSE</a>";
            }
            ?>
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
                    <a class="btn btn-secondary" href="tienda.php" style="width: 100%; margin-bottom: 10px;">Envio gratis a partir de 50€ <span><i class="fa-solid fa-cart-shopping"></i></span></a>
                </div>
                <div class="col" style="width: 20%;">
                    <a class="btn btn-secondary" href="tienda.php" style="width: 100%; margin-bottom: 10px;">Envio entre 3 y 5 días <span><i class="fa-solid fa-truck-fast"></i></span></a>
                </div>
                <div class="col" style="width: 20%;">
                    <a class="btn btn-secondary" href="tienda.php" style="width: 100%; margin-bottom: 10px;">Nuevos productos <span><i class="fa-solid fa-magnifying-glass"></i></span></a>
                </div>
                <div class="col" style="width: 20%;">
                    <a class="btn btn-secondary" href="contacto.php" style="width: 100%; margin-bottom: 10px;">Contactanos <span><i class="fa-solid fa-phone"></i></span></a>
                </div>
            </div>
        </div>
    </div>
</header>

<body style="background-color: beige;">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mx-auto">
                <h3>Lista del carrito</h3>
                <?php if (($eliminado != "") && (count($_SESSION["CARRITO"])) > 0) { ?>
                    <div class="alert alert-danger">
                        <?php echo $eliminado ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 mx-auto">
                <?php if (!empty($_SESSION["CARRITO"])) { ?>
                    <table class="table table-light table-bordered">
                        <tbody>
                            <tr>
                                <th width="40%">Descripcion</th>
                                <th width="15%" class="text-center">Cantidad</th>
                                <th width="20%" class="text-center">Precio</th>
                                <th width="20%" class="text-center">Total</th>
                                <th width="5%">--</th>
                            </tr>
                            <?php $total = 0; ?>
                            <?php foreach ($_SESSION["CARRITO"] as $indice => $producto) { ?>
                                <tr>
                                    <td width="40%"><?php echo $producto["PRODUCTO"] ?></td>
                                    <td width="15%" class="text-center"><?php echo $producto["CANTIDAD"] ?></td>
                                    <td width="20%" class="text-center"><?php echo $producto["PRECIO"] ?>€</td>
                                    <td width="20%" class="text-center"><?php echo number_format($producto["CANTIDAD"] * $producto["PRECIO"], 2) ?>€</td>
                                    <td width="5%">
                                        <form action="" method="post">

                                            <input type="hidden" name="idproducto" id="idproducto" value="<?php echo openssl_encrypt($producto["ID"], COD, KEY) ?>">
                                            <button class="btn btn-danger" type="submit" name="btnAction" value="Eliminar">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php $total = $total + ($producto["CANTIDAD"] * $producto["PRECIO"]); ?>
                            <?php } ?>
                            <tr>
                                <td colspan="3" align="right">
                                    <h3>Total</h3>
                                </td>
                                <td align="right">
                                    <h3><?php echo number_format($total, 2); ?>€</h3>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <form action="../PHP/pagar.php" method="post">
                                        <input type="hidden" name="idUsuarios" id="idUsuarios">
                                        <div>
                                            <button  class="btn btn-primary btn-lg btn-block" type="submit" name="pagar" value="proceder" style="width: 100%;">
                                                Proceder a comprar <span><i class="fa-solid fa-arrow-right"></i></span>
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <div style="min-height:300px">
                        <div class="alert alert-info" style="width: 40%;">
                            No hay productos en el carrito.
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer id="footer">
    <div class="texto--footer">
        <h3>Mis pedidos</h3>
        <p>Inicia sesión para ver tus pedidos</p>
        <a class="buttoms--envios" href="login.php">Ver pedidos</a>
        <a href="tienda.php">
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
        <a href="contacto.php">
            <p>Temas de ayuda</p>
        </a>
    </div>
    <div class="texto--footer">
        <h3>Información legal</h3>
        <a href="contacto.php">
            <p>Tus derechos y privacidad</p>
        </a>
        <a href="contacto.php">
            <p>Términos y condiciones</p>
        </a>
        <a href="contacto.php">
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