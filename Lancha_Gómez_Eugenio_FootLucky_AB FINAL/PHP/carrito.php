<?php
    $mensaje = "";
    $eliminado="";

    if (isset($_POST["btnAction"]) && isset($_SESSION["Nombre_Usuario"])) {

        switch($_POST["btnAction"]) {
            
            case "Agregar":

                if (is_numeric(openssl_decrypt($_POST["idproducto"],COD,KEY))) {
                    $idProducto = openssl_decrypt($_POST["idproducto"],COD,KEY);
                    $mensaje .= "Ok idProducto"." ".$idProducto."<br/>";
                } else {
                    $mensaje .= "idProducto incorrecto"." ".$idProducto."<br/>";
                }

                if (is_string(openssl_decrypt($_POST["producto"],COD,KEY))) {
                    $Producto = openssl_decrypt($_POST["producto"],COD,KEY);
                    $mensaje .= "Ok Producto"." ".$Producto."<br/>";
                } else {
                    $mensaje .= "Producto incorrecto"." ".$Producto."<br/>";
                }

                if (is_numeric(openssl_decrypt($_POST["precio"],COD,KEY))) {
                    $Precio = openssl_decrypt($_POST["precio"],COD,KEY);
                    $mensaje .= "Ok Precio"." ".$Precio."€"."<br/>";
                } else {
                    $mensaje .= "Precio incorrecto"." ".$Precio."<br/>";
                }

                if (is_numeric(openssl_decrypt($_POST["cantidad"],COD,KEY))) {
                    $Cantidad = openssl_decrypt($_POST["cantidad"],COD,KEY);
                    $mensaje .= "Ok Cantidad"." ".$Cantidad."<br/>";
                } else {
                    $mensaje .= "idProducto incorrecto"." ".$idProducto."<br/>";
                }
                
                if (!isset($_SESSION["CARRITO"])) {

                    $producto = array(
                        "ID"=>$idProducto,
                        "PRODUCTO"=>$Producto,
                        "PRECIO"=>$Precio,
                        "CANTIDAD"=>$Cantidad,
                    );
                    
                    $_SESSION["CARRITO"][0]=$producto;
                    $productoAñadido = $producto["PRODUCTO"];
                    $mensaje = "¡Añadistes el producto".$productoAñadido." al carrito con exito!  ";

                } else {
                    $Numero_productos = count($_SESSION["CARRITO"]);
                    $producto = array(
                        "ID"=>$idProducto,
                        "PRODUCTO"=>$Producto,
                        "PRECIO"=>$Precio,
                        "CANTIDAD"=>$Cantidad,
                    );
                    $_SESSION["CARRITO"][$Numero_productos]=$producto;
                    $productoAñadido = $producto["PRODUCTO"];
                    $mensaje = "¡El producto ".$productoAñadido." ha sido añadido al carrito con exito!  ";
                }
            break;

            case "Eliminar":



                if (is_numeric(openssl_decrypt($_POST["idproducto"],COD,KEY))) {
                    $idProducto = openssl_decrypt($_POST["idproducto"],COD,KEY);
                    
                    foreach($_SESSION["CARRITO"] as $indice=>$producto) {
                        if ($producto["ID"] == $idProducto) {

                            
                            $productoEliminado = $producto["PRODUCTO"];
                            $eliminado = "El producto ".$productoEliminado." ha sido eliminado del carrito con exito.";
                            unset($_SESSION["CARRITO"][$indice]);
                            
                        }
                    }


                } else {
                    $mensaje .= "idProducto incorrecto"." ".$idProducto."<br/>";
                }

            break;
        } 
    } elseif (isset($_POST["btnAction"]) && (!isset($_SESSION["Nombre_Usuario"]))) {
        header("Location: ../Pages/login.php");
    }


?>




