<script src="assets/js/menu.js"></script>
<!-- MATRICULA ALUMNO NUEVO -->
<script type="text/javascript">
    $( function() {
    $("#capacidad").change( function() {
        if ($(this).val() === "No") {
            $("#caja").prop("disabled", true);
            $("#caja").val("");
            
        } else {
            $("#caja").prop("disabled", false);
        }
    });
    });
    $( function() {
    $("#set").change( function() {
        if ($(this).val() === "No") {
            var buttonnfichaMatriculaSet = document.getElementById('buttonnfichaMatriculaSet');
            $("#nfichaMatriculaSetbutton").prop("disabled", true);
            $("#nfichaMatriculaSetbutton").val("");
            buttonnfichaMatriculaSet.innerHTML = '<p>Subir archivo</p>';
        } else {
            $("#nfichaMatriculaSetbutton").prop("disabled", false);
        }
    });
    });
    $( function() {
    $("#set").change( function() {
        if ($(this).val() === "No") {
            var buttonnfichaTrasladoSet = document.getElementById('buttonnfichaTrasladoSet');
            $("#nfichaTrasladoSetbutton").prop("disabled", true);
            $("#nfichaTrasladoSetbutton").val("");
            buttonnfichaTrasladoSet.innerHTML = '<p>Subir archivo</p>';
        } else {
            $("#nfichaTrasladoSetbutton").prop("disabled", false);
        }
    });
    });
</script>
<script type="text/javascript">
    function validarExta(){
        var archivoInput = document.getElementById('nfoto');
        var buttonnfoto = document.getElementById('buttonnfoto');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.png)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('La foto debe tener una extensión .png, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfoto.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    document.getElementById('visorArchivo').innerHTML = '<embed class="foto" src="'+e.target.result+'" width="100" height="100">';
                    alertify.success('La foto de su niño(a) se ha subido correctamente.');
                    buttonnfoto.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtb(){
        var archivoInput = document.getElementById('ncopiaDni');
        var buttonncopiaDni = document.getElementById('buttonncopiaDni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaDni.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaDni.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtc(){
        var archivoInput = document.getElementById('ncopiaPartidaNacimiento');
        var buttonncopiaPartidaNacimiento = document.getElementById('buttonncopiaPartidaNacimiento');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaPartidaNacimiento.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaPartidaNacimiento.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtd(){
        var archivoInput = document.getElementById('nfichaDatosSiagie');
        var buttonnfichaDatosSiagie = document.getElementById('buttonnfichaDatosSiagie');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfichaDatosSiagie.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonnfichaDatosSiagie.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExte(){
        var archivoInput = document.getElementById('ncopiaTarjetaVacunacion');
        var buttonncopiaTarjetaVacunacion = document.getElementById('buttonncopiaTarjetaVacunacion');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaTarjetaVacunacion.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaTarjetaVacunacion.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtf(){
        var archivoInput = document.getElementById('ncopiaAnalisisHemoglobina');
        var buttonncopiaAnalisisHemoglobina = document.getElementById('buttonncopiaAnalisisHemoglobina');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaAnalisisHemoglobina.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaAnalisisHemoglobina.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtg(){
        var archivoInput = document.getElementById('nfichaMatriculaSet');
        var buttonnfichaMatriculaSet = document.getElementById('buttonnfichaMatriculaSet');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfichaMatriculaSet.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonnfichaMatriculaSet.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExth(){
        var archivoInput = document.getElementById('nfichaTrasladoSet');
        var buttonnfichaTrasladoSet = document.getElementById('buttonnfichaTrasladoSet');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfichaTrasladoSet.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonnfichaTrasladoSet.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExti(){
        var archivoInput = document.getElementById('pcopiaDni');
        var buttonpcopiaDni = document.getElementById('buttonpcopiaDni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonpcopiaDni.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonpcopiaDni.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtj(){
        var archivoInput = document.getElementById('mcopiaDni');
        var buttonmcopiaDni = document.getElementById('buttonmcopiaDni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonmcopiaDni.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonmcopiaDni.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
<!-- MATRICULA ALUMNO TRASLADO -->
<script type="text/javascript">
    $( function() {
    $("#capacidadb").change( function() {
        if ($(this).val() === "No") {
            $("#cajab").prop("disabled", true);
            $("#cajab").val("");
            
        } else {
            $("#cajab").prop("disabled", false);
        }
    });
    });
</script>
<script type="text/javascript"> 
    function validarExtk(){
        var archivoInput = document.getElementById('nfoto');
        var buttonnfoto = document.getElementById('buttonnfoto');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.png)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('La foto debe tener una extensión .png, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfoto.innerHTML = '<p>Subir archivo</p>';
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
                    alertify.success('La foto de su niño(a) se ha subido correctamente.');
                    buttonnfoto.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtl(){
        var archivoInput = document.getElementById('ncopiaDni');
        var buttonncopiaDni = document.getElementById('buttonncopiaDni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaDni.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaDni.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtm(){
        var archivoInput = document.getElementById('ncopiaPartidaNacimiento');
        var buttonncopiaPartidaNacimiento = document.getElementById('buttonncopiaPartidaNacimiento');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaPartidaNacimiento.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaPartidaNacimiento.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtn(){
        var archivoInput = document.getElementById('nfichaDatosSiagie');
        var buttonnfichaDatosSiagie = document.getElementById('buttonnfichaDatosSiagie');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfichaDatosSiagie.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonnfichaDatosSiagie.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExto(){
        var archivoInput = document.getElementById('ncopiaTarjetaVacunacion');
        var buttonncopiaTarjetaVacunacion = document.getElementById('buttonncopiaTarjetaVacunacion');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaTarjetaVacunacion.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaTarjetaVacunacion.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtp(){
        var archivoInput = document.getElementById('ncopiaAnalisisHemoglobina');
        var buttonncopiaAnalisisHemoglobina = document.getElementById('buttonncopiaAnalisisHemoglobina');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncopiaAnalisisHemoglobina.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncopiaAnalisisHemoglobina.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtq(){
        var archivoInput = document.getElementById('ncertificadoEstudiosAnterior');
        var buttonncertificadoEstudiosAnterior = document.getElementById('buttonncertificadoEstudiosAnterior');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonncertificadoEstudiosAnterior.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonncertificadoEstudiosAnterior.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtr(){
        var archivoInput = document.getElementById('nresolucionTraslado');
        var buttonnresolucionTraslado = document.getElementById('buttonnresolucionTraslado');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnresolucionTraslado.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonnresolucionTraslado.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExts(){
        var archivoInput = document.getElementById('nfichaMatricula');
        var buttonnfichaMatricula = document.getElementById('buttonnfichaMatricula');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfichaMatricula.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonnfichaMatricula.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtt(){
        var archivoInput = document.getElementById('pcopiaDni');
        var buttonpcopiaDni = document.getElementById('buttonpcopiaDni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonpcopiaDni.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonpcopiaDni.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
    function validarExtx(){
        var archivoInput = document.getElementById('mcopiaDni');
        var buttonmcopiaDni = document.getElementById('buttonmcopiaDni');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.pdf|.PDF)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('El archivo debe ser PDF, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonmcopiaDni.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    alertify.success('El archivo se ha subido correctamente.');
                    buttonmcopiaDni.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>
<!-- MATRICULA ALUMNO REGULAR -->
<script type="text/javascript">
    $( function() {
    $("#accidente").change( function() {
        if ($(this).val() === "No") {
            $("#cajac").prop("disabled", true);
            $("#cajac").val("");
        } else {
            $("#cajac").prop("disabled", false);
        }
    });
    });
    $( function() {
    $("#alergia").change( function() {
        if ($(this).val() === "No") {
            $("#cajad").prop("disabled", true);
            $("#cajad").val("");
        } else {
            $("#cajad").prop("disabled", false);
        }
    });
    });
    $( function() {
    $("#capacidad").change( function() {
        if ($(this).val() === "No") {
            $("#cajae").prop("disabled", true);
            $("#cajae").val("");
        } else {
            $("#cajae").prop("disabled", false);
        }
    });
    });
</script>
<script type="text/javascript"> 
    function validarExty(){
        var archivoInput = document.getElementById('nfoto');
        var buttonnfoto = document.getElementById('buttonnfoto');
        var archivoRuta = archivoInput.value;
        var extPermitidas = /(.png)$/i;
        if(!extPermitidas.exec(archivoRuta)){
            alertify.error('La foto debe tener una extensión .png, inténtelo de nuevo porfavor.');
            archivoInput.value = '';
            buttonnfoto.innerHTML = '<p>Subir archivo</p>';
            return false;
        }
        else
        {
            if (archivoInput.files && archivoInput.files[0]) 
            {
                var visor = new FileReader();
                visor.onload = function(e) 
                {
                    document.getElementById('visorArchivoc').innerHTML = '<embed class="foto" src="'+e.target.result+'" width="100" height="100">';
                    alertify.success('La foto de su niño(a) se ha subido correctamente.');
                    buttonnfoto.innerHTML = '<p>Completado</p>';
                };
                visor.readAsDataURL(archivoInput.files[0]);
            }
        }
    }
</script>


