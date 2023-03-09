<?php 
    include 'database/bd.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php include_once 'templates/head.php'?>
<body>
    <?php include_once 'templates/menu.php'?>
    <section class="banner"></section>
    <h1 class="titulo">Matrícula Virtual 2022</h1>
    <h2 class="subtitulo">Complete los siguientes campos para registrar la matrícula.</h2>
    <section class="container">
        <form action="regular-proceso" class="form-nuevo" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="item">
                <h1>Datos del Alumno:</h1>
                <div id="visorArchivoc"></div>
                <div>
                    <p>Foto del niño(a)</p>
                    <input name="imágenes[]" id="nfoto" class="file" type="file" onchange="return validarExty()" required>
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
                    <p>Dirección</p>
                    <input name="ndireccion" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Tipo de parto</p>
                    <select name="ntipoParto" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Normal">Normal</option>
                        <option value="Cesárea">Cesárea</option>
                    </select>
                </div>
                <div>
                    <p>Religión</p>
                    <select name="nreligion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Católico">Católico</option>
                        <option value="Cristiano">Cristiano</option>
                        <option value="Ateo">Ateo</option>
                        <option value="Testigo de Jehová">Testigo de Jehová</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <div>
                    <p>Número de contacto <br> para emergencias</p>
                    <input name="ncontactoEmergencia" class="input-text" type="text" placeholder="Escriba aquí" maxlength="9" minlength="9" required>
                </div>
                <div>
                    <p>Accidentes Graves</p>
                    <select id="accidente" name="naccidentesGraves" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Especifique aquí que <br> accidente tuvo el niño(a)</p>
                    <textarea id="cajac" class="textarea textarea-regular" name="nespecificacionA" disabled placeholder="Escriba aquí"></textarea>
                </div>
                <div>
                    <p>Alergías</p>
                    <select id="alergia" name="nalergias" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Especifique aquí que <br> alergías tiene el niño(a)</p>
                    <textarea id="cajad" class="textarea textarea-regular" name="nespecificacionB" disabled placeholder="Escriba aquí"></textarea>
                </div>
                <div>
                    <p>¿Capacidades Especiales?</p>
                    <select name="ncapacidad" id="capacidad" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Especifique aquí que <br> capacidades especiales tiene el niño(a)</p>
                    <textarea name="ncapacidadEspecificacion" id="cajae" class="textarea textarea-regular" disabled placeholder="Escriba aquí"></textarea>
                </div>
            </div>
            <div class="item">
                <h1>Datos de la madre:</h1>
                <div>
                    <p>DNI</p>
                    <input name="mdni" class="input-text" type="text" placeholder="Escriba aquí" maxlength="8" minlength="8" required>
                </div>
                <div>
                    <p>Nombres</p>
                    <input name="mnombres" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Apellidos</p>
                    <input name="mapellidos" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Edad</p>
                    <input name="medad" class="input-text" type="number" placeholder="Indique aquí" max="80" min="1" required>
                </div>
                <div>
                    <p>Religión</p>
                    <select name="mreligion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Católico">Católico</option>
                        <option value="Cristiano">Cristiano</option>
                        <option value="Ateo">Ateo</option>
                        <option value="Testigo de Jehová">Testigo de Jehová</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <div>
                    <p>Fecha de Nacimiento</p>
                    <input name="mfechaNacimiento" class="input-text" type="date" required>
                </div>
                <div>
                    <p>Grado de instrucción</p>
                    <select name="mgradoInstruccion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Técnico">Técnico</option>
                        <option value="Universidad">Universidad</option>
                        <option value="Bachiller">Bachiller</option>
                        <option value="Licenciado(a)">Licenciado(a)</option>
                        <option value="Magister">Magister</option>
                        <option value="Doctorado">Doctorado</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <div>
                    <p>Profesión/Ocupación</p>
                    <select name="mprofesion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Administración y afines">Administración y afines</option>
                        <option value="Agronomía">Agronomía</option>
                        <option value="Antropología">Antropología</option>
                        <option value="Arqueología">Arqueología</option>
                        <option value="Arquitectura y afines">Arquitectura y afines</option>
                        <option value="Artes Escénicas y afines">Artes Escénicas y afines</option>
                        <option value="Artes Plásticas">Artes Plásticas</option>
                        <option value="Animador(a)">Animador(a)</option>
                        <option value="Barbero(a)">Barbero(a)</option>
                        <option value="Bioingeniería">Bioingeniería</option>
                        <option value="Biología y afines">Biología y afines</option>
                        <option value="Carpintero(a)">Carpintero(a)</option>
                        <option value="Carnicero">Carnicero</option>
                        <option value="Cajero(a)">Cajero(a)</option>
                        <option value="Ciencias Políticas">Ciencias Políticas</option>
                        <option value="Ciencias Sociales">Ciencias Sociales</option>
                        <option value="Cine, Televisión y afines">Cine, Televisión y afines</option>
                        <option value="Cocinero(a)">Cocinero(a)</option>
                        <option value="Comunicación e Información">Comunicación e Información</option>
                        <option value="Contabilidad y afines">Contabilidad y afines</option>
                        <option value="Chofer">Chofer</option>
                        <option value="Cultura Física y Deporte">Cultura Física y Deporte</option>
                        <option value="Derecho">Derecho</option>
                        <option value="Diseño de Interiores">Diseño de Interiores</option>
                        <option value="Diseño Gráfico">Diseño Gráfico</option>
                        <option value="Diseño Industrial">Diseño Industrial</option>
                        <option value="Ecología">Ecología</option>
                        <option value="Economía y afines">Economía y afines</option>
                        <option value="Negocios Internacionales">Negocios Internacionales</option>
                        <option value="Docente de Educación Inicial">Educación Inicial</option>
                        <option value="Docente de Educación Primaria">Educación Primaria</option>
                        <option value="Docente de Educación Secundaria">Educación Secundaria</option>
                        <option value="Docente Técnico">Educación Universitaria</option>
                        <option value="Docente Universitario">Educación Universitaria</option>
                        <option value="Electricidad Industrial">Electricidad Industrial</option>
                        <option value="Emprendedor">Emprendedor</option>
                        <option value="Enfermería">Enfermería</option>
                        <option value="Filosofía">Filosofía</option>
                        <option value="Finanzas y afines">Finanzas y afines</option>
                        <option value="Física">Física</option>
                        <option value="Fotografía">Fotografía</option>
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Geografía">Geografía</option>
                        <option value="Geología">Geología</option>
                        <option value="Gestión Empresarial">Gestión Empresarial</option>
                        <option value="Gestión Financiera">Gestión Financiera</option>
                        <option value="Historia">Historia</option>
                        <option value="Ingeniería Administrativa">Ingeniería Administrativa</option>
                        <option value="Ingeniería Aeronáutica">Ingeniería Aeronáutica</option>
                        <option value="Ingeniería Agrícola">Ingeniería Agrícola</option>
                        <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                        <option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
                        <option value="Ingeniería Civil">Ingeniería Civil</option>
                        <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                        <option value="Ingeniería de Alimentos">Ingeniería de Alimentos</option>
                        <option value="Ingeniería de Minas">Ingeniería de Minas</option>
                        <option value="Ingeniería de Petróleos">Ingeniería de Petróleos</option>
                        <option value="Ingeniería de Sistemas e Informática">Ingeniería de Sistemas e Informática</option>
                        <option value="Ingeniería de Telecomunicaciones">Ingeniería de Telecomunicaciones</option>
                        <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                        <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                        <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                        <option value="Ingeniería Química">Ingeniería Química</option>
                        <option value="Literatura, Lingüistica y afines">Literatura, Linguistica y afines</option>
                        <option value="Maestro de Obras">Maestro de Obras</option>
                        <option value="Matemática, Estadística y afines">Matemática, Estadística y afines</option>
                        <option value="Mecánico">Mecánico</option>
                        <option value="Medicina">Medicina</option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Música y afines">Música y afines</option>
                        <option value="Nutrición">Nutrición</option>
                        <option value="Operador de Máquinas">Operador de Máquinas</option>
                        <option value="Obtetricia">Obtetricia</option>
                        <option value="Odontología">Odontología</option>
                        <option value="Panadero(a)">Panadero(a)</option>
                        <option value="Pescador(a)">Pescador(a)</option>
                        <option value="Personal de Limpieza">Personal de Limpieza</option>
                        <option value="Pintor(a)">Pintor(a)</option>
                        <option value="Psicología">Psicología</option>
                        <option value="Policía">Policía</option>
                        <option value="Química Farmaceútica">Química Farmaceútica</option>
                        <option value="Química y afines">Química y afines</option>
                        <option value="Repartidor(a) de Alimentos">Repartidor(a) de Alimentos</option>
                        <option value="Sastre">Sastre</option>
                        <option value="Soldador(a)">Soldador(a)</option>
                        <option value="Taxista">Taxista</option>
                        <option value="Terapia Física">Terapia Física</option>
                        <option value="Trabajo Social">Trabajo Social</option>
                        <option value="Turismo, Hotelería y Afines">Turismo, Hotelería y Afines</option>
                        <option value="Vendedor(a)">Vendedor(a)</option>
                        <option value="Vigilante">Vigilante</option>
                        <option value="Zapatero(a)">Zapatero(a)</option>
                        <option value="Zootecnia">Zootecnia</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
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
                <div>
                    <p>¿Vive con el niño(a)?</p>
                    <select name="mviveConNino" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Correo electrónico</p>
                    <input name="mcorreo" class="input-text" type="email" placeholder="Escriba aquí">
                </div>
                <div>
                    <p>Celular</p>
                    <input name="mcelular" class="input-text" type="text" maxlength="9" minlength="9" placeholder="Escriba aquí" required> 
                </div>
            </div>
            <div class="item">
                <h1>Datos del padre:</h1>
                <div>
                    <p>DNI</p>
                    <input name="pdni" class="input-text" type="text" placeholder="Escriba aquí" maxlength="8" minlength="8" required>
                </div>
                <div>
                    <p>Nombres</p>
                    <input name="pnombres" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Apellidos</p>
                    <input name="papellidos" class="input-text" type="text" placeholder="Escriba aquí" required>
                </div>
                <div>
                    <p>Edad</p>
                    <input name="pedad" class="input-text" type="number" placeholder="Indique aquí" max="80" min="1" required>
                </div>
                <div>
                    <p>Religión</p>
                    <select name="preligion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Católico">Católico</option>
                        <option value="Cristiano">Cristiano</option>
                        <option value="Ateo">Ateo</option>
                        <option value="Testigo de Jehová">Testigo de Jehová</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <div>
                    <p>Fecha de Nacimiento</p>
                    <input name="pfechaNacimiento" class="input-text" type="date" required>
                </div>
                <div>
                    <p>Grado de instrucción</p>
                    <select name="pgradoInstruccion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secundaria">Secundaria</option>
                        <option value="Técnico">Técnico</option>
                        <option value="Universidad">Universidad</option>
                        <option value="Bachiller">Bachiller</option>
                        <option value="Licenciado(a)">Licenciado(a)</option>
                        <option value="Magister">Magister</option>
                        <option value="Doctorado">Doctorado</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
                </div>
                <div>
                    <p>Profesión/Ocupación</p>
                    <select name="pprofesion" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Administración y afines">Administración y afines</option>
                        <option value="Agronomía">Agronomía</option>
                        <option value="Antropología">Antropología</option>
                        <option value="Arqueología">Arqueología</option>
                        <option value="Arquitectura y afines">Arquitectura y afines</option>
                        <option value="Artes Escénicas y afines">Artes Escénicas y afines</option>
                        <option value="Artes Plásticas">Artes Plásticas</option>
                        <option value="Animador(a)">Animador(a)</option>
                        <option value="Barbero(a)">Barbero(a)</option>
                        <option value="Bioingeniería">Bioingeniería</option>
                        <option value="Biología y afines">Biología y afines</option>
                        <option value="Carpintero(a)">Carpintero(a)</option>
                        <option value="Carnicero">Carnicero</option>
                        <option value="Cajero(a)">Cajero(a)</option>
                        <option value="Ciencias Políticas">Ciencias Políticas</option>
                        <option value="Ciencias Sociales">Ciencias Sociales</option>
                        <option value="Cine, Televisión y afines">Cine, Televisión y afines</option>
                        <option value="Cocinero(a)">Cocinero(a)</option>
                        <option value="Comunicación e Información">Comunicación e Información</option>
                        <option value="Contabilidad y afines">Contabilidad y afines</option>
                        <option value="Chofer">Chofer</option>
                        <option value="Cultura Física y Deporte">Cultura Física y Deporte</option>
                        <option value="Derecho">Derecho</option>
                        <option value="Diseño de Interiores">Diseño de Interiores</option>
                        <option value="Diseño Gráfico">Diseño Gráfico</option>
                        <option value="Diseño Industrial">Diseño Industrial</option>
                        <option value="Ecología">Ecología</option>
                        <option value="Economía y afines">Economía y afines</option>
                        <option value="Negocios Internacionales">Negocios Internacionales</option>
                        <option value="Docente de Educación Inicial">Educación Inicial</option>
                        <option value="Docente de Educación Primaria">Educación Primaria</option>
                        <option value="Docente de Educación Secundaria">Educación Secundaria</option>
                        <option value="Docente Técnico">Educación Universitaria</option>
                        <option value="Docente Universitario">Educación Universitaria</option>
                        <option value="Electricidad Industrial">Electricidad Industrial</option>
                        <option value="Emprendedor">Emprendedor</option>
                        <option value="Enfermería">Enfermería</option>
                        <option value="Filosofía">Filosofía</option>
                        <option value="Finanzas y afines">Finanzas y afines</option>
                        <option value="Física">Física</option>
                        <option value="Fotografía">Fotografía</option>
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Geografía">Geografía</option>
                        <option value="Geología">Geología</option>
                        <option value="Gestión Empresarial">Gestión Empresarial</option>
                        <option value="Gestión Financiera">Gestión Financiera</option>
                        <option value="Historia">Historia</option>
                        <option value="Ingeniería Administrativa">Ingeniería Administrativa</option>
                        <option value="Ingeniería Aeronáutica">Ingeniería Aeronáutica</option>
                        <option value="Ingeniería Agrícola">Ingeniería Agrícola</option>
                        <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                        <option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
                        <option value="Ingeniería Civil">Ingeniería Civil</option>
                        <option value="Ingeniería Comercial">Ingeniería Comercial</option>
                        <option value="Ingeniería de Alimentos">Ingeniería de Alimentos</option>
                        <option value="Ingeniería de Minas">Ingeniería de Minas</option>
                        <option value="Ingeniería de Petróleos">Ingeniería de Petróleos</option>
                        <option value="Ingeniería de Sistemas e Informática">Ingeniería de Sistemas e Informática</option>
                        <option value="Ingeniería de Telecomunicaciones">Ingeniería de Telecomunicaciones</option>
                        <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                        <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                        <option value="Ingeniería Mecatrónica">Ingeniería Mecatrónica</option>
                        <option value="Ingeniería Química">Ingeniería Química</option>
                        <option value="Literatura, Lingüistica y afines">Literatura, Linguistica y afines</option>
                        <option value="Maestro de Obras">Maestro de Obras</option>
                        <option value="Matemática, Estadística y afines">Matemática, Estadística y afines</option>
                        <option value="Mecánico">Mecánico</option>
                        <option value="Medicina">Medicina</option>
                        <option value="Medicina Veterinaria">Medicina Veterinaria</option>
                        <option value="Música y afines">Música y afines</option>
                        <option value="Nutrición">Nutrición</option>
                        <option value="Operador de Máquinas">Operador de Máquinas</option>
                        <option value="Obtetricia">Obtetricia</option>
                        <option value="Odontología">Odontología</option>
                        <option value="Panadero(a)">Panadero(a)</option>
                        <option value="Pescador(a)">Pescador(a)</option>
                        <option value="Personal de Limpieza">Personal de Limpieza</option>
                        <option value="Pintor(a)">Pintor(a)</option>
                        <option value="Psicología">Psicología</option>
                        <option value="Policía">Policía</option>
                        <option value="Química Farmaceútica">Química Farmaceútica</option>
                        <option value="Química y afines">Química y afines</option>
                        <option value="Repartidor(a) de Alimentos">Repartidor(a) de Alimentos</option>
                        <option value="Sastre">Sastre</option>
                        <option value="Soldador(a)">Soldador(a)</option>
                        <option value="Taxista">Taxista</option>
                        <option value="Terapia Física">Terapia Física</option>
                        <option value="Trabajo Social">Trabajo Social</option>
                        <option value="Turismo, Hotelería y Afines">Turismo, Hotelería y Afines</option>
                        <option value="Vendedor(a)">Vendedor(a)</option>
                        <option value="Vigilante">Vigilante</option>
                        <option value="Zapatero(a)">Zapatero(a)</option>
                        <option value="Zootecnia">Zootecnia</option>
                        <option value="Prefiero no decirlo">Prefiero no decirlo</option>
                    </select>
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
                <div>
                    <p>¿Vive con el niño(a)?</p>
                    <select name="pviveConNino" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Correo electrónico</p>
                    <input name="pcorreo" class="input-text" type="email" placeholder="Escriba aquí">
                </div>
                <div>
                    <p>Celular</p>
                    <input name="pcelular" class="input-text" type="text" maxlength="9" minlength="9" placeholder="Escriba aquí" required> 
                </div>
            </div>
            <div class="item">
                <h1>Datos familiares:</h1>
                <div>
                    <p>N° de hermanos</p>
                    <input name="fhermanos" class="input-text" type="number" placeholder="Indique aquí" max="20" min="0" required>
                </div>
                <div>
                    <p>N° de personas que viven <br> en casa</p>
                    <input name="fpersonas" class="input-text" type="number" placeholder="Indique aquí" max="20" min="0" required>
                </div>
                <div>
                    <p>¿Tiene servicio de luz?</p>
                    <select name="fluz" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>¿Cuenta con desagüe?</p>
                    <select name="fdesague" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>¿Tiene radio?</p>
                    <select name="fradio" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>¿Tiene laptop?</p>
                    <select name="flaptop" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Posición entre hermanos</p>
                    <input name="fposicionHermanos" class="input-text" type="number" placeholder="Indique aquí" max="20" min="1" required>
                </div>
                <div>
                    <p>Tipo de casa</p>
                    <select name="ftipoCasa" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Propia">Propia</option>
                        <option value="Alquilada">Alquilada</option>
                    </select>
                </div>
                <div>
                    <p>¿Tiene servicio de agua?</p>
                    <select name="fagua" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>¿Tiene internet en casa?</p>
                    <select name="finternet" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>¿Tiene TV?</p>
                    <select name="ftv" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>¿Tiene computadora?</p>
                    <select name="fcomputadora" class="input-text" required>
                        <option value="">Escoger opción</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div>
                    <p>Información Adicional</p>
                    <textarea class="textarea textarea-regular" name="finformacionAdicional" placeholder="Escriba aquí"></textarea>
                </div>
                <button class="boton" type="submit">Registrar Matrícula <i class="fa fa-angle-right"></i></button>
            </div>
        </form>
    </section>
    <?php include_once 'templates/footer.php'?>
</body>
<?php include_once 'templates/script.php'?>
</html>