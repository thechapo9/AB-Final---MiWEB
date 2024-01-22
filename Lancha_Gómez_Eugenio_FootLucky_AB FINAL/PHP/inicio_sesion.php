<?php
    session_start();

    include("../Config/config.php");
    include("../Config/conexion.php");

    if (isset($_POST["usuario"]) && isset($_POST["contraseña"])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST["usuario"]);
    $contraseña = validate($_POST["contraseña"]);

    if (empty($usuario)) {
        header("Location: ../Pages/login.php?error=Usuario Requerido");
        exit();
    } elseif (empty($contraseña)) {
        header("Location: ../Pages/login.php?error=Contraseña Requerida");
        exit();
    }else {

        // $contraseña = md5($contraseña);

        $sql = $conexion->prepare("SELECT * FROM usuarios WHERE Nombre_Usuario = '$usuario' AND Password = '$contraseña'");
        $sql->execute();

        if ($sql->rowCount() === 1) {
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            if ($row["Nombre_Usuario"] === $usuario && $row["Password"] === $contraseña) {
                $_SESSION["Nombre_Usuario"] = $row["Nombre_Usuario"];
                $_SESSION["idUsuarios"] = $row["idUsuarios"];
                $_SESSION["Email"] = $row["Email"];
                $_SESSION["Nombre"] = $row["Nombre"];
                $_SESSION["Apellidos"] = $row["Apellidos"];
                $_SESSION["Direccion"] = $row["Direccion"];
                $_SESSION["Telefono"] = $row["Telefono"];
                header("Location: ../index.php");
                exit();
            } else {
                header("Location: ../Pages/login.php?error= El usuario o la contraseña son incorrectas");
                exit();
            }
        } else {
            header("Location: ../Pages/login.php?error= El usuario o la contraseña son incorrectas");
            exit();
        }
    }

} else {
    header("Location: ../Pages/login.php?error= El usuario o la contraseña son incorrectas");
    exit();
}






?>