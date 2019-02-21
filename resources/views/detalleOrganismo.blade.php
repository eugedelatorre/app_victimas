
<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje F: Atención del caso</title>
      <style>
      </style>
   </head>
   <header>
     <ul class="nav nav-tabs">
        <li class="nav-item"> <strong><a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarCaso">Eje A: Datos institucionales</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="agregarVictimaB">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarConvivienteC">Eje C: Grupo Conviviente</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelitoD">Eje D: Caracterización de delito</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarImputadoE">Eje E: Datos del imputado</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:black;font-size:1.1em" href="#">Eje F: Atención del caso</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacionG">Eje G: Documentación</a> </li></strong>
     </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje F: Atención del caso.</h1>
      <section class="container">
         <form class="" action="/detalleOrganismo" method="post">
           {{ csrf_field() }}
           <input type="hidden" name="idPersona" value="{{$institucion->id}}">
             <input type="hidden" name="idCaso" value="{{$institucion->idCaso}}">

  <div class="form-group">
  {{ $errors->has('organismos_intervinieron') ? 'has-error' : ''}}

     <label for="modalidad_ingreso">F 1.¿intervinieron otros organismos previamente?</label>
     <select class="form-control" name="organismos_intervinieron" id="organismos_intervinieron" onChange="selectOnChangeF1(this)" >
        <option value="" >Selecciona una opción</option>
        <option value="1" >Sí</option>
        <option value="2" >NO.Intervino solo el organismo que derivó </option>
     </select><br>



     {!! $errors->first('organismos_intervinieron', '<p class="help-block" style="color:red";>:message</p>') !!}
<div class="organismos_previos_si" id="organismos_previos_si" style="display:none">
     <input type="checkbox" value="5" class="form-check-inline" name="organismos_previos[]" id="1">
     <label for="ANSES" class="form-check-inline form-check-label">ANSES</label><br>


     <input type="checkbox"  value="1" class="form-check-inline" name="organismos_previos[]" id="2">
     <label for="Fiscalía" class="form-check-inline form-check-label">Fiscalía</label><br>

     <input type="checkbox" value="2" class="form-check-inline" name="organismos_previos[]" id="3">
     <label for="juzgado" class="form-check-inline form-check-label">juzgado</label> <br>

     <input type="checkbox"  value="3" class="form-check-inline" name="organismos_previos[]" id="4">
     <label for="Estado en tu barrio" class="form-check-inline form-check-label">Estado en tu barrio</label><br>

     <input type="checkbox" value="4" class="form-check-inline" name="organismos_previos[]" id="5">
     <label for="Centro de Acceso a Justicia (CAJ)" class="form-check-inline form-check-label">Centro de Acceso a Justicia (CAJ)</label><br>



     <input type="checkbox" value="6" class="form-check-inline" name="organismos_previos[]" id="6">
     <label for="Otro CAVAJ" class="form-check-inline form-check-label">Otro CAVAJ</label><br>


     <input type="checkbox" value="7"  class="form-check-inline" name="organismos_previos[]" id="7">
     <label for="Organismo Provincial de Niñez y Adolescencia" class="form-check-inline form-check-label">Organismo Provincial de Niñez y Adolescencia</label><br>

     <input type="checkbox"  value="8"  class="form-check-inline" name="organismos_previos[]" id="8">
     <label for="cPrograma Provincial Cerca de Noche" class="form-check-inline form-check-label">Programa Provincial Cerca de Noche</label><br>

     <input type="checkbox" value="9" class="form-check-inline" name="organismos_previos[]" id="9">
     <label for="Dirección Provincial de Equidad de Género y Diversidad Sexual" class="form-check-inline form-check-label">Dirección Provincial de Equidad de Género y Diversidad Sexual</label><br>

     <input type="checkbox" value="10"  class="form-check-inline" name="organismos_previos[]" id="10">
     <label for="Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)" class="form-check-inline form-check-label">Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)</label><br>

     <input type="checkbox" value="11" class="form-check-inline" name="organismos_previos[]" id="11">
     <label for="Dirección Provincial de Salud Mental y Adicciones" class="form-check-inline form-check-label">Dirección Provincial de Salud Mental y Adicciones</label><br>

     <input type="checkbox" value="12" class="form-check-inline" name="organismos_previos[]" id="12">
     <label for="Policía Federal" class="form-check-inline form-check-label">Policía Federal</label><br>

     <input type="checkbox" value="13" class="form-check-inline" name="organismos_previos[]" id="13">
     <label for="Policía Bonaerense" class="form-check-inline form-check-label">Policía Bonaerense</label><br>

     <input type="checkbox" value="14" class="form-check-inline" name="organismos_previos[]" id="14">
     <label for="Policía Local" class="form-check-inline form-check-label">Policía Local</label><br>

     <input type="checkbox" value="15" class="form-check-inline" name="organismos_previos[]" id="15">
     <label for="Policía Metropolitana" class="form-check-inline form-check-label">Policía Metropolitana</label><br>

     <input type="checkbox" value="16" class="form-check-inline" name="organismos_previos[]"  id="checkeadoF1"  onclick="muestroCualF1()">
     <label for="otro" class="form-check-inline form-check-label" >otro</label><br>
</div>
     <div id="cualF1" style="display: none;">
        <br><label for="">Cuál?</label>

           <input class="form-control" name="cual_otro_organismo" id="cual_otro_organismo" type="text" value="">

     </div>

  </div>

  <script>
  function muestroCualA5() {
      var checkBox = document.getElementById("checkeadoA5");
      var text = document.getElementById("cualA5");
      if (checkBox.checked == true){
          text.style.display = "block";
      } else {
            $('#cual_otro_organismo').val('');
         text.style.display = "none";
      }
  }
  </script>


  <script>
     function selectOnChangeA5(sel) {
       if (sel.value=="1"){
            divC = document.getElementById("si_otro_organismo");
            $('#cual_otro_organismo').val('');
            divC.style.display = "block";}


    }
  </script>

  <script>
     function selectOnChangeF1(sel) {
       if (sel.value=="1"){
            divC = document.getElementById("organismos_previos_si");
            divC.style.display = "block";


      }else{divC2 = document.getElementById("cualF1");
      divC2.style.display = "none";
      $('#cual_otro_organismo').val('');
      divC = document.getElementById("organismos_previos_si");
      divC.style.display = "none";
       document.getElementById("checkeadoF1").checked = false;
       document.getElementById("1").checked = false;
       document.getElementById("2").checked = false;
       document.getElementById("3").checked = false;
       document.getElementById("4").checked = false;
       document.getElementById("5").checked = false;
       document.getElementById("6").checked = false;
       document.getElementById("7").checked = false;
       document.getElementById("8").checked = false;
       document.getElementById("9").checked = false;
       document.getElementById("10").checked = false;
       document.getElementById("11").checked = false;
       document.getElementById("12").checked = false;
       document.getElementById("13").checked = false;
       document.getElementById("14").checked = false;
       document.getElementById("15").checked = false;






      }


    }
  </script>
            <div class="AunoDosF2">
               <label>F 2. Tipo de asistencia requerida:</label>
               <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
               <div class="Auno">
                  <input type="checkbox" value="1" class="form-check-inline" name="asistencia_juridica" id="Jurídica">
                  <label for="Jurídica" class="form-check-inline form-check-label">Jurídica</label><br>
                  <input type="checkbox" value="2" class="form-check-inline" name="asistencia_psicologica" id="Psicológica">
                  <label for="Psicológica" class="form-check-inline form-check-label">Psicológica</label> <br>
                  <input type="checkbox" value="3" class="form-check-inline" name="asistencia_socioeconomica"  id="checkeadosocioeco"  onclick="muestrosocioeco()">
                  <label for="Socioeconomica" class="form-check-inline form-check-label" >Socioeconomica</label><br>
               </div>
            </div>
            <div id="socioeco" style="display:none">
               <label>F 2I. Tipo de asistencia socioeconómica:</label>
               <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
               <input type="checkbox" value="1" class="form-check-inline" name="tipo_asistencia_socioeconomica[]" id="Salud">

               <label for="Salud" class="form-check-inline form-check-label">Salud</label><br>
               <input type="checkbox" value="2" class="form-check-inline" name="tipo_asistencia_socioeconomica[]" id="Educacion">

               <label for="Educacion" class="form-check-inline form-check-label">Educación</label> <br>
               <input type="checkbox" value="3" class="form-check-inline" name="tipo_asistencia_socioeconomica[]" id="Trabajo">

               <label for="trabajo" class="form-check-inline form-check-label">Trabajo</label><br>
               <input type="checkbox" value="4" class="form-check-inline" name="tipo_asistencia_socioeconomica[]" id="Vivienda">

               <label for="vivienda" class="form-check-inline form-check-label">Vivienda</label><br>
               <input type="checkbox" value="5" class="form-check-inline" name="tipo_asistencia_socioeconomica[]" id="Vincular">

               <label for="vincular" class="form-check-inline form-check-label">Vincular</label><br>
               <input type="checkbox" value="6" class="form-check-inline" name="tipo_asistencia_socioeconomica[]"  id="checkeadoF2I"  onclick="muestroCualF2I()">

               <label for="otro" class="form-check-inline form-check-label" >otro</label><br>
               <div id="cualF2I"style="display:none">

                  <label for="socioeconomica_otro_cualF2I">Cuál?:</label>
                  <input class="form-control" name="socioeconomica_otro" type="text" id="socioeconomica_otro_cualF2I">
               </div>
            </div>
            <div class="form-group ">
               <div id="mostrar_actualesF4">
                  <label>F 4. Organismos con los que se articula actualmente:</label>
                  <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
                  <div class="Auno">
                     <input type="checkbox" value="1" class="form-check-inline" name="organismos_actuales[]" id="Colegio_de_Abogados">
                     <label for="Colegio_de_Abogados" class="form-check-inline form-check-label">Colegio de Abogados</label><br>

                     <input type="checkbox" value="2" class="form-check-inline" name="organismos_actuales[]" id="Abogado_particular">
                     <label for="Abogado_particular" class="form-check-inline form-check-label">Abogado Particular</label> <br>

                     <input type="checkbox" value="3" class="form-check-inline" name="organismos_actuales[]" id="Fiscalia">
                     <label for="Fiscalia" class="form-check-inline form-check-label">Fiscalía</label><br>

                     <input type="checkbox" value="4" class="form-check-inline" name="organismos_actuales[]" id="Juzgado_de_paz">
                     <label for="Juzgado_de_paz" class="form-check-inline form-check-label">Juzgado de Paz</label><br>

                     <input type="checkbox" value="5" class="form-check-inline" name="organismos_actuales[]" id="Juzgado_de_familia">
                     <label for="Juzgado_de_familia" class="form-check-inline form-check-label">Juzgado de Familia</label><br>

                     <input type="checkbox" value="6" class="form-check-inline" name="organismos_actuales[]" id="casa_de_justicia(ministerio_publico)">
                     <label for="Casa_de_justicia(ministerio_publico)" class="form-check-inline form-check-label">Casa de Justicia(Ministerio Público)</label><br>

                     <input type="checkbox" value="7" class="form-check-inline" name="organismos_actuales[]" id="consultorio_juridico_gratuito">
                     <label for="consultorio_juridico_gratuito" class="form-check-inline form-check-label">Consultorio Jurídico Gratuito</label><br>

                     <input type="checkbox" value="8" class="form-check-inline" name="organismos_actuales[]" id="Estado en tu barrio">
                     <label for="Estado en tu barrio" class="form-check-inline form-check-label">Estado en tu barrio</label><br>

                     <input type="checkbox" value="9" class="form-check-inline" name="organismos_actuales[]" id="Centro de Acceso a Justicia (CAJ)">
                     <label for="Centro de Acceso a Justicia (CAJ)" class="form-check-inline form-check-label">Centro de Acceso a Justicia (CAJ)</label><br>

                     <input type="checkbox" value="10" class="form-check-inline" name="organismos_actuales[]" id="ANSES">
                     <label for="ANSES" class="form-check-inline form-check-label">ANSES</label><br>

                     <input type="checkbox" value="11" class="form-check-inline" name="organismos_actuales[]" id="Otro CAVAJ">
                     <label for="Otro CAVAJ" class="form-check-inline form-check-label">Otro CAVAJ</label><br>

                     <input type="checkbox" value="12" class="form-check-inline" name="organismos_actuales[]" id="Organismo Provincial de Niñez y Adolescencia">
                     <label for="Organismo Provincial de Niñez y Adolescencia" class="form-check-inline form-check-label">Organismo Provincial de Niñez y Adolescencia</label><br>

                     <input type="checkbox" value="13" class="form-check-inline" name="organismos_actuales[]" id="Programa Provincial Cerca de Noche">
                     <label for="cPrograma Provincial Cerca de Noche" class="form-check-inline form-check-label">Programa Provincial Cerca de Noche</label><br>

                     <input type="checkbox" value="14" class="form-check-inline" name="organismos_actuales[]" id="Dirección Provincial de Equidad de Género y Diversidad Sexual">
                     <label for="Dirección Provincial de Equidad de Género y Diversidad Sexual" class="form-check-inline form-check-label">Dirección Provincial de Equidad de Género y Diversidad Sexual</label><br>

                     <input type="checkbox" value="15" class="form-check-inline" name="organismos_actuales[]" id="Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)">
                     <label for="Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)" class="form-check-inline form-check-label">Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)</label><br>

                     <input type="checkbox" value="16" class="form-check-inline" name="organismos_actuales[]" id="Dirección Provincial de Salud Mental y Adicciones">
                     <label for="Dirección Provincial de Salud Mental y Adicciones" class="form-check-inline form-check-label">Dirección Provincial de Salud Mental y Adicciones</label><br>

                     <input type="checkbox" value="17" class="form-check-inline" name="organismos_actuales[]" id="Policía Federal">
                     <label for="Policía Federal" class="form-check-inline form-check-label">Policía Federal</label><br>

                     <input type="checkbox" value="18" class="form-check-inline" name="organismos_actuales[]" id="Policía Bonaerense">
                     <label for="Policía Bonaerense" class="form-check-inline form-check-label">Policía Bonaerense</label><br>

                     <input type="checkbox" value="19" class="form-check-inline" name="organismos_actuales[]" id="Policía Local">
                     <label for="Policía Local" class="form-check-inline form-check-label">Policía Local</label><br>

                     <input type="checkbox" value="20" class="form-check-inline" name="organismos_actuales[]" id="Policía Metropolitana">
                     <label for="Policía Metropolitana" class="form-check-inline form-check-label">Policía Metropolitana</label><br>

                     <input type="checkbox" value="21" class="form-check-inline" name="organismos_actuales[]"  id="checkeadoF4"  onclick="muestroCualF4()">
                     <label for="otro" class="form-check-inline form-check-label" >otro</label><br>
                  </div>
               </div>
            </div>
            <div id="cualF4"style="display:none">
               <label for="organismos_actual_otro_cualF4">Cuál?:</label>
               <input class="form-control" name="organismos_actual_otro" type="text" id="organismos_actual_otro_cualF4">
            </div>
            <div class="form-group ">
               <label for="patrocinio">F 6.Patrocinio jurìdico gratuito:</label>
               <select class="form-control" name="pratocinio_gratuito" id="pratocinio_gratuito" onChange="selectOnChangeF6(this)">
                  <option value=""> Patrocinio Jurídico Gratuito</option>
                  <option value="1" >Requiere</option>
                  <option value="2" >A la espera de designación</option>
                  <option value="3">Designado</option>
                  <option value="4" >No abierto</option>
               </select>
            </div>
            <div id="cualF6" style="display:none">
               <label for="letrado_designado">F 6I.Nombre y Apellido del letrado designado:</label>
               <input type="text" class="form-control" name="letrado_designado" id="designado" value="">
            </div>
            <div class="form-group " id="conformidad" style="display:none">
               <label for="pratocinio_conformidad">F 6II.¿La víctima está conforme con la asistencia recibida por parte del letrado designado?:</label>
               <select class="form-control" name="pratocinio_conformidad" id="pratocinio_gratuito-designado" onChange="selectOnChangeF6II(this)">
                  <option value=""> Conformidad con la asistencia recibida</option>
                  <option value="1" >Sí</option>
                  <option value="2" >No</option>
                  <option value="3">Se desconoce</option>
               </select>
            </div>
            <div class="form-group ">
               <label for="colegio_departamental">F 6III.Colegio Departamental:</label>
               <select class="form-control" name="colegio_departamental" id="colegio_departamental">
                  <option value="">Colegio Departamental</option>
                  <option value="1" >colegio1</option>
                  <option value="2" >colegio2</option>
                  <option value="3">Colegio3</option>
               </select>
            </div>
            <div class="form-group " id="fecha_designacion" style="display:none">
               <label for="">F 6IV. Fecha de designación: </label>
               <input type="date" class="form-control" id="fecha_designacion_del_letrad" name="fecha_designacion" value="" ><br>
            </div>
            <div class="form-group ">
               <label for="abogado_particular">F 7.¿Cuenta con abogado particular?:</label>
               <select class="form-control" name="abogado_particular" id="abogado_particular">
                  <option value="">Abogado particular</option>
                  <option value="1" >Sí</option>
                  <option value="2" >No</option>
                  <option value="3">Se desconoce</option>
               </select>
            </div>
            <script>
               function muestroCualF1() {
                   var checkBox = document.getElementById("checkeadoF1");
                   var text = document.getElementById("cualF1");
                   if (checkBox.checked == true){
                       text.style.display = "block";
                   } else {
                      $('#organismos_previos_otro_cualF1').val('');
                      text.style.display = "none";
                   }
               }

            </script>
            <script>
               function muestroCualF2I() {
                   var checkBox = document.getElementById("checkeadoF2I");
                   var text = document.getElementById("cualF2I");
                   if (checkBox.checked == true){
                       text.style.display = "block";
                   } else {
                      $('#socioeconomica_otro_cualF2I').val('');
                      text.style.display = "none";
                   }
               }

            </script>
            <script>
               function muestrosocioeco(){
                   var checkBox = document.getElementById("checkeadosocioeco");
                   var text = document.getElementById("socioeco");
                   if (checkBox.checked == true){
                       text.style.display = "block";
                   } else {
                      document.getElementById("Salud").checked= false;
                      document.getElementById("Educacion").checked= false;
                      document.getElementById("Trabajo").checked= false;
                      document.getElementById("Vivienda").checked= false;
                      document.getElementById("Vincular").checked= false;
                      document.getElementById("checkeadoF2I").checked= false;
                      $('#socioeconomica_otro_cualF2I').val('');
                      var text2 = document.getElementById("cualF2I");
                      text.style.display = "none";
                       text2.style.display = "none";
                   }
               }

            </script>
            <script>
               function muestroCualF4() {
                   var checkBox = document.getElementById("checkeadoF4");
                   var text = document.getElementById("cualF4");
                   if (checkBox.checked == true){
                       text.style.display = "block";
                   } else {
                      $('#organismos_actual_otro_cualF4').val('');
                      text.style.display = "none";
                   }
               }

            </script>
            <script>
               function selectOnChangeF6(sel) {
                 if (sel.value=="3"){
                      divC = document.getElementById("cualF6");
                        divC2 = document.getElementById("conformidad");
                        divC3 = document.getElementById("fecha_designacion");
                      divC.style.display = "block";
                      divC2.style.display = "block";
                      divC3.style.display = "block";}
                      else{  $('#designado').val('');
                      $('#pratocinio_gratuito-designado').val('');
                      $('#fecha_designacion_del_letrado').val('');


                        divC.style.display = "none";
                      divC2.style.display = "none";}}


            </script>
            <script>
               function checkD2(checkbox)
               {
                   if (checkbox.checked)
                   {
                       $('#victima_fecha_hecho').val('1900-01-01');
                       document.getElementById('victima_fecha_hecho').setAttribute("readonly", "readonly");
                   }else
                       {
                           $('#victima_fecha_hecho').val('');
                           document.getElementById('victima_fecha_hecho').removeAttribute("readonly");
                       }
               }
            </script>
            <  <div class="botones" style="overflow:hidden;width:100%;margin-left:40%">
            <div class="btn-4" style="width:11%;float:left;margin-left:0.1%"><input type ='submit' style="width:100%;background-color:green" class="btn btn col-xs" value = 'Editar' ></button><br><br></div>

              </div>
            </form>

  <div class="btn-4" style="width:11%;float:left;margin-left:40%"><input type ='button' style="width:100%" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('deleteOrganismo/{{$institucion->id}}', 'width=800,height=600');"/></button><br><br></div>
         </form>
      </section>
   </body>
</html>
