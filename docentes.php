<?php 
    include 'database/bd.php';
    $docente = "SELECT * FROM docentes";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <h1 class="titulo titulob">Plana Docente</h1>
    <section class="containerb docentes">
    <?php $resultado= mysqli_query($conexion, $docente);
    while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="item">
            <img src="<?php echo $row["foto"];?>">
            <h1><?php echo $row["nombres"];?></h1>
            <h2><?php echo $row["cargo"];?></h2>
        </div>
    <?php }?>
    </section>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
</html>