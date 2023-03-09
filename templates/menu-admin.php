<nav class="menu-admin center">
        <div class="container center">
            <div class="item-a">
                <img src="assets/img/logo/logo.png">
            </div>
            <div class="item-b">
                <div class="box">
                    <div class="a">
                        <img src="<?php echo $row["foto"];?>">
                        <h1><?php echo $row["nombres"];?></h1>
                    </div>
                    <div class="botones">
                        <a href="home" class="boton"><span>Inicio</span><i class="fa fa-angle-right"></i><p class="fa fa-home"></p></a>
                        <a href="logout" class="boton"><span>Cerrar Sesión</span><i class="fa fa-angle-right"></i><p class="fa fa-sign-out-alt"></p></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>