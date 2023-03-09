<?php
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasena = 'root';
    $baseDeDatos = '257';
    $conexion = new mysqli($servidor,$usuario,$contrasena,$baseDeDatos);
    if ($conexion->connect_error) {
        die("la conexión ha fallado: " . $conexion->connect_error);
    }
    if (!$conexion->set_charset("utf8")) {
        printf("Error al cargar el conjunto de caracteres utf8: %s\n", $conexion->error);
        exit();
    }
?>
