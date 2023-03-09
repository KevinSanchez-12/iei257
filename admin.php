<?php
    include 'database/bd.php';
    $mensaje = "";
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['correo']) && isset(($_SESSION['contra']))){
        header('Location: home.php');
    }
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        session_start();
        $correo = $_POST['email'];
        $contra = $_POST['password'];
        $sql = "SELECT * FROM administrador WHERE correo = '$correo'";
        $resultado = mysqli_query($conexion, $sql);
        $fila = mysqli_fetch_array($resultado);
        if($contra == $fila['contra']){
            $_SESSION['id'] = $fila['id'];
            $_SESSION['correo'] = $fila['correo'];
            $_SESSION['contra'] = $fila['contra'];
            header("Location: home.php");
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body class="body-admin">
    <section class="part-a"></section>
    <section class="part-b">
        <form action="admin.php" method="POST" class="form-login-admin">
            <h1 class="titulo">Iniciar Sesión</h1>
            <div>
                <p>Correo electrónico</p>
                <input name="email" class="input-text" type="email" placeholder="Escriba aquí" required>
            </div>
            <div>
                <p>Contraseña</p>
                <input name="password" id="password" class="input-text" type="password" placeholder="Escriba aquí" required>
                <i id="eye" class="icon-eye-1"></i>
            </div>
            <button class="boton" type="submit">Ingresar <i class="fa fa-angle-right"></i></button>
        </form>
    </section>
</body>
<script src="assets/js/cambiarViewPass.js"></script>
</html>