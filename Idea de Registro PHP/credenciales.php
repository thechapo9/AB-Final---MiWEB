<?php

    include("../Config/config.php");
    include("../Config/conexion.php");

    if (isset($_POST["register"])) {
        if (
            strlen($_POST["usuario"]) >= 1 &&
            strlen($_POST["contraseña"]) >= 1 &&
            strlen($_POST["email"]) >= 1 &&
            strlen($_POST["nombre"]) >= 1 &&
            strlen($_POST["apellido"]) >= 1 &&
            strlen($_POST["direccion"]) >= 1 &&
            strlen($_POST["telefono"]) >= 1
            ) {
                $usuario = trim($_POST["usuario"]);
                $contraseña = trim($_POST["contraseña"]);
                $email = trim($_POST["email"]);
                $nombre = trim($_POST["nombre"]);
                $apellido = trim($_POST["apellido"]);
                $direccion = trim($_POST["direccion"]);
                $telefono = trim($_POST["telefono"]);

                $sql = $conexion->prepare("INSERT INTO usuarios(Nombre_Usuario, Password, Email, Nombre, Apellidos, Direccion, Telefono)
                VALUES ('$usuario', '$contraseña', '$email', '$nombre', '$apellido', '$direccion', '$telefono')");
                $sql->execute();


                if ($sql) {
                    header("Location: ../Pages/registro.php?success= ¡El registro se ha completado con exito!");
                    exit();
                } else {
                    header("Location: ../Pages/registro.php?error= Ha ocurrido un error.");
                    exit();
                }
            }else {
                header("Location: ../Pages/registro.php?error= Rellena todos los campos por favor.");
                exit();
            }
}







?>