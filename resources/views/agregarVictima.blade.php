F<?php

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

    <div class="form-group" style="margin-top:-1%;margin-left:38%">
      <ul>
      @foreach($victims as $victim)
        @if($victim->idCaso==$ultimoid)
          <li>
          <a href="detallevictima/{{$victim->id}}">
            {{$victim->victima_nombre_y_apellido}}</a>
          </li>
        @endif
      @endforeach
      </ul>
    </div>

    <section class="container">
    <form class="" action="/agregarVictima" method="post">
        {{csrf_field()}}
    <input type="hidden" name="idCaso" value="{{session("idCaso")}}">

<!B1 Victima Nombre y Apellido>

    <div class="form-group"{{ $errors->has('victima_nombre_y_apellido') ? 'has-error' : ''}}>
    <input type="hidden" name="idCaso" value="{{$ultimoid}}">
    <label for="">B 1. Nombre y apellido:</label>
    <input type="text" class="form-control" name="victima_nombre_y_apellido" id="victima_nombre_y_apellido" value="{{old('victima_nombre_y_apellido')}}">
    {!! $errors->first('victima_nombre_y_apellido', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

<!B2 Género>

    <div class="form-group"{{ $errors->has('genero') ? 'has-error' : ''}}>
    <label for="">B 2. Género:</label>
    <select class="form-control" name="genero" onChange="selectOnChangeB2(this)">
        <option value="">Elegí género</option>
        @if((old("genero")==1))
        <option value="1" selected>Mujer Cis</option>
        @else
        <option value="1">Mujer Cis</option>
        @endif

        @if ((old("genero")==2))
        <option value="2" selected>Mujer Trans</option>
        @else
        <option value="2" >Mujer Trans</option>
        @endif

        @if ((old("genero")==3))
        <option value="3" selected>Varon Cis</option>
        @else
        <option value="3" >Varon Cis</option>
        @endif

        @if ((old("genero")==4))
        <option value="4" selected>Varon Trans</option>
        @else
        <option value="4" >Varon Trans</option>
        @endif

        @if ((old("genero")==5))
        <option value="5" selected>Otro</option>
        @else
        <option value="5" >Otro</option>
        @endif
    </select>
    {!! $errors->first('genero', '<p class="help-block" style="color:red";>:message</p>') !!}
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

<!B3 Fecha de nacimiento>

    <div class="form-group"{{ $errors->has('victima_fecha_nacimiento') ? 'has-error' : ''}}>
    <label for="">B 3. Fecha de nacimiento: </label>
    <input type="date" class="form-control" id="victima_fecha_nacimiento" name="victima_fecha_nacimiento" value="{{old('victima_fecha_nacimiento')}}" >
    <label for="bloqueo3" class="form-check-label">Se desconoce</label>
    <input type="checkbox" id="bloqueo3" name="victima_fecha_nacimiento_desconoce" value="Se desconoce" onchange="checkB3(this)">
    {!! $errors->first('victima_fecha_nacimiento', '<p class="help-block" style="color:red";>:message</p>') !!}
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

<!B4 Edad>

      <div class="form-group"{{ $errors->has('victima_edad') ? 'has-error' : ''}}>
      <label for="victima_edad">B 4. Edad:</label>
      <input name="victima_edad" value="{{old('victima_edad')}}"  id="victima_edad" class="form-control" type="text" onchange="mostrarValorB4(this.value);">
      <label class="form-check-label" for="victima_edad_desconoce">Se desconoce</label>
      <input name="victima_edad_desconoce" value="Se desconoce" id="victima_edad_desconoce" placeholder="" type="checkbox" onchange="checkB4(this)">
      {!! $errors->first('victima_edad', '<p class="help-block" style="color:red";>:message</p>') !!}
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

<!B5 Franja Etaria>

      <div class="form-group"{{ $errors->has('franjaetaria') ? 'has-error' : ''}}>
         <label for="">B 5. Franja Etaria</label>
         <select name="franjaetaria" id="franjaetaria_id" class="form-control" value="">
            <option value="">Franja Etaria</option>
            @if(old("franjaetaria") == 1) <option value="1" selected>0 a 11 años</option> @else <option value="1">0 a 11 años</option> @endif
            @if(old("franjaetaria") == 2) <option value="2" selected>12 a 18 años</option> @else <option value="2" >12 a 18 años</option> @endif
            @if(old("franjaetaria") == 3) <option value="3" selected>19 a 30 años</option> @else <option value="3" >19 a 30 años</option> @endif
            @if(old("franjaetaria") == 4) <option value="4" selected>31 a 50 años</option> @else <option value="4" >31 a 50 años</option> @endif
            @if(old("franjaetaria") == 5) <option value="5" selected>51 a 65 años</option> @else <option value="5" >51 a 65 años</option> @endif
            @if(old("franjaetaria") == 6) <option value="6" selected>65 años o más</option>@else <option value="6" >65 años o más</option> @endif
            @if(old("franjaetaria") == 7) <option value="7" selected>Se desconoce</option> @else <option value="7" >Se desconoce</option> @endif
            <!-- no hago un array en este caso porque toma los valores una funcion de javascript -->
         </select>
         {!! $errors->first('franjaetaria', '<p class="help-block" style="color:red";>:message</p>') !!}
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

<!B6 Documentación>

    <div class="form-group"{{ $errors->has('tienedoc') ? 'has-error' : ''}}>
    <label for="">B 6. ¿Cuenta con alguna documentación que permita acreditar su identidad?:</label>
    <select class="form-control" name="tienedoc" onChange="selectOnChangeB6(this)">
            <option value="">Tiene documentación?</option>
            <option value="1" >Posee</option>
            <option value="3" >No posee</option>
            <option value="5" >En tramite</option>
            <option value="6" >Se desconoce</option>
    </select>
    {!! $errors->first('tienedoc', '<p class="help-block" style="color:red";>:message</p>') !!}
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

<!B7 Tipo documentación>

    <div class="form-group " id="tipodoc" {{ $errors->has('tipodocumento') ? 'has-error' : ''}}>
    <label for="">B 7. Tipo de documentación:</label>
    <select class="form-control" id="tipodocumento_id" name="tipodocumento" onChange="selectOnChangeB7(this)">
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
    {!! $errors->first('tipodocumento', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

    <div id="cual_b14" style="display: none">
    <label for="">B 7.I Estado de la residencia precaria</label>
    <select class="form-control" id="residenciaprecaria_id" name="residenciaprecaria" class="form-control">
            <option value="">Estado?</option>
            <option value="1">Vigente</option>
            <option value="2">Vencida</option>
            <option value="3">Se desconoce</option>
    </select>
    </div>

    <div id="cual_b2" style="display: none">
    <label for="">Cuál?</label>
    <input name="tipo_documento_otro"  id="victima_tipo_documento_otro" class="form-control" type="text" onclick="cual_b5()">
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

<!B8 Nro documento>

    <div class="form-group " id="nrodoc" {{ $errors->has('victima_numero_documento') ? 'has-error' : ''}}>
    <label for="">B 8. Nro Documento:</label>
    <input type="text" class="form-control" name="victima_numero_documento" placeholder="" id="victima_documento" value="{{old("victima_numero_documento")}}">
    <label for="bloqueo3" class="form-check-label">Se desconoce</label>
    <input type="checkbox" id="bloqueo3" name="victima_documento_se_desconoce" value="Se desconoce" onchange="check3(this)">
    {!! $errors->first('victima_numero_documento', '<p class="help-block" style="color:red";>:message</p>') !!}
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

<!B9 Nivel educativo>

    <div class="form-group"{{ $errors->has('niveleducativo') ? 'has-error' : ''}}>
    <label for="">B 9. Máximo nivel educativo alcanzado:</label>
    <select class="form-control" name="niveleducativo">
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
    {!! $errors->first('niveleducativo', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

<!B10 Condiciones de trabajo>

    <div class="form-group"{{ $errors->has('condiciones_de_trabajo') ? 'has-error' : ''}}>
    <label for="modalidad_id">B 10.Condiciones de trabajo:</label>
    <select class="form-control" name="condiciones_de_trabajo" id="condiciones_de_trabajo" >
          <option value="" >Selecciona las condición de trabajo</option>
          <option value="1" >Desocupado(a)</option>
          <option value="2" >Empleo informal</option>
          <option value="3" >Empleo formal</option>
          <option value="4" >Población Inactiva (jubilados, menores de edad, pensionados, etc.)</option>
          <option value="5" >Se desconoce</option>
    </select>
    {!! $errors->first('condiciones_de_trabajo', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

<!B11 Necesidades insatisfechas>

    <div class="form-group"{{ $errors->has('necesidades_socioeconomicas_insatisfechas') ? 'has-error' : ''}}>
    <label for="modalidad_id">B 11.¿Tiene necesidades socioeconómicas insatisfechas?:</label>
    <select class="form-control" name="necesidades_socioeconomicas_insatisfechas" id="necesidades_insatisfechas" onChange="selectOnChangeB11(this)">
          <option value="" >¿Tiene necesidades socioeconómicas insatisfechas?</option>
          <option value="1" >Sí</option>
          <option value="2" >No</option>
          <option value="3" >Se desconoce</option>
    </select>
    {!! $errors->first('necesidades_socioeconomicas_insatisfechas', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

    <div class="form-group" id="necesidades_insatisfechas_si"  name="necesidades_socioeconomicas_insatisfechas_si" style="display:none"
    {{ $errors->has('necesidades') ? 'has-error' : ''}}>
    <label>B 11 I. Necesidades socioeconómicas insatisfechas: </label><br>
    <label class="" >En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
          @foreach ($necesidades as $necesidad)
            <label class="form-check-inline form-check-label">
            <input type="checkbox" value="{{ $necesidad->id }}" class="form-check-inline" name="necesidades[]">
            {{ $necesidad->nombre }}
            </label><br>
          @endforeach
    {!! $errors->first('necesidades', '<p class="help-block" style="color:red";>:message</p>') !!}
    <input type="checkbox" class="form-check-inline" id="checkeadoB11"  onclick="muestroCualB11()" name="necesidades" value="8">
    <label for="" class="form-check-label" style="margin-left: -3px; padding-right: 0px; ">Otra</label><br>
    </div>

    <div id="cualB11" style="display:none">
    <label for="">Cual?</label>
    <input type="text" class="form-control" name="necesidades_socioeconomicas_insatisfechas_otro" value="{{old("necesidades_socioeconomicas_insatisfechas_otro")}}" id="necesidades_insatisfechas_otro">
    </div><br>

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

<!B12 Programa o subsidio social>

    <div class="form-group"{{ $errors->has('programa_subsidio') ? 'has-error' : ''}}>
    <label for="modalidad_id">B 12.¿Percibe algún tipo de programa o subsidio social?:</label>
    <select class="form-control" name="programa_subsidio" id="programa_subsidio" onChange="selectOnChangeB12(this)">
          <option value="" >¿Percibe algún tipo de programa o subsidio social?</option>
          <option value="1" >Sí</option>
          <option value="2" >No</option>
          <option value="3" >Se desconoce</option>
    </select>
    {!! $errors->first('programa_subsidio', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

    <div class="form-group" {{ $errors->has('programa[]') ? 'has-error' : ''}} id="programa_subsidio_si" style="display:none">
    <label>B 12 I. ¿Cuál?  </label><br>
    <label class="" >En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
        @foreach ($programas as $programa)
          <label class="form-check-inline form-check-label">
          <input type="checkbox" value="{{ $programa->id }}" class="form-check-inline" name="programa[]">
              {{ $programa->nombre }}
          </label><br>
        @endforeach
    {!! $errors->first('programa[]', '<p class="help-block" style="color:red";>:message</p>') !!}
    </div>

    <input type="checkbox" class="form-check-inline" id="checkeadoB12"  onclick="muestroCualB12()" name="" value="5">
    <label for="" class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Otro</label>

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
            <input type="text" class="form-control" name="programa_subsidio_otro" value="{{old("programa_subsidio_otro")}}" id="programa_subsidio_otro">
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

      <div class="form-group"id="embarazo" {{ $errors->has('embarazorelevamiento') ? 'has-error' : ''}}>

         <label for="">B 13. Embarazo al inicio de la asistencia:</label>
         <select class="form-control" id="embarazorelevamiento_id" name="embarazorelevamiento">
            <option value="">Está embarazada?</option>
            <option value="1" >Si</option>
            <option value="2" >No</option>
         </select>
         {!! $errors->first('embarazorelevamiento', '<p class="help-block" style="color:red";>:message</p>') !!}
      </div>

      <div class="form-group"{{ $errors->has('discapacidad[]') ? 'has-error' : ''}}>

         <label for="">B 14. ¿Presenta algún tipo de discapacidad?</label><br>
         <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>

           @foreach ($discapacidades as $discapacidad)
             <label class="form-check-inline form-check-label">
               <input type="checkbox" value="{{ $discapacidad->id }}" class="form-check-inline" name="discapacidad[]">
               {{ $discapacidad->nombre }}
             </label><br>
           @endforeach

            <input type="checkbox" value="6" class="form-check-inline" name="discapacidad[]" id="Se desconoce" onchange="checkB14bis(this)">

             {!! $errors->first('discapacidad[]', '<p class="help-block" style="color:red";>:message</p>') !!}


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

      <div class="form-group"{{ $errors->has('tienelesion') ? 'has-error' : ''}}>

         <label class="">B 15. ¿Presenta lesiones físicas visibles? </label>
         <select class="form-control" id="tienelesion" name="tienelesion" onChange="selectOnChangeB15(this)">
            <option value="">Presenta lesiones físicas visibles:</option>
            <option value="1" >Si</option>
            <option value="2" >No</option>
            <option value="3" >Se desconoce</option>
         </select>
         {!! $errors->first('tienelesion', '<p class="help-block" style="color:red";>:message</p>') !!}

         <div class="" id="cualB15" style="display: none;">
            <label class="">Tipo de lesión:</label>
            <div class="">
               <input name="tipo_lesion" placeholder="" id="victima_lesion" class="form-control" type="text" value="{{old("tipo_lesion")}}">
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

      <div class="form-group"{{ $errors->has('enfermedadcronica') ? 'has-error' : ''}}>

         <label class="">B 16. ¿Tiene enfermedades crónicas?</label>
         <select class="form-control" id="enfermedadcronica" name="enfermedadcronica" onChange="selectOnChange16(this)">
            <option value="">Posee enfermedades?</option>
            <option value="1" >Si</option>
            <option value="2" >No</option>
            <option value="3" >Se desconoce</option>
         </select>
          {!! $errors->first('enfermedadcronica', '<p class="help-block" style="color:red";>:message</p>') !!}

         <div class="" id="victima_tipo_enfermedad_cronica" style="display: none;" {{ $errors->has('tipo_enfermedad_cronica') ? 'has-error' : ''}}>
            <label class="">B 16I. Tipo de enfermedad crónica:</label>
            <div class="">
               <input name="tipo_enfermedad_cronica" placeholder="" id="victima_enfermedad_cronica" class="form-control" type="text" value="{{old("tipo_enfermedad_cronica")}}">

                {!! $errors->first('tipo_enfermedad_cronica', '<p class="help-block" style="color:red";>:message</p>') !!}
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
      <div class="form-group" {{ $errors->has('limitacion[]') ? 'has-error' : ''}}>
         <label>B 17. ¿Presenta algún tipo de limitación para comunicarse? </label><br>
         <label class="" >En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
         <div>
           @foreach ($limitaciones as $limitacion)
             <label class="form-check-inline form-check-label">
               <input type="checkbox" value="{{ $limitacion->id }}" class="form-check-inline" name="limitacion[]">
               {{ $limitacion->nombre }}
             </label><br>
           @endforeach

           {!! $errors->first('limitacion[]', '<p class="help-block" style="color:red";>:message</p>') !!}

            <label for="" class="form-check-label" style="margin-left: 15px; padding-right: 0px; ">Otro</label>
            <input type="checkbox" class="form-check-inline" id="checkeadoB17"  onclick="muestroCualB17()" name="" value="5">
         </div>
         <!-- si checkeo el checkbox otro tomo el id checkeado y uso la funcion muestroCual -->
         <!-- mostrando lo que contiene el id cual -->
         <div id="cualB17" style="display:none">
            <label for="">Cual?</label>
            <input type="text" class="form-control" name="limitacion_otro"  id="victima_limitacion_otra" value="">
         </div>
      </div>
      <div class="botones" style="overflow:hidden;width:100%;margin-left:40%">
    <div class="btn-1" style="width:10%;float:left"> <button class="btn btn-primary col-xs" name="button" style="width:108%" >Agregar</button><br><br></div>

      </div>
    </form>
<div class="btn-2" style="width:11%;float:left;margin-left:40%">   <button style="width:100%" class="btn btn-primary col-xs" name="button" onclick="window.open('agregarConvivienteC', 'width=800,height=600')"; >Siguiente</button><br><br></div>

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
