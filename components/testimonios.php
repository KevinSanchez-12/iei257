<?php 
    include 'database/bd.php';
    $testimonio = "SELECT * FROM testimonios ORDER BY id DESC LIMIT 8";
?>
<section class="testimonios container">
<?php $resultado= mysqli_query($conexion, $testimonio);
while($row=mysqli_fetch_assoc($resultado)){ ?>
    <div>
        <p><?php echo $row["comentario"];?></p>
        <img src="<?php echo $row["foto"];?>">
        <h1><?php echo $row["nombres"];?></h1>
        <h2>Padre de Familia</h2>
    </div>
<?php }?>
</section>