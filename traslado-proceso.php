<?php
    include 'database/bd.php';
    foreach ($_FILES["imágenes"]["error"] as $clave => $error) {
      if ($error == UPLOAD_ERR_OK) {
          $nombre_tmp = $_FILES["imágenes"]["tmp_name"][$clave];
          $nombre = basename($_FILES["imágenes"]["name"][$clave]);
          move_uploaded_file($nombre_tmp, "assets/files/matriculaTraslado/".uniqid()."$nombre");
      }
    }
    $ruta = $_FILES["imágenes"]["name"]; 
    $tipoMatricula ="traslado";
    $nnombre = $_POST['nnombre'];
    $napellido = $_POST['napellido'];
    $naula = $_POST['naula'];
    $nfechaNacimiento = $_POST['nfechaNacimiento'];
    $ndni = $_POST['ndni'];
    $nedad = "PRUEBA";
    $vacio = "";
    $ncapacidad = $_POST['ncapacidad'];
    $ncapacidadEspecificacion = $_POST['ncapacidadEspecificacion'];
    $pdni = $_POST['pdni'];
    $pestadoCivil = $_POST['pestadoCivil'];
    $mdni = $_POST['mdni'];
    $mestadoCivil = $_POST['mestadoCivil'];
 
        $datos_documento = "INSERT INTO matriculas(tipoMatricula, nfoto, nnombre, napellido, naula, nfechaNacimiento, nedad, ndni, ncopiaDni, ncopiaPartidaNacimiento, nfichaDatosSiagie, ncopiaTarjetaVacunacion, ncopiaAnalisisHemoglobina, ncertificadoEstudiosAnterior, nresolucionTraslado, nfichaMatricula, ncapacidad, ncapacidadEspecificacion, nset, nfichaMatriculaSet, nfichaTrasladoSet, pdni, pcopiaDni, pestadoCivil, mdni, mcopiaDni, mestadoCivil) VALUES                 
        ('$tipoMatricula', '$ruta[0]', '$nnombre', '$napellido', '$naula', '$nfechaNacimiento', '$nedad', '$ndni', '$ruta[1]', '$ruta[2]', '$ruta[3]', '$ruta[4]', '$ruta[5]', '$ruta[6]', '$ruta[7]', '$ruta[8]', '$ncapacidad', '$ncapacidadEspecificacion', '$vacio', '$vacio', '$vacio', '$pdni', '$ruta[9]', '$pestadoCivil', '$mdni', '$ruta[10]', '$mestadoCivil')";			
        $declarar_documento = mysqli_query($conexion, $datos_documento);                                
        if($declarar_documento) {
            echo "<script> 
            alert('Sus datos fueron enviados'); 
            window.location = 'terminal'
            </script>";
        }else{
            echo "<script> 
        alert('Sus datos no fueron enviados, inténtelo de nuevo porfavor'); 
        window.location = 'traslado'
        </script>";
        }
?>