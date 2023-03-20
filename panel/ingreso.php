<?php
include('../conexion.php');
$correo_enviado = $_POST['correo'];
$clave_enviada = $_POST['clave'];
$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo_enviado'");
while ($campo = mysqli_fetch_array($consulta)) {
    if ($correo_enviado == $campo['correo'] && $clave_enviada == $campo['clave']) {
        echo 
    } 
}
?>
