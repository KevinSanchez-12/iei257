<?php 
    include 'database/bd.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <h1 class="titulo titulob">Déjanos tu comentario</h1>
    <form class="form-comentario" action="enviarcomentario" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div id="visorArchivob"></div>
        <button class="input-file" onclick="document.getElementById('file').click()">Foto de perfil <i class="fa fa-upload"></i></button>
        <input name="nombres" class="input-text" type="text" placeholder="Nombres y Apellidos" required>
        <input name="foto" class="file" type="file" id="file" onchange="return validarExt()" required>
        <textarea class="textarea" name="comentario" cols="30" rows="10" placeholder="Escriba aquí su comentario" required></textarea>
        <button id="btn1" class="boton" type="submit">Enviar Comentario<i class="fa fa-angle-right"></i></button>
    </form>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
<script type="text/javascript">
    function validarExt(){
        var archivoInput = document.getElementById('file');
        var btn = document.getElementById('btn1');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.png|.PNG|.jpg|.JPG|.jpeg|.JPEG)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('Hubo un error al subir su foto, intentar de nuevo.');
            archivoInput.value = '';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    document.getElementById('visorArchivob').innerHTML = '<embed class="foto" src="'+e.target.result+'" width="100" height="100">';
                    alertify.success('Su foto se subió correctamente.');
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
</html>