<?php 
session_start();

include("../Config/config.php");
include("../Config/conexion.php");

if (isset($_POST["comments"])) {

    $ID_Usuarios = $_SESSION["idUsuarios"];
    $Comentario = $_POST["comentario"];
    $fechaComentario = date("Y-m-d H:i:s");
    $status = "Enviado";


    $sql = $conexion->prepare("INSERT INTO mi_pagina_web_abfinal.comentarios (id_Usuarios, Fecha, Comentario, status) VALUES ('$ID_Usuarios','$fechaComentario','$Comentario','$status')");
    $sql->execute();

    if ($sql) {
        header("Location: ../Pages/mostrarComentarios.php");
    }

}
?>