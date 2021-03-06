<?php

session_start();



 ?>


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https:fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje A: Datos institucionales</title>
      <style>
         .Auno,.Ados{float: left;
         width: 40%
         }
         .AunoDos{overflow: hidden;margin-left: 1%}
      </style>
   </head>
   <header>

   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje A: Datos institucionales</h1>

      <section class="container">
        @if ($errors->any())

          <div class="alert alert-danger" style="background:#4CAF50;color:black;font-size: 1.5em;text-align:center">
              <p>Debes completar todo el <strong>formulario A</strong> para continuar</p>
          </div>

        @endif

         <form class="" action="/detalleCaso" method="post">
                {{csrf_field()}}
                   <input type="hidden" name="idCaso" value="{{$caso->id}}">

                      <label class="form-check-inline form-check-label">Usuario:</label><br><br>
                        <select class="form-control" name="usuarios" >
                          <option value="">Selecciona un usuario</option>

                        @foreach ($usuarios as $usuario)
                          <option value="{{ $usuario->id }}">{{ $usuario->nombre_y_apellido}}</option>
                          @endforeach
                      </select><br><br>
            {{session("idCaso")}}

            <div class="form-group {{ $errors->has('nombre_referencia') ? 'has-error' : ''}}">

               <label for="datos_nombre_referencia">A 1. Nombre de referencia:</label>

               <input type="text" class="form-control" name="nombre_referencia" id="datos_nombre_referencia" value="{{$caso->nombre_referencia}}">
           {!! $errors->first('nombre_referencia', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>


            <div class="form-group ">
               <div class="AunoDos" {{ $errors->has('delitos') ? 'has-error' : ''}}>

                  <label for="">A 2. Tipo de delito:</label><br>
                  <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
                  <div class="Auno">

                  </div>
                  <div class="Ados">
                    @foreach ($delitos as $delito)


                        <label class="form-check-inline form-check-label">


                        @if ($caso->delitosIds()->contains($delito->id))
                          <input type="checkbox" value="{{ $delito->id }}" class="form-check-inline" name="delitos[]" checked>
                        @else
                          <input type="checkbox" value="{{ $delito->id }}" class="form-check-inline" name="delitos[]">
                        @endif
                          {{ $delito->nombre }}
                        </label><br>


                    @endforeach
              {!! $errors->first('delitos', '<p class="help-block" style="color:red";>:message</p>') !!}

                  </div>
               </div>
            </div>
            <div id="cualA2"style="display:none">
               <label for="tipos_delitos_cual">Cuál?:</label>
               <input class="form-control" name="Cuál" type="text" id="tipos_delitos_otro_cual" value="{{$caso->Cuál}}" >
            </div>
            <div class="form-group {{ $errors->has('descripcion_caso') ? 'has-error' : ''}}">
               <label for="breve_descripcion_caso">A 3. Breve descripción del caso:</label>
               <input type="text" class="form-control" name="descripcion_caso" id="breve_descripcion_caso" value="{{$caso->descripcion_caso}}" style="height:80px">
            {!! $errors->first('descripcion_caso', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group "
          {{ $errors->has('fecha_ingreso') ? 'has-error' : ''}}>
               <label for="datos_fecha_ingreso">A 4. Fecha de Ingreso:</label>
               <input type="date" class="form-control" name="fecha_ingreso" id="datos_fecha_ingreso" value="{{$caso->fecha_ingreso}}">
          {!! $errors->first('fecha_ingreso', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group
            {{ $errors->has('modalidad_ingreso') ? 'has-error' : ''}} ">
               <label for="modalidad_ingreso">A 5. Modalidad de Ingreso</label>
               <select class="form-control" name="modalidad_ingreso" id="modalidad_id" onChange="selectOnChangeA5(this)" >
                 <option value=" " >Modalidad de Ingreso</option>
                  <option value="1" >Presentación espontánea</option>
                  <option value="2" >Intervenciòn de oficio</option>
                  <option value="3" >Derivación de otro organismo</option>
               </select>
               {!! $errors->first('modalidad_ingreso', '<p class="help-block" style="color:red";>:message</p>') !!}
               <div id="derivacion_otro_organismo_id" style="display: none;">
                  <br>
                  <select class="form-control" onChange="selectOnChangeA5bis(this)" name="organismos" id="otro_organismo">
                     <option value="">Que Organismo?</option>
                     <option value="1" >Unidad de Ministro (Ministerio de Justicia)</option>
                     <option value="2" >Organismo Provincial de Niñez y Adolescencia</option>
                     <option value="3" > Portal Mi Provincia</option>
                     <option value="4" >Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)</option>
                     <option value="5" >Fiscalía</option>
                     <option value="6" >Comisaría</option>
                     <option value="7" >Municipio</option>
                     <option value="8" >Centro de Acceso a Justicia (CAJ)</option>
                     <option value="9" >Defensoría del Pueblo</option>
                     <option value="10" >Estado en Tu Barrio</option>
                     <option value="11" >DDI</option>
                     <option value="12" >Cerca de Noche</option>
                     <option value="13" >Equipo territorial de barrios</option>
                     <option value="14" >Otro</option>
                  </select>

               </div>
               <div id="cualA5" style="display: none;">
                  <br><label for="">Cuál?</label>
                  <div class="">
                     <input class="form-control" name="cual_otro_organismo" id="derivacion_otro_organismo_cual" type="text" value="{{$caso->cual_otro_organismo}}">
                  </div>
               </div>

            </div>


            <div class="AunoDos" {{ $errors->has('cavaj') ? 'has-error' : ''}}>
               <label for="">A 6. CAVAJ interviniente:</label><br>
               <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
               <div class="Ados">

                 @foreach ($cavajs as $cavaj)


                     <label class="form-check-inline form-check-label">


                     @if ($caso->cavajsIds()->contains($cavaj->id))
                       <input type="checkbox" value="{{ $cavaj->id }}" class="form-check-inline" name="cavaj[]" checked>
                     @else
                       <input type="checkbox" value="{{ $cavaj->id }}" class="form-check-inline" name="cavaj[]">
                     @endif
                       {{ $cavaj->nombre }}
                     </label><br>


                 @endforeach


        {!! $errors->first('cavaj', '<p class="help-block" style="color:red";>:message</p>') !!}
               </div>

             </div><br>
            <div class="form-group "{{ $errors->has('fiscalia_juzgado') ? 'has-error' : ''}}>
               <label for="datos_ente_judicial">A 7. Fiscalía/Juzgado a cargo:</label>
               <input type="text" class="form-control" name="fiscalia_juzgado" id="datos_ente_judicial" value="{{$caso->fiscalia_juzgado}}">
           {!! $errors->first('fiscalia_juzgado', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group "{{ $errors->has('causa_id_judicial') ? 'has-error' : ''}}>
               <label for="causa_id_judicial"}>A 8. N° Causa o Id Judicial:</label>
               <input type="text" class="form-control" name="causa_id_judicial" value="{{$caso->causa_id_judicial}}">
          {!! $errors->first('causa_id_judicial', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group " for="comisaria"{{ $errors->has('comisaria') ? 'has-error' : ''}}>
               <label >A 9. Comisaría interviniente:</label>
               <input type="text" class="form-control" name="comisaria" value="{{$caso->comisaria}}">
            {!! $errors->first('comisaria', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group "for=""{{ $errors->has('denuncias_previas') ? 'has-error' : ''}}>
               <label for="denuncias_previas">A 10.¿Hubo denuncias previas vinculadas a la temática del tipo de delito actual?:</label>
               <select class="form-control" name="denuncias_previas">
                  <option value="">Hubo denuncias previas</option>
                  <option value="1" >Sí</option>
                  <option value="2" >No</option>
                  <option value="3" >Se desconoce</option>
               </select>
               {!! $errors->first('denuncias_previas', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group "{{ $errors->has('departamento_judicial') ? 'has-error' : ''}}>
            <label for="departamento_judicial">A 11.Departamento judicial:</label>
            <select class="form-control"  name="departamento_judicial">
               <option value="">Departamento Judicial</option>
               <option value="1" >Azul</option>
               <option value="2" >Bahía Blanca</option>
               <option value="3" >Dolores</option>
               <option value="4" >General San Martín</option>
               <option value="5" >Junín</option>
               <option value="6" >La Matanza</option>
               <option value="7" >La Plata</option>
               <option value="8" >Lomas de Zamora</option>
               <option value="9" >Mar del Plata</option>
               <option value="10" >Mercedes</option>
               <option value="11" >Moreno - General Rodríguez</option>
               <option value="12" >Morón</option>
               <option value="13" >Necochea</option>
               <option value="14" >Pergamino</option>
               <option value="15" >Quilmes</option>
               <option value="16" >San Isidro</option>
               <option value="17" >San Nicolás</option>
               <option value="18" >Trenque Lauquen</option>
               <option value="19" >Zárate - Campana</option>
            </select>
            {!! $errors->first('departamento_judicial', '<p class="help-block" style="color:red";>:message</p>') !!}
          </div>
            <div class="form-group "{{ $errors->has('estado') ? 'has-error' : ''}}>
               <label for="">A 12. Estado:</label>
               <select class="form-control" name="estado" onChange="selectOnChangeA12(this)">
                  <option value="">Estado:</option>
                  <option value="1" >Activo</option>
                  <option value="2" >Pasivo</option>
               </select>
               {!! $errors->first('estado', '<p class="help-block" style="color:red";>:message</p>') !!}

            </div>
            <div id="pase_pasivo" style="display:none">
               <label for="">A12I. Motivo de pase a pasivo:</label>
               <select class="form-control" onChange="selectOnChangeA12bis(this)" name="motivospasivos" id="motivo_pase_pasivo">
                  <option value="">Motivo de pase a pasivo:</option>
                  <option value="1" >Se cubrió la demanda inicial</option>
                  <option value="2" >Deja de requerir intervención</option>
                  <option value="3" >Imposibilidad de contacto</option>
                  <option value="4" >Otro</option>
               </select>
            </div>
            <div id="cualA12" style="display: none;">
               <br><label for="">Cuál?</label>
               <div class="">
                  <input class="form-control" name="cual_otro_motivospasivos" type="text" id="motivo_pase_pasivo_cual" value="{{$caso->cual_otro_motivospasivos}}">
               </div>
            </div>
            <div class="form-group "{{ $errors->has('nombre_y_apellido_de_la_victima') ? 'has-error' : ''}}>
               <label for="">A 13. Nombre y apellido de la víctima:</label>
               <input type="text" class="form-control" name="nombre_y_apellido_de_la_victima" id="victima_nombre_y_apellido"  value="{{$caso->nombre_y_apellido_de_la_victima}}">
        {!! $errors->first('nombre_y_apellido_de_la_victima', '<p class="help-block" style="color:red";>:message</p>') !!}
            </div>
            <div class="form-group "{{ $errors->has('nombre_y_apellido_de_la_victima') ? 'has-error' : ''}}>
               <label for="persona_asistida">A 14. ¿Es la persona asistida la víctima directa?:</label>
               <select class="form-control" name="persona_asistida" onChange="selectOnChangeA14(this)">
                  <option value="">¿Es la persona asistida la víctima directa?</option>
                <option value="1">Sí</option>
              <option value="2">No</option>


               </select>
               {!! $errors->first('nombre_y_apellido_de_la_victima', '<p class="help-block" style="color:red";>:message</p>') !!}

             </div>
<br>

            <div class="btn-2" style="width:11%;float:left;margin-left:40%">   <button style="width:100%; background-color:#97c93f;color:black;border: solid black 1px"class="btn btn-primary col-xs" name="button">Editar</button><br><br></div>
         </form>
      </section>
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
           if (sel.value=="1"){
             divC = document.getElementById("btn-1");
             divC.style.display = "";
             divC = document.getElementById("btn-2");
             divC.style.display = "none";}
             else{
               divC = document.getElementById("btn-1");
               divC.style.display = "none";
               divC = document.getElementById("btn-2");
               divC.style.display = "";}}
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
