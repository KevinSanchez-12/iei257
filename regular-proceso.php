<?php
    include 'database/bd.php';
    foreach ($_FILES["imágenes"]["error"] as $clave => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $nombre_tmp = $_FILES["imágenes"]["tmp_name"][$clave];
            $nombre = basename($_FILES["imágenes"]["name"][$clave]);
            move_uploaded_file($nombre_tmp, "assets/files/matriculaRegular/".uniqid()."$nombre");
        }
    }
    $ruta = $_FILES["imágenes"]["name"];
    $tipoMatricula ="regular";
    $nnombre = $_POST['nnombre'];
    $napellido = $_POST['napellido'];
    $naula = $_POST['naula'];
    $nfechaNacimiento = $_POST['nfechaNacimiento'];
    $ndni = $_POST['ndni'];
    $nedad = "PRUEBA";
    $vacio = "";
    $ndireccion = $_POST['ndireccion'];
    $ntipoParto = $_POST['ntipoParto'];
    $nreligion = $_POST['nreligion'];
    $ncontactoEmergencia = $_POST['ncontactoEmergencia'];
    $naccidentesGraves = $_POST['naccidentesGraves'];
    $nespecificacionA = $_POST['nespecificacionA'];
    $nalergias = $_POST['nalergias'];
    $nespecificacionB = $_POST['nespecificacionB'];
    $ncapacidad = $_POST['ncapacidad'];
    $ncapacidadEspecificacion = $_POST['ncapacidadEspecificacion'];
    $mdni = $_POST['mdni'];
    $mnombres = $_POST['mnombres'];
    $mapellidos = $_POST['mapellidos'];
    $medad = $_POST['medad'];
    $mreligion = $_POST['mreligion'];
    $mfechaNacimiento = $_POST['mfechaNacimiento'];
    $mgradoInstruccion = $_POST['mgradoInstruccion'];
    $mprofesion = $_POST['mprofesion'];
    $mestadoCivil = $_POST['mestadoCivil'];
    $mviveConNino = $_POST['mviveConNino'];
    $mcorreo = $_POST['mcorreo'];
    $mcelular = $_POST['mcelular'];
    $pdni = $_POST['pdni'];
    $pnombres = $_POST['pnombres'];
    $papellidos = $_POST['papellidos'];
    $pedad  = $_POST['pedad'];
    $preligion = $_POST['preligion'];
    $pfechaNacimiento = $_POST['pfechaNacimiento'];
    $pgradoInstruccion = $_POST['pgradoInstruccion'];
    $pprofesion = $_POST['pprofesion'];
    $pestadoCivil = $_POST['pestadoCivil'];
    $pviveConNino = $_POST['pviveConNino'];
    $pcorreo = $_POST['pcorreo'];
    $pcelular = $_POST['pcelular'];
    $fhermanos = $_POST['fhermanos'];
    $fpersonas = $_POST['fpersonas'];
    $fluz = $_POST['fluz'];
    $fdesague = $_POST['fdesague'];
    $fradio = $_POST['fradio'];
    $flaptop = $_POST['flaptop'];
    $fposicionHermanos = $_POST['fposicionHermanos'];
    $ftipoCasa = $_POST['ftipoCasa'];
    $fagua = $_POST['fagua'];
    $finternet = $_POST['finternet'];
    $ftv = $_POST['ftv'];
    $fcomputadora = $_POST['fcomputadora'];
    $finformacionAdicional = $_POST['finformacionAdicional'];

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
    window.location = 'regular'
    </script>";
    }
    // $ruta_temporal = $_FILES["nfoto"]["tmp_name"];
    // $directorio = "assets/files/matriculaRegular/";
    // $archivo = $directorio . basename($_FILES["nfoto"]["name"]);
    // $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    // if(move_uploaded_file($ruta_temporal, $archivo)){
    // $rutadocumento = $archivo;
    // $datos_documento = "INSERT INTO matricularegular(nfoto, ndni, nnombres, napellidos, nfechaNacimiento, ndireccion, ntipoParto, nreligion, ncontactoEmergencia, naccidentesGraves, nespecificacionA, nalergias, nespecificacionB, mdni, mnombres, mapellidos, medad, mreligion, mfechaNacimiento, mgradoInstruccion, mprofesion, mestadoCivil, mviveConNino, mcorreo, mcelular, pdni, pnombres, papellidos, pedad, preligion, pfechaNacimiento, pgradoInstruccion, pprofesion, pestadoCivil, pviveConNino, pcorreo, pcelular, fhermanos, fpersonas, fluz, fdesague, fradio, flaptop, fposicionHermanos, ftipoCasa, fagua, finternet, ftv, fcomputadora, finformacionAdicional) VALUES                 
    // ('$rutadocumento','$ndni','$nnombres','$napellidos','$nfechaNacimiento','$ndireccion','$ntipoParto','$nreligion','$ncontactoEmergencia','$naccidentesGraves','$nespecificacionA','$nalergias','$nespecificacionB','$mdni','$mnombres','$mapellidos','$medad','$mreligion','$mfechaNacimiento','$mgradoInstruccion','$mprofesion','$mestadoCivil','$mviveConNino','$mcorreo','$mcelular','$pdni','$pnombres','$papellidos','$pedad','$preligion','$pfechaNacimiento','$pgradoInstruccion','$pprofesion','$pestadoCivil','$pviveConNino','$pcorreo','$pcelular','$fhermanos','$fpersonas','$fluz','$fdesague','$fradio','$flaptop','$fposicionHermanos','$ftipoCasa','$fagua','$finternet','$ftv','$fcomputadora','$finformacionAdicional')";			
    // $declarar_documento = mysqli_query($conexion, $datos_documento);                                
    // if($declarar_documento) {
    //     echo "<script> 
    //     alert('Sus datos fueron enviados'); 
    //     window.location = 'terminal'
    //     </script>";
    // }
    // }else{
    //     echo "<script> 
    // alert('Sus datos no fueron enviados, inténtelo de nuevo porfavor'); 
    // window.location = 'regular'
    // </script>";
    // }  
?>