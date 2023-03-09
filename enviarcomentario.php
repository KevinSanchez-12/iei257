<?php
    include 'database/bd.php';
    $nombres = $_POST["nombres"];
    $comentario = $_POST["comentario"];

    $ruta_temporal = $_FILES["foto"]["tmp_name"];
    $directorio = "assets/img/testimonios/";
    $archivo = $directorio . basename($_FILES["foto"]["name"]);

    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    if(move_uploaded_file($ruta_temporal, $archivo)){
        $rutadocumento = $archivo;
        $datos_documento= "INSERT INTO testimonios(nombres, foto, comentario) VALUES 
        ('$nombres','$rutadocumento','$comentario')";
        $declarar_documento = mysqli_query($conexion, $datos_documento);  
        if($declarar_documento) {
            echo "<script> 
            alert('Comentario Enviado'); 
            window.location = 'index'
            </script>";
        }
    }else{
        echo "<script> 
        alert('Comentario no enviado, vuelva a intentar porfavor'); 
        window.location = 'deja-tu-testimonio'
        </script>";
    }
?>