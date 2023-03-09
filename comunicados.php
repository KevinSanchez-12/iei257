<?php 
    include 'database/bd.php';
    $testimonio = "SELECT * FROM comunicados";
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <h1 class="titulo titulob">Comunicados</h1>
    <section class="container comunicados">
    <?php $resultado= mysqli_query($conexion, $testimonio);
    while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="item">
            <p>Dirigido a los <?php echo $row["dirigido"];?>:</p>
            <h1><?php echo $row["texto"];?></h1>
            <div>
                Publicado:<h4><?php echo $row["fecha"];?></h4>
            </div>
        </div>
    <?php }?>
    </section>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
</html>