<?php
include 'inc/conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario_nombre = $_POST['usuario_nombre'];
    $usuario_password = $_POST['usuario_password'];
    
    $ins=$con->prepare("SELECT FROM usuarios WHERE usuarios nombre= AND usuarios_password VALUES(?,?,?,?,?,?)");
    $ins->bind_param("isssss",$id,$nombre_del_proveedor_post,$direccion_del_proveedor_post,$telefono_1_post,$telefono_2_post,$correo_proveedor_post);
    if($ins->execute()){
        header("Location: alerta.php?tipo=exito&operacion=Proveedor Guardado&destino=proveedor_registrar.php");
    }
    else{
        header("Location: alerta.php?tipo=fracaso&operacion=Proveedor No Guardado&destino=proveedor_registrar.php");
    }
    $ins->close();
    $con->close();
}
