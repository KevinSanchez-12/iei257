<?php
    include 'database/bd.php';
    session_start();
    if(!isset($_SESSION['id']) && !isset($_SESSION['correo']) && !isset(($_SESSION['contra']))){
        header('Location: admin.php');
    }
    $iduser=$_SESSION['id'];
    $sql= "SELECT id, nombres, foto FROM administrador WHERE id='$iduser'";
    $resultado=$conexion->query($sql);
    $row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu-admin.php'?>
    
</body>
</html>
