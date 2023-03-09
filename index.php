
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <section class="banner">
        <div class="animate-bounce-down boton">
            <a href="matricula">Matrícula 2022<i class="fa fa-angle-right"></i></a>
        </div>
    </section>
    <h1 class="titulo">Matrícula Virtual 2022</h1>
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
    <section class="orientacion">
        <div class="box container center">
            <div class="item-a center">
                <div class="box">
                    <h1>¿Deseas tener orientación personalizada para el proceso de matrícula virtual 2022?</h1>
                    <div class="center">
                        <a target="_blank" href="https://wa.me/+51987147390">Pide orientación aquí<i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-b">
                <img src="assets/img/etc/12.jpg" alt="">
            </div>
        </div>
    </section>
    <h1 class="titulo">Nuestros Padres de Familia</h1>
    <?php include_once 'components/testimonios.php'?>
    <h1 class="titulo">Ubícanos</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1372.0580080153986!2d-76.16545278666415!3d-13.426800884508246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110170e2c0d6155%3A0x55594eb9740cfd5!2sI.E.I%20N%C2%B022257!5e0!3m2!1ses-419!2spe!4v1634928724725!5m2!1ses-419!2spe" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
</html>