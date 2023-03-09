<?php
    include 'database/bd.php';
    foreach ($_FILES["imágenes"]["error"] as $clave => $error) {
      if ($error == UPLOAD_ERR_OK) {
          $nombre_tmp = $_FILES["imágenes"]["tmp_name"][$clave];
          $nombre = basename($_FILES["imágenes"]["name"][$clave]);
          move_uploaded_file($nombre_tmp, "assets/files/matriculaNuevo/".uniqid()."$nombre");
      }
    }
    $ruta = $_FILES["imágenes"]["name"];
    $tipoMatricula ="nuevo";
    $nnombre = $_POST['nnombre'];
    $napellido = $_POST['napellido'];
    $naula = $_POST['naula'];
    $nfechaNacimiento = $_POST['nfechaNacimiento'];
    $ndni = $_POST['ndni'];
    $nedad = "PRUEBA";
    $vacio = "";
    $ncapacidad = $_POST['ncapacidad'];
    $ncapacidadEspecificacion = $_POST['ncapacidadEspecificacion'];
    $nset = $_POST['nset'];
    $pdni = $_POST['pdni'];
    $pestadoCivil = $_POST['pestadoCivil'];
    $mdni = $_POST['mdni'];
    $mestadoCivil = $_POST['mestadoCivil'];
 
    $datos_documento = "INSERT INTO matriculas(tipoMatricula, nfoto, nnombre, napellido, naula, nfechaNacimiento, nedad, ndni, ncopiaDni, ncopiaPartidaNacimiento, nfichaDatosSiagie, ncopiaTarjetaVacunacion, ncopiaAnalisisHemoglobina, ncertificadoEstudiosAnterior, nresolucionTraslado, nfichaMatricula, ncapacidad, ncapacidadEspecificacion, nset, nfichaMatriculaSet, nfichaTrasladoSet, pdni, pcopiaDni, pestadoCivil, mdni, mcopiaDni, mestadoCivil) VALUES                 
    ('$tipoMatricula', '$ruta[0]', '$nnombre', '$napellido', '$naula', '$nfechaNacimiento', '$nedad', '$ndni', '$ruta[1]', '$ruta[2]', '$ruta[3]', '$ruta[4]', '$ruta[5]', '$vacio', '$vacio', '$vacio', '$ncapacidad', '$ncapacidadEspecificacion', '$nset', '$ruta[6]', '$ruta[7]', '$pdni', '$ruta[8]', '$pestadoCivil', '$mdni', '$ruta[9]', '$mestadoCivil')";			
    $declarar_documento = mysqli_query($conexion, $datos_documento);                                
    if($declarar_documento) {
        echo "<script> 
        alert('Sus datos fueron enviados'); 
        window.location = 'terminal'
        </script>";
    }else{
        echo "<script> 
    alert('Sus datos no fueron enviados, inténtelo de nuevo porfavor'); 
    window.location = 'nuevo'
    </script>";
    }
?>