<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje B: Caracterización de la victima y su contexto</title>
      <style>
      </style>
   </head>
   <header>
     <ul class="nav nav-tabs">
        <li class="nav-item"> <strong><a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarCaso">Eje A: Datos institucionales</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "  style="color:black;font-size:1.1em" href="#">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarConvivienteC">Eje C: Grupo Conviviente</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelitoD">Eje D: Caracterización de delito</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarImputadoE">Eje E: Datos del imputado</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarOrganismoF">Eje F: Atención del caso</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacionG">Eje G: Documentación</a> </li></strong>
     </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje B: Caracterización de la victima y su contexto</h1>
      <section class="container">
      <form class="" action="B/agregarVictima" method="post">
        {{csrf_field()}}
      <input type="hidden" name="_token" value="WsSjwRfaowBqFaOeDaMHgdvXFBiRpgdOYXGPxlXj">
      <div class="form-group ">
         <label for="">B 1. Nombre y apellido:</label>
         <input type="text" class="form-control" name="victima_nombre_y_apellido" id="victima_nombre_y_apellido" value="">
      </div>
      <div class="form-group ">
         <label for="">B 2. Género:</label>
         <select class="form-control" name="genero_id" onChange="selectOnChangeB2(this)">
            <option value="">Elegí género</option>
            <option value="1" >Mujer Cis</option>
            <option value="2" >Mujer Trans</option>
            <option value="3" >Varon Cis</option>
            <option value="4" >Varon Trans</option>
            <option value="5" >Otro</option>
         </select>
      </div>
      <script>
         function selectOnChangeB2(sel) {
             if (sel.value=="2" || sel.value=="3"){
                 $('#embarazorelevamiento_id').val('2');
                 document.getElementById('embarazorelevamiento_id').setAttribute("readonly", "readonly");
                 document.getElementById("embarazorelevamiento_id").disabled= true;



             }else{
                 $('#embarazorelevamiento_id').val('');
                  document.getElementById('embarazorelevamiento_id').removeAttribute("readonly");
                  document.getElementById("embarazorelevamiento_id").disabled= false;


             }
         }
      </script>
      <div class="form-group ">
         <label for="">B 3. Fecha de nacimiento: </label>
         <input type="date" class="form-control" id="victima_fecha_nacimiento" name="victima_fecha_nacimiento" value="" >
         <label for="bloqueo3" class="form-check-label">Se desconoce</label>
         <input type="checkbox" id="bloqueo3" name="victima_fecha_nacimiento_desconoce" value="Se desconoce" onchange="checkB3(this)">
      </div>
      <script>
         function checkB3(checkbox)
         {
             if (checkbox.checked)
             {
                 $('#victima_fecha_nacimiento').val('1900-01-01');
                 document.getElementById('victima_fecha_nacimiento').setAttribute("readonly", "readonly");
             }else
                 {
                     $('#victima_fecha_nacimiento').val('');
                     document.getElementById('victima_fecha_nacimiento').removeAttribute("readonly");
                 }
         }
      </script>
      <div class="form-group ">
         <label for="victima_edad">B 4. Edad:</label>
         <input name="victima_edad" value="" id="victima_edad" class="form-control" type="text" onchange="mostrarValorB4(this.value);">
         <label class="form-check-label" for="victima_edad_desconoce">Se desconoce</label>
         <input name="victima_edad_desconoce" value="Se desconoce" id="victima_edad_desconoce" placeholder="" type="checkbox" onchange="checkB4(this)">
      </div>
      <!-- si clickeo el check de se desconoce automaticamente en la franja etaria ingresa el valor se desconoce y se bloquea el input text para asignar la edad -->
      <script type="text/javascript">
         function checkB4(checkbox) {
            if (checkbox.checked)
                  {
                      $('#victima_edad').val('Se desconoce');
                      $('#franjaetaria_id').val('7');
                      document.getElementById('victima_edad').setAttribute("readonly", "readonly");
             }
             else{
                      $('#victima_edad').val('');
                      $('#franjaetaria_id').val('');
                      document.getElementById('victima_edad').removeAttribute("readonly");
             }}
      </script>
      <!-- FIN UNDECIMA PREGUNTA -->
      <!-- DUODECIMA PREGUNTA -->
      <div class="form-group ">
         <label for="">B 5. Franja Etaria</label>
         <select name="franjaetaria_id" id="franjaetaria_id" class="form-control" value="">
            <option value="">Franja Etaria</option>
            <option value="1" >0 a 11 años</option>
            <option value="2" >12 a 18 años</option>
            <option value="3" >19 a 30 años</option>
            <option value="4" >31 a 50 años</option>
            <option value="5" >51 a 65 años</option>
            <option value="6" >65 años o más</option>
            <option value="7" >Se desconoce</option>
            <!-- no hago un array en este caso porque toma los valores una funcion de javascript -->
         </select>
      </div>
      <!-- de acuerdo al valor que se seleccione le asigno una franja etaria  -->
      <script type="text/javascript">
         var mostrarValorB4 = function(x){
         if(x<12){
             document.getElementById('franjaetaria_id').value=1;
         }
         if(x>11){if(x<19){

         	document.getElementById('franjaetaria_id').value=2;}
         }

         if(x>18){if(x<31){
         	document.getElementById('franjaetaria_id').value=3;}
         }

         if(x>30){if(x<51){
         	document.getElementById('franjaetaria_id').value=4;}
         }

         if(x>50){if(x<66){
         	document.getElementById('franjaetaria_id').value=5;}
         }

         if(x>65){
         	document.getElementById('franjaetaria_id').value=6;}
         }
      </script>
      <div class="form-group ">
         <label for="">B 6. ¿Cuenta con alguna documentación que permita acreditar su identidad?:</label>
         <select class="form-control" name="tienedoc_id" onChange="selectOnChangeB6(this)">
            <option value="">Tiene documentación?</option>
            <option value="1" >Posee</option>
            <option value="3" >No posee</option>
            <option value="5" >En tramite</option>
            <option value="6" >Se desconoce</option>
         </select>
      </div>
      <script>
         function selectOnChangeB6(sel)
         {
             if (sel.value == "3"){
                 divA = document.getElementById("tipodoc");
                 divB = document.getElementById("nrodoc");
                 divA.style.display="none";
                 divB.style.display="none";
                 $('#tipodocumento_id').val('7');
                 $('#victima_documento').val('No posee');
             }else if(sel.value == "6"){
                 divA = document.getElementById("tipodoc");
                 divB = document.getElementById("nrodoc");
                 divA.style.display="none";
                 divB.style.display="none";
                 $('#tipodocumento_id').val('8');
                 $('#victima_documento').val('Se desconoce');
             }else{
                 $('#tipodocumento_id').val('');
                 $('#victima_documento').val('');
                 divA.style.display="";
                 divB.style.display="";

             }
         }
      </script>
      <div class="form-group " id="tipodoc">
         <label for="">B 7. Tipo de documentación:</label>
         <select class="form-control" id="tipodocumento_id" name="tipodocumento_id" onChange="selectOnChangeB7(this)">
            <option value="">Seleccioná el tipo de documento</option>
            <option value="1" >D.N.I.</option>
            <option value="2" >Documento Extranjero</option>
            <option value="3" >Libreta Cívica</option>
            <option value="4" >Libreta de Enrolamiento</option>
            <option value="5" >Pasaporte</option>
            <option value="6" >Residencia Precaria</option>
            <option value="7" >Se Desconoce</option>
            <option value="8" >No posee</option>
            <option value="9" >Otro</option>
         </select>
         <div id="cual_b14" style="display: none">
            <label for="">B 7.I Estado de la residencia precaria</label>
            <select class="form-control" id="residenciaprecaria_id" name="residenciaprecaria_id" class="form-control">
               <option value="">Estado?</option>
               <option value="1">Vigente</option>
               <option value="2">Vencida</option>
               <option value="3">Se desconoce</option>
            </select>
         </div>
         <div id="cual_b2" style="display: none">
            <label for="">Cual?</label>
            <div class="">
               <input name="victima_tipo_documento_otro"  id="victima_tipo_documento_otro" class="form-control" type="text" onclick="cual_b5()">
            </div>
         </div>
      </div>
      <script>
         function selectOnChangeB7(sel) {
                            if (sel.value=="6"){
                                divC = document.getElementById("cual_b14");
                                divC.style.display = "";
                            }else{
                                divC = document.getElementById("cual_b14");
                                $('#residenciaprecaria_id').val('');
                                divC.style.display="none";
                            }

         	if (sel.value=="9"){
         		divC = document.getElementById("cual_b2");
         		divC.style.display = "";
         	}else{
         		divC = document.getElementById("cual_b2");
         		$('#victima_tipo_documento_otro').val('');
         		divC.style.display="none";
         	}
         }

      </script>
      <div class="form-group " id="nrodoc">
         <label for="">B 8. Nro Documento:</label>
         <input type="text" class="form-control" name="victima_documento" placeholder="" id="victima_documento" value="">
         <label for="bloqueo3" class="form-check-label">Se desconoce</label>
         <input type="checkbox" id="bloqueo3" name="victima_documento_se_desconoce" value="Se desconoce" onchange="check3(this)">
      </div>
      <script>
         function check3(checkbox)
         {
             if (checkbox.checked)
             {
                 $('#victima_documento').val('Se desconoce');
                 document.getElementById('victima_documento').setAttribute("readonly", "readonly");
             }else
                 {
                     $('#victima_documento').val('');
                     document.getElementById('victima_documento').removeAttribute("readonly");
                 }
         }
      </script>
      <div class="form-group ">
         <label for="">B 9. Máximo nivel educativo alcanzado:</label>
         <select class="form-control" name="niveleducativo_id">
            <option value="">Seleccioná el nivel de educación</option>
            <option value="1" >Sin instrucción formal</option>
            <option value="2" >Primario incompleto</option>
            <option value="3" >Primario completo</option>
            <option value="4" >Secundario incompleto</option>
            <option value="5" >Secundario completo</option>
            <option value="6" >Terciario-Universitario incompleto</option>
            <option value="7" >Terciario-Universitario completo</option>
            <option value="8" >Se desconoce</option>
         </select>
      </div>
      <div class="form-group ">
         <label for="modalidad_id">B 10.Condiciones de trabajo:</label>
         <select class="form-control" name="condiciones_de_trabajo" id="condiciones_de_trabajo" >
            <option value="" >Selecciona las condición de trabajo</option>
            <option value="1" >Desocupado(a)</option>
            <option value="2" >Empleo informal</option>
            <option value="3" >Empleo formal</option>
            <option value="4" >Población Inactiva (jubilados, menores de edad, pensionados, etc.)</option>
            <option value="5" >Se desconoce</option>
         </select>
      </div>
      <div class="form-group ">
         <label for="modalidad_id">B 11.¿Tiene necesidades socioeconómicas insatisfechas?:</label>
         <select class="form-control" name="necesidades_insatisfechas" id="necesidades_insatisfechas" onChange="selectOnChangeB11(this)">
            <option value="" >¿Tiene necesidades socioeconómicas insatisfechas?</option>
            <option value="1" >Sí</option>
            <option value="2" >No</option>
            <option value="3" >Se desconoce</option>
         </select>
      </div>
      <div class="form-group " id="necesidades_insatisfechas_si" style="display:none">
         <label>B 11 I. Necesidades socioeconómicas insatisfechas: </label><br>
         <label class="" >En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
         <div>
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Vivienda</label>
            <input type="checkbox" class="form-check-inline" value="1" id="vivienda" name="necesidades_id[]">

            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Alimentos</label>
            <input type="checkbox" class="form-check-inline" value="2" id="alimentos" name="necesidades_id[]">

            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Capacidad Económica</label>
            <input type="checkbox" class="form-check-inline" value="3" id="economica" name="necesidades_id[]">

            <label for=""  class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Salud</label>
            <input type="checkbox" class="form-check-inline" value="4"  id="salud" name="necesidades_id[]">

            <label for=""  class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Vestimenta</label>
            <input type="checkbox" class="form-check-inline" value="5"  id="vestimenta" name="necesidades_id[]">

            <label for=""  class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Educación</label>
            <input type="checkbox" class="form-check-inline" value="6"  id="educacion" name="necesidades_id[]">

            <label for=""  class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Trabajo</label>
            <input type="checkbox" class="form-check-inline" value="7"  id="trabajo" name="necesidades_id[]">

            <label for="" class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Otro</label>
            <input type="checkbox" class="form-check-inline" id="checkeadoB11"  onclick="muestroCualB11()" name="necesidades_id[]" value="8">
         </div>
         <script>
            function selectOnChangeB11(sel) {
                           if (sel.value=="1"){
                               divC = document.getElementById("necesidades_insatisfechas_si");
                               divC.style.display = "";}


                               if (sel.value=="2"||sel.value=="3"){
                                 divC = document.getElementById("necesidades_insatisfechas_si");
                                 divC.style.display = "none";



                               document.getElementById("alimentos").checked= false;
                               document.getElementById("economica").checked= false;
                               document.getElementById("salud").checked= false;
                               document.getElementById("vestimenta").checked= false;
                               document.getElementById("educacion").checked= false;
                               document.getElementById("trabajo").checked= false;
                               document.getElementById("checkeadoB11").checked= false;
                               divC = document.getElementById("cualB11");
                               $('#necesidades_insatisfechas_otro').val('');
                               divC.style.display="none";

                           }


            }

         </script>
         <div id="cualB11" style="display:none">
            <label for="">Cual?</label>
            <input type="text" class="form-control" name="victima_limitacion_otra" value="" id="necesidades_insatisfechas_otro">
         </div>
      </div>

      <script>
         function muestroCualB11() {
             var checkBox = document.getElementById("checkeadoB11");
             var text = document.getElementById("cualB11");
             if (checkBox.checked == true){
                 text.style.display = "block";

             } else {
               	$('#necesidades_insatisfechas_otro').val('');
                text.style.display = "none";
             }
         }


      </script>
      <div class="form-group ">
         <label for="modalidad_id">B 12.¿Percibe algún tipo de programa o subsidio social?:</label>
         <select class="form-control" name="programa_subsidio" id="programa_subsidio" onChange="selectOnChangeB12(this)">
            <option value="" >¿Percibe algún tipo de programa o subsidio social?</option>
            <option value="1" >Sí</option>
            <option value="2" >No</option>
            <option value="3" >Se desconoce</option>
         </select>
      </div>
      <div class="form-group " id="programa_subsidio_si" style="display:none">
         <label>B 12 I. ¿Cuál?  </label><br>
         <label class="" >En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
         <div>
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Jubilación</label>
            <input type="checkbox" class="form-check-inline" value="1" id="jubilacion" name="programa_id[]">
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Asignación Universal por Hijo</label>
            <input type="checkbox" class="form-check-inline" value="2" id="asignacion" name="programa_id[]">
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">PROGRESAR</label>
            <input type="checkbox" class="form-check-inline" value="3" id="progresar" name="programa_id[]">
            <label for=""  class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Pensión</label>
            <input type="checkbox" class="form-check-inline" value="4"  id="pension" name="programa_id[]">
            <label for="" class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Otro</label>
            <input type="checkbox" class="form-check-inline" id="checkeadoB12"  onclick="muestroCualB12()" name="programa_id[]" value="5">
         </div>
         <script>
            function selectOnChangeB12(sel) {
                    if (sel.value=="1"){
                        divC = document.getElementById("programa_subsidio_si");
                        divC.style.display = "";}


                        if (sel.value=="2"||sel.value=="3"){
                          divC = document.getElementById("programa_subsidio_si");
                          divC.style.display = "none";


                        document.getElementById("jubilacion").checked= false;
                        document.getElementById("asignacion").checked= false;
                        document.getElementById("progresar").checked= false;
                        document.getElementById("pension").checked= false;
                        document.getElementById("checkeadoB12").checked= false;
                        divC = document.getElementById("cualB12");
                        $('#programa_subsidio_otro').val('');
                        divC.style.display="none";

                    }


            }
         </script>
         <div id="cualB12" style="display:none">
            <label for="">Cual?</label>
            <input type="text" class="form-control" name="programa_subsidio_otro" value="" id="programa_subsidio_otro">
         </div>
      </div>
      <!-- VER ESTA MANERA TERMINA ACA -->
      <script>
         function muestroCualB12() {
         var checkBox = document.getElementById("checkeadoB12");
         var text = document.getElementById("cualB12");
         if (checkBox.checked == true){
         text.style.display = "block";

         } else {
         $('#programa_subsidio_otro').val('');
         text.style.display = "none";
         }
         }


      </script>
      <div class="form-group"id="embarazo">
         <label for="">B 13. Embarazo al inicio de la asistencia:</label>
         <select class="form-control" id="embarazorelevamiento_id" name="embarazorelevamiento_id">
            <option value="">Está embarazada?</option>
            <option value="1" >Si</option>
            <option value="2" >No</option>
         </select>
      </div>
      <div class="form-group ">
         <label for="">B 14. ¿Presenta algún tipo de discapacidad?</label><br>
         <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
         <div class="">
            <label for="Físico/Motriz" class=" form-check-inline form-check-label"> </label>Físico/Motriz</label>
            <input type="checkbox" value="1" class="form-check-inline" id="Físico/Motriz" name="discapacidad_id[]">
            <label for="Intelectual/Adaptativo" class=" form-check-inline form-check-label"> </label>Intelectual/Adaptativo</label>
            <input type="checkbox" value="2" class="form-check-inline" id="Intelectual/Adaptativo" name="discapacidad_id[]">
            <label for="Psíquica" class=" form-check-inline form-check-label"> </label>Psíquica</label>
            <input type="checkbox" value="3" class="form-check-inline" id="Psíquica" name="discapacidad_id[]">
            <label for="Sensorial" class=" form-check-inline form-check-label"> </label>Sensorial</label>
            <input type="checkbox" value="4" class="form-check-inline" id="Sensorial" name="discapacidad_id[]">
            <label for="No" style="margin-left: 15px;" class="form-check-label">No</label>
            <input type="checkbox" value="5" class="form-check-inline" name="discapacidad_id[]" id="No" onchange="checkB14(this)">
            <label for="Se desconoce" style="margin-left: 15px;" class="form-check-label">Se desconoce</label>
            <input type="checkbox" value="6" class="form-check-inline" name="discapacidad_id[]" id="Se desconoce" onchange="checkB14bis(this)">
         </div>
      </div>
      <script>
         function checkB14(checkbox)
         {

             if (checkbox.checked)
                 {   document.getElementById("Físico/Motriz").checked= false;
                     document.getElementById("Físico/Motriz").disabled = true;
                     document.getElementById("Intelectual/Adaptativo").checked= false;
                     document.getElementById("Intelectual/Adaptativo").disabled = true;
                     document.getElementById("Psíquica").checked= false;
                     document.getElementById("Psíquica").disabled = true;
                     document.getElementById("Sensorial").checked= false;
                     document.getElementById("Sensorial").disabled = true;
                     document.getElementById("Se desconoce").checked= false;
                     document.getElementById("Se desconoce").disabled = true;
                 }
                     else{
                         document.getElementById('Físico/Motriz').disabled=false;
                         document.getElementById('Intelectual/Adaptativo').disabled=false;
                         document.getElementById('Psíquica').disabled=false;
                         document.getElementById('Sensorial').disabled=false;
                         document.getElementById('Se desconoce').disabled=false;
                     }
         }
         function checkB14bis(checkbox){
         if (checkbox.checked)
             {   document.getElementById("Físico/Motriz").checked= false;
                 document.getElementById("Físico/Motriz").disabled = true;
                 document.getElementById("Intelectual/Adaptativo").checked= false;
                 document.getElementById("Intelectual/Adaptativo").disabled = true;
                 document.getElementById("Psíquica").checked= false;
                 document.getElementById("Psíquica").disabled = true;
                 document.getElementById("Sensorial").checked= false;
                 document.getElementById("Sensorial").disabled = true;
                 document.getElementById("No").checked= false;
                 document.getElementById("No").disabled = true;
             }
                 else{
                     document.getElementById('Físico/Motriz').disabled=false;
                     document.getElementById('Intelectual/Adaptativo').disabled=false;
                     document.getElementById('Psíquica').disabled=false;
                     document.getElementById('Sensorial').disabled=false;
                     document.getElementById('No').disabled=false;
                 }
         }
      </script>
      <div class="form-group ">
         <label class="">B 15. ¿Presenta lesiones físicas visibles? </label>
         <select class="form-control" id="tienelesion_id" name="tienelesion_id" onChange="selectOnChangeB15(this)">
            <option value="">Presenta lesiones físicas visibles:</option>
            <option value="1" >Si</option>
            <option value="2" >No</option>
            <option value="3" >Se desconoce</option>
         </select>
         <div class="" id="cualB15" style="display: none;">
            <label class="">Tipo de lesión:</label>
            <div class="">
               <input name="victima_lesion" placeholder="" id="victima_lesion" class="form-control" type="text">
            </div>
         </div>
      </div>
      <script>
         function selectOnChangeB15(sel) {
                  if (sel.value=="1"){
                      divC = document.getElementById("cualB15");
                      divC.style.display = "";
                  }else{
                      divC = document.getElementById("cualB15");
                      $('#victima_lesion').val('');
                      divC.style.display="none";
                  }}

      </script>
      <div class="form-group ">
         <label class="">B 16. ¿Tiene enfermedades crónicas?</label>
         <select class="form-control" id="enfermedadcronica_id" name="enfermedadcronica_id" onChange="selectOnChange16(this)">
            <option value="">Posee enfermedades?</option>
            <option value="1" >Si</option>
            <option value="2" >No</option>
            <option value="3" >Se desconoce</option>
         </select>
         <div class="" id="victima_tipo_enfermedad_cronica" style="display: none;">
            <label class="">B 16I. Tipo de enfermedad crónica:</label>
            <div class="">
               <input name="victima_tipo_enfermedad_cronica" placeholder="" id="victima_enfermedad_cronica" class="form-control" type="text">
            </div>
         </div>
      </div>
      <script>
         function selectOnChange16(sel) {
           if (sel.value=="1"){
                divC = document.getElementById("victima_tipo_enfermedad_cronica");
                divC.style.display = "";}

                 if (sel.value=="2"){
                      divC = document.getElementById("victima_tipo_enfermedad_cronica");
                      $('#victima_enfermedad_cronica').val('');
                      divC.style.display = "none";}
                      if (sel.value=="3"){
                           divC = document.getElementById("victima_tipo_enfermedad_cronica");
                           $('#victima_enfermedad_cronica').val('');
                           divC.style.display = "none";}


         }
      </script>
      <div class="form-group ">
         <label>B 17. ¿Presenta algún tipo de limitación para comunicarse? </label><br>
         <label class="" >En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
         <div>
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Analfabetismo</label>
            <input type="checkbox" class="form-check-inline" value="1" id="Analfabetismo" name="limitacion_id[]">
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Discapacidad</label>
            <input type="checkbox" class="form-check-inline" value="2" id="Discapacidad" name="limitacion_id[]">
            <label for="" class="form-check-inline form-check-label" style="margin-left: 15px; margin-right: 0px;">Idioma</label>
            <input type="checkbox" class="form-check-inline" value="3" id="Idioma" name="limitacion_id[]">
            <label for=""  class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">No</label>
            <input type="checkbox" class="form-check-inline" value="4" name="limitacion_id[]" onchange="checkB17(this)">
            <label for="" class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Otro</label>
            <input type="checkbox" class="form-check-inline" id="checkeadoB17"  onclick="muestroCualB17()" name="limitacion_id[]" value="5">
         </div>
         <!-- si checkeo el checkbox otro tomo el id checkeado y uso la funcion muestroCual -->
         <!-- mostrando lo que contiene el id cual -->
         <div id="cualB17" style="display:none">
            <label for="">Cual?</label>
            <input type="text" class="form-control" name="victima_limitacion_otra"  id="victima_limitacion_otra" value="">
         </div>
      </div>
      <!-- VER ESTA MANERA TERMINA ACA -->
      <script>
         function muestroCualB17() {
             var checkBox = document.getElementById("checkeadoB17");
             var text = document.getElementById("cualB17");
             if (checkBox.checked == true){
                 text.style.display = "block";
             } else {
                   $('#victima_limitacion_otra').val('');
                text.style.display = "none";
             }
         }

               function checkB17(checkbox)
               {

                   if (checkbox.checked)
                       {   document.getElementById("Analfabetismo").checked = false;
                           document.getElementById("Analfabetismo").disabled = true;
                           document.getElementById("Discapacidad").checked=false;
                           document.getElementById("Discapacidad").disabled = true;
                           document.getElementById("Idioma").checked=false;
                           document.getElementById("Idioma").disabled = true;
                           document.getElementById("checkeadoB17").checked=false;
                           document.getElementById("checkeadoB17").disabled = true;
                           var text = document.getElementById("cualB17");
                           $('#victima_limitacion_otra').val('');
                          text.style.display = "none";
                       }
                       else{
                               document.getElementById("Analfabetismo").disabled = false;
                               document.getElementById("Discapacidad").disabled = false;
                               document.getElementById("Idioma").disabled = false;
                               document.getElementById("checkeadoB17").disabled = false;


                       }

               }
      </script>
   </body>
</html>
