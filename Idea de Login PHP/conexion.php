<?php 
require_once("config.php");

$servidor = "mysql:dbname=".BDname.";host=".BDhost.";";

try {
    $conexion = new PDO($servidor, administrator, password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $toastMessage = "¡Conexion a base de datos exitosa!";
} catch (PDOException $e) {
    $toastMessage = "Error...";
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Asegúrate de incluir los archivos CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<!-- Toast de Bootstrap -->
<div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
    <div id="miToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Notificación</strong>
            <small>Ahora</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            <?php echo $toastMessage; ?>
        </div>
    </div>
</div>

<!-- Scripts de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    var toastEl = document.getElementById('miToast');
    var toast = new bootstrap.Toast(toastEl,{delay:1200});
    toast.show();
</script>
</body>
</html>
