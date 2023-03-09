<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <h1 class="titulo titulob">Matrícula 2022</h1>
    <h2 class="subtitulo">Elige la modalidad que más se adecúe a tus necesidades.</h2>
    <section class="modalidad container">
        <a href="nuevo" class="center">
            <div class="center">
                <i class="fa fa-user-plus"></i>
            </div>
            <h4>Alumno</h4>
            <span>nuevo</span>
        </a>
        <a href="traslado" class="center">
            <div class="center traslado">
                <i class="fa fa-university"></i>
                <i class="fa fa-exchange"></i>
                <i class="fa fa-school"></i>
            </div>
            <h4>Alumno</h4>
            <span>traslado</span>
        </a>
        <a href="regular" class="center">
            <div class="center">
                <i class="fa fa-user"></i>
            </div>
            <h4>Alumno</h4>
            <span>regular</span>
        </a>
    </section>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
</html>