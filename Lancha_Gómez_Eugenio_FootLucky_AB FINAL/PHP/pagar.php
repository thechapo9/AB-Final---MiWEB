<?php
session_start();
include("../Config/config.php");
include("../Config/conexion.php");

$pedidoHecho = "";

if (isset($_POST["pagar"])) {

    $total = 0;
    foreach($_SESSION["CARRITO"] as $indice=>$producto) {
        $total = $total + ($producto["CANTIDAD"] * $producto["PRECIO"]);

    }

    $idUsuarios = $_SESSION["idUsuarios"];
    $fechaPedido = date("Y-m-d H:i:s");
    $status = "Confirmado";
    
    

    $sql = $conexion->prepare("INSERT INTO mi_pagina_web_abfinal.pedidos (id_Usuarios, Fecha_de_pedido, Total, status) VALUES ('$idUsuarios', '$fechaPedido', '$total', '$status')");
    $sql->execute();

    if ($sql) {
        header("Location: ../Pages/pedidos.php");
        $pedidoHecho = "¡Tu pedido ha sido realizado con exito!";
    }

}
?>