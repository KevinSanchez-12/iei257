<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <section class="banner"></section>
    <h1 class="titulo">Matrícula Virtual 2022</h1>
    <h2 class="subtitulo">Complete los siguientes campos para registrar la matrícula.</h2>
    <section class="container">
        <form action="traslado-proceso" class="form-nuevo" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="item">
                <h1>Datos del Alumno:</h1>
                <div id="visorArchivob"></div>
                <div>
                    <p>Foto del niño(a)</p>
                    <input name="imágenes[]" id="nfoto" class="file" type="file" onchange="return validarExtk()" required>
                    <button onclick="document.getElementById('nfoto').click()" class="input-file"><p id="buttonnfoto">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Nombres</p>
                    <input name="nnombre" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Apellidos</p>
                    <input name="napellido" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Aula</p>
                    <select name="naula" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="3">3 años</option>
                        <option value="5">5 años</option>
                    </select>
                </div>
                <div>
                    <p>Fecha de Nacimiento</p>
                    <input name="nfechaNacimiento" class="input-text" min="2018-03-30" type="date" required>
                </div>
                <div>
                    <p>DNI</p>
                    <input name="ndni" class="input-text" type="text" placeholder="Escriba aquí" maxlength="8" minlength="8" required>
                </div>
                <div>
                    <p>Copia de DNI</p>
                    <input name="imágenes[]" id="ncopiaDni" class="file" type="file" onchange="return validarExtl()" required>
                    <button onclick="document.getElementById('ncopiaDni').click()" class="input-file"><p id="buttonncopiaDni">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Copia de Partida de Nacimiento</p>
                    <input name="imágenes[]" id="ncopiaPartidaNacimiento" class="file" type="file" onchange="return validarExtm()" required>
                    <button onclick="document.getElementById('ncopiaPartidaNacimiento').click()" class="input-file"><p id="buttonncopiaPartidaNacimiento">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Ficha de datos SIAGIE</p>
                    <input name="imágenes[]" id="nfichaDatosSiagie" class="file" type="file" onchange="return validarExtn()" required>
                    <button onclick="document.getElementById('nfichaDatosSiagie').click()" class="input-file"><p id="buttonnfichaDatosSiagie">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Copia de tarjeta de vacunación</p>
                    <input name="imágenes[]" id="ncopiaTarjetaVacunacion" class="file" type="file" onchange="return validarExto()" required>
                    <button onclick="document.getElementById('ncopiaTarjetaVacunacion').click()" class="input-file"><p id="buttonncopiaTarjetaVacunacion">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Copia de análisis de <br> hemoglobina</p>
                    <input name="imágenes[]" id="ncopiaAnalisisHemoglobina" class="file" type="file" onchange="return validarExtp()" required>
                    <button onclick="document.getElementById('ncopiaAnalisisHemoglobina').click()" class="input-file"><p id="buttonncopiaAnalisisHemoglobina">Subir archivo</p><i class="fa fa-upload"></i></button>    
                </div>
                <div>
                    <p>Certificado de estudios <br> del año anterior</p>
                    <input name="imágenes[]" id="ncertificadoEstudiosAnterior" class="file" type="file" onchange="return validarExtq()" required>
                    <button onclick="document.getElementById('ncertificadoEstudiosAnterior').click()" class="input-file"><p id="buttonncertificadoEstudiosAnterior">Subir archivo</p><i class="fa fa-upload"></i></button>    
                </div>
                <div>
                    <p>Resolución de traslado</p>
                    <input name="imágenes[]" id="nresolucionTraslado" class="file" type="file" onchange="return validarExtr()" required>
                    <button onclick="document.getElementById('nresolucionTraslado').click()" class="input-file"><p id="buttonnresolucionTraslado">Subir archivo</p><i class="fa fa-upload"></i></button>        
                </div>
                <div>
                    <p>Ficha de matrícula</p>
                    <input name="imágenes[]" id="nfichaMatricula" class="file" type="file" onchange="return validarExts()" required>
                    <button onclick="document.getElementById('nfichaMatricula').click()" class="input-file"><p id="buttonnfichaMatricula">Subir archivo</p><i class="fa fa-upload"></i></button>        
                </div>
                <div>
                    <p>¿Capacidades Especiales?</p>
                    <select name="ncapacidad" id="capacidadb" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Especifique aquí que <br> capacidades especiales tiene el niño(a)</p>
                    <textarea name="ncapacidadEspecificacion" id="cajab" class="textarea textarea-regular" disabled placeholder="Escriba aquí"></textarea>
                </div>
            </div>
            <div class="item">
                <h1>Datos del padre:</h1>
                <div>
                    <p>DNI</p>
                    <input name="pdni" class="input-text" type="text" maxlength="8" minlength="8" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Copia de DNI</p>
                    <input name="imágenes[]" id="pcopiaDni" class="file" type="file" onchange="return validarExtt()" required>
                    <button onclick="document.getElementById('pcopiaDni').click()" class="input-file"><p id="buttonpcopiaDni">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Estado civil</p>
                    <select name="pestadoCivil" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <h1>Datos de la madre:</h1>
                <div>
                    <p>DNI</p>
                    <input name="mdni" class="input-text" type="text" maxlength="8" minlength="8" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Copia de DNI</p>
                    <input name="imágenes[]" id="mcopiaDni" class="file" type="file" onchange="return validarExtx()" required>
                    <button onclick="document.getElementById('mcopiaDni').click()" class="input-file"><p id="buttonmcopiaDni">Subir archivo</p><i class="fa fa-upload"></i></button>
                </div>
                <div>
                    <p>Estado civil</p>
                    <select name="mestadoCivil" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Soltero(a)">Soltero(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viudo(a)">Viudo(a)</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <button class="boton" type="submit">Registrar Matrícula <i class="fa fa-angle-right"></i></button>
            </div>
        </form>
    </section>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
</html>