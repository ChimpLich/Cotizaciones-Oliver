<?php
session_start();
$nombre_cliente;
if (isset($_SESSION['nombre_cliente']) && isset($_SESSION['descripcion_coche'])) {
    header('Location: cotizacion_en_curso.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include'inc/incluye_bootstrap.php' ?>

        <link href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <?php include'inc/incluye_menu.php' ?>
        <div class="container">
            <div class="Screenpop">
                <form role="form" id="login-form" method="post" class="form-signin" action="cotizacion_guardar_inicia.php">
            <div class="h2">
                Iniciar una nueva cotizacion
            </div>
            
            <div class="form-group">
                <label>Nombre del cliente (requerido)</label>
                <input type="text" class="form-control" id="nombre_del_cliente" name="nombre_del_cliente"
                       placeholder="Ingresa nombre del cliente" style="text-transform:uppercase;" required>
            </div>
            <div class="form-group">
                <label>Descripcion del coche (requerido)</label>
                <input type="text" class="form-control" id="descripcion_coche" name="descripcion_coche"
                       placeholder="Ingresa descripcion general del coche" style="text-transform:uppercase;" required>
            </div>

            <div class="form-group">
                <label>Fecha Actual (requerido)</label>
                <input type="date" class="form-control" id="fecha_actual" name="fecha_actual" step="1" value="<?php echo date("Y-m-d"); ?>" required>
            </div>
            <br>

            <button type="submit" class="btn btn-primary">Siguiente</button>
            <input type="reset" class="btn btn-default" value="Limpiar">
        </form>

            </div>
        </div>

    </body>
</html>