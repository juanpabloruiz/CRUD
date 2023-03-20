<?php
session_start();
$conexion = new mysqli('localhost', 'usuario', '123', 'base');
mysqli_set_charset($conexion, 'utf8');
?>