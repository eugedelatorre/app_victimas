<?php

 ?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje A: Datos institucionales</title>
      <style>
         .Auno,.Ados{float: left;
         width: 40%
         }
         .AunoDos{overflow: hidden;margin-left: 1%}
      </style>
   </head>
   <header>
     <ul class="nav nav-tabs">
        <li class="nav-item"> <strong><a class="nav-link " style="color:black;font-size:1.1em" href="agregarCaso">Eje A: Datos institucionales</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="agregarVictimaB">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarConvivienteC">Eje C: Grupo Conviviente</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelitoD">Eje D: Caracterización de delito</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarImputadoE">Eje E: Datos del imputado</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarOrganismoF">Eje F: Atención del caso</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacionG">Eje G: Documentación</a> </li></strong>
     </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje A: Datos institucionales</h1>
      <h2 class="text-center" style="padding: -30px;">Profesional interviniente</h2>
      <div class="form-group" style="margin-top:-1%;margin-left:45%">

    </div>
      <section class="container">

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

         <form class="" action="/detalleProfesional" method="post">
                {{csrf_field()}}
                <input type="hidden" name="idProfesional" value="{{$profesional->id}}">
                <input type="hidden" name="idCaso" value="{{$profesional->idCaso}}">




                  <div class="form-group"{{ $errors->has('nombre_profesional_interviniente') ? 'has-error' : ''}}>
                    <h3>A 15. Profesional Interviniente:</h3>
                    <div class="form-group ">
                       <label for="profesional_id">Profesional que interviene</label>
                       <select class="form-control" name="nombre_profesional_interviniente">
                          <option value="">Seleccioná profesional</option>
                          <option value="1">Jessica Nerina Seimandi - Dirección</option>
                          <option value="2">Mercedes Ratti - Dirección</option>
                          <option value="3">Elina Contreras - Dirección</option>
                          <option value="4">Emiliano Lurbet - Equipo Barrios</option>
                          <option value="5">Correa, Anabella - Equipo Barrios</option>
                          <option value="6">Jose Maria Retamasso - Equipo Barrios</option>
                          <option value="7">Carolina Cabral - Equipo Barrios</option>
                          <option value="8">Horacio Renone - Equipo Barrios</option>
                          <option value="9">Jorge samuel Chocobar - Equipo Barrios</option>
                          <option value="10">Candela Chuliver - Equipo de rescate</option>
                          <option value="11">Licia Cipollone - Equipo de rescate</option>
                          <option value="12">Romina Camperchiolli - Equipo de rescate</option>
                          <option value="13">Florencia Daireaux - Equipo de rescate</option>
                          <option value="14">María Victoria García - Equipo de rescate</option>
                          <option value="15">Pamela Gisela Ledesma - Equipo de rescate</option>
                          <option value="16">Mauro Javier Salgueira - Equipo de rescate</option>
                          <option value="17">María Eugenia Sánchez - Equipo de rescate</option>
                          <option value="18">María Pilar Sanz - Equipo de rescate</option>
                          <option value="19">Adrian Sein - Equipo de rescate</option>
                          <option value="20">Martin Urtasun - Equipo de rescate</option>
                          <option value="21">Paola Vazquez - Equipo de rescate</option>
                          <option value="22">Angela Gonzalez Touzett - Equipo de rescate</option>
                          <option value="23">Paola Vega De Nazar - Equipo de rescate</option>
                          <option value="24">Belén Della Croce - Equipo de rescate</option>
                          <option value="25">Diego Campero - Equipo de planificación</option>
                          <option value="26">Maria Alejandro Cardoso - Equipo de planificación</option>
                          <option value="27">Luciano Ramis - Equipo de planificación</option>
                          <option value="28">Cecilia Svanossi - Equipo de planificación</option>
                          <option value="29">Paula Labombarda - Equipo de planificación</option>
                          <option value="30">Camila Ledesma - Equipo de planificación</option>
                          <option value="31">Luciana Salgueira - Equipo de planificación</option>
                          <option value="32">María Garro - Administrativo</option>
                          <option value="33">Soledad Iglesias - Administrativo</option>
                          <option value="34">Denisse Noguera - Administrativo</option>
                          <option value="35">Florencia Sánchez Turi - Administrativo</option>
                          <option value="36">Rosario Sánchez - Subsecretaría</option>
                          <option value="37">Lorena Signore - Subsecretaría</option>
                          <option value="38">Lucía Moreno - Subsecretaría</option>
                       </select>
                       {!! $errors->first('nombre_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                    </div>
                    <div class="form-group"{{ $errors->has('desde_profesional_interviniente') ? 'has-error' : ''}}>
                       <label for="">A 15.3 Interviene desde:</label>
                       <input type="date" class="form-control" name="desde_profesional_interviniente" id="datos_profesional_interviene_desde" value="{{$profesional->desde_profesional_interviniente}}">
                  {!! $errors->first('desde_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                    </div>
                    <div class="form-group"{{ $errors->has('actual_profesional_interviniente') ? 'has-error' : ''}}>
                       <label for="profesionalactualmente_id">A 15.4 Actualmente Interviene:</label>
                       <select class="form-control" name="actual_profesional_interviniente" onChange="selectOnChangeA15(this)" value="{{old("actual_profesional_interviniente")}}">
                          <option value="">Actualmente interviene?</option>
                          <option value="1">Si</option>
                          <option value="2">No</option>
                       </select>
                       {!! $errors->first('actual_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                    </div>
                    <div id="no" style="display: none;">
                       <div class="form-group"{{ $errors->has('hasta_profesional_interviniente') ? 'has-error' : ''}}>
                          <label for="hasta_profesional_interviniente">A 15.5 Interviene hasta:</label>
                          <input type="date" class="form-control" name="hasta_profesional_interviniente" id="datos_profesional_interviene_desde" value="{{old("hasta_profesional_interviniente")}}">
                  {!! $errors->first('hasta_profesional_interviniente', '<p class="help-block" style="color:red";>:message</p>') !!}
                       </div>
                    </div>
            </div>
            <div class="botones" style="overflow:hidden;width:100%;margin-left:40%">
          <div class="btn-4" style="width:11%;float:left;margin-left:0.1%"><input type ='submit' style="width:100%;background-color:green" class="btn btn col-xs" value = 'Editar' ></button><br><br></div>

            </div>
          </form>

<div class="btn-4" style="width:11%;float:left;margin-left:40%"><input type ='button' style="width:100%" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('deleteProfesional/{{$profesional->id}}', 'width=800,height=600');"/></button><br><br></div>

      <script>

         function selectOnChange1(sel) {
             if (sel.value=="2"){
                 divC = document.getElementById("no");
                 divC.style.display = "";
             }else{
                 divC = document.getElementById("no");
                 $('#datos_profesional_interviene_hasta').val('');
                 divC.style.display="none";
             }
         }
      </script>

      <script>
         function muestroCualA2() {
             var checkBox = document.getElementById("checkeado");
             var text = document.getElementById("cualA2");
             if (checkBox.checked == true){
                 text.style.display = "block";
             } else {
               $('#tipos_delitos_otro_cual').val('');
                text.style.display = "none";
             }
         }
      </script>
      <script>
         function selectOnChangeA5bis(sel) {
         if (sel.value=="14"){
         divC = document.getElementById("cualA5");
         divC.style.display = "";}
         else{
         divC = document.getElementById("cualA5");
         $('#derivacion_otro_organismo_cual').val('');

         divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA5(sel) {
           if (sel.value=="1"||sel.value=="2"){
                divC = document.getElementById("derivacion_otro_organismo_id");
                $('#otro_organismo').val(' ');
                divC.style.display = "none";}


           if (sel.value=="3"){
                divC = document.getElementById("derivacion_otro_organismo_id");
                divC.style.display = "";

         }}
      </script>
      <script>
         function selectOnChangeA12(sel) {

                                 if (sel.value=="2"){
                divC = document.getElementById("pase_pasivo");
                divC.style.display = "";

         }
         else{
               divC = document.getElementById("pase_pasivo");
               $('#motivo_pase_pasivo').val(' ');
               divC.style.display = "none";
               divC = document.getElementById("cualA12");
               $('#motivo_pase_pasivo_cual').val('');
             divC.style.display = "none";}}
      </script>
      <script>
         function selectOnChangeA12bis(sel) {
           if (sel.value=="4"){
             divC = document.getElementById("cualA12");
             divC.style.display = "";}
             else{
                divC = document.getElementById("cualA12");
                $('#motivo_pase_pasivo_cual').val('');

                divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA14(sel) {
           if (sel.value=="2"){
             divC = document.getElementById("personas_asistidas");
             divC.style.display = "";}
             else{
                divC = document.getElementById("personas_asistidas");
                $('#Nombre_apellido_persona_asistida').val('');
                $('#vinculo_victima').val('');
                $('#vinculo_victima_cual_otro').val('');
                $('#telefono_contacto').val('');
                $('#domicilio_contacto').val('');
                $('#localidad_residencia').val('');
                divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA14II(sel) {
           if (sel.value=="4"){
             divC = document.getElementById("vinculo_victima_cual");
             divC.style.display = "";}
             else{
                divC = document.getElementById("vinculo_victima_cual");
                $('#vinculo_victima_cual_otro').val('');

                divC.style.display = "none";}
         }
      </script>
      <script>
         function selectOnChangeA15(sel) {
           if (sel.value=="2"){
             divC = document.getElementById("no");
             divC.style.display = "";}
             else{
                divC = document.getElementById("no");
                $('#no').val('');

                divC.style.display = "none";}
         }
      </script>

   </body>
</html>
