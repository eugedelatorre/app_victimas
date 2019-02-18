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
      <title>Eje C: Grupo Conviviente</title>
      <style>
      </style>
   </head>
   <header>
     <ul class="nav nav-tabs">
        <li class="nav-item"> <strong><a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarCaso">Eje A: Datos institucionales</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="agregarVictimaB">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="#">Eje C: Grupo Conviviente</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelitoD">Eje D: Caracterización de delito</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarImputadoE">Eje E: Datos del imputado</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarOrganismoF">Eje F: Atención del caso</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacionG">Eje G: Documentación</a> </li></strong>
     </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje C: Grupo Conviviente</h1>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

  <div class="form-group" style="margin-top:-1%;margin-left:38%">
      <ul>
        @foreach($convivientes as $conviviente)

             @if($conviviente->idCaso==$ultimoid)
               <li>
            <a href="detalleconviviente/{{$conviviente->id}}">
              {{$conviviente->nombre_y_apellido}}

            </a>
            </li>
          @endif

        @endforeach

      </ul>
    </div>
      <section class="container">
         <form class="ejeC" action="/agregarconviviente" method="post">
           {{ csrf_field() }}
           <input type="hidden" name="idCaso" value="{{$ultimoid}}">

            <div class="form-group">
          <input type="hidden" name="idCaso" value="{{$ultimoid}}">


                  <h3>Datos del Conviviente:</h3>
                  <div class="form-group">
                     <label for="">C 1. Nombre y apellido:</label>
                     <input type="text" class="form-control" name="nombre_y_apellido" id="victima_nombre_y_apellido" value="{{old("nombre_y_apellido")}}">
                     <label for="bloqueo1" class="form-check-label">Se desconoce</label>
                     <input type="checkbox" id="bloqueo1" name="nombre_y_apellido" value="Se desconoce" onchange="checkC1(this)">
                  </div>
                  <script>
                     function checkC1(checkbox)
                     {
                         if (checkbox.checked)
                             {
                                 $('#victima_nombre_y_apellido').val('Se desconoce');
                                 document.getElementById('victima_nombre_y_apellido').setAttribute("readonly", "readonly");
                             }else
                                 {
                                     $('#victima_nombre_y_apellido').val('');
                                     document.getElementById('victima_nombre_y_apellido').removeAttribute("readonly");
                                 }
                     }
                  </script>
                  <div class="form-group ">
                     <label for="victima_edad">C 2. Edad:</label>
                     <input name="edad" value="{{old("edad")}}" id="victima_edad" class="form-control" type="text" onchange="mostrarValor(this.value);">
                     <label class="form-check-label" for="victima_edad_desconoce">Se desconoce</label>
                     <input name="victima_edad_desconoce" value="Se desconoce" id="victima_edad" placeholder="" type="checkbox" onchange="checkC2(this)">
                  </div>
                  <script type="text/javascript">
                     function checkC2(checkbox) {
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

                  <div class="form-group" >
                     <label for="vinculo_id">C 3. Vinculación con la víctima:</label>
                     <select name="vinculo_victima"value="{{old("vinculo_victima")}}" class="form-control vinculo" onChange="selectOnChangeC5(this)">
                        <option value="">Vínculo?</option>
                        @if(old("vinculo_victima")==1)
                        <option value="1" selected>Familiar</option>
                      @else <option value="1">Familiar</option> @endif
                        @if(old("vinculo_victima")==2)
                         <option value="2"selected>Pareja</option>
                      @else<option value="2" >Pareja</option>@endif

                        @if(old("vinculo_victima")==3)
                        <option value="3"selected>Amistad</option>
                        @else  <option value="3" >Amistad</option>@endif

                        @if(old("vinculo_victima")==4)
                        <option value="4"selected>Conocido</option>
                    @else<option value="4" >Conocido</option> @endif

                        @if(old("vinculo_victima")==5)
                        <option value="5"selected>Se desconoce</option>
                          @else<option value="5" >Se desconoce</option>@endif

                        @if(old("vinculo_victima")==5)
                        <option value="6"selected>Otro</option>
                        @else  <option value="6" >Otro</option>@endif
                     </select>
                  </div>
                  <div id="cualC5" style="display: none">
                     <label for="vinculo_otro">Cuál?</label>
                     <input type="text" class="form-control vinculo_otro" name="vinculo_otro" value="{{old("vinculo_otro")}}"id="vinculo_otro">
                  </div>
                  <br>
                  <script>
                     function selectOnChangeC5(sel) {
                     							 if (sel.value=="6"){
                     									 divC = document.getElementById("cualC5");
                     									 divC.style.display = "";
                     							 }else{
                     									 divC = document.getElementById("cualC5");
                     									 $('#vinculo_otro').val('');
                     									 divC.style.display="none";
                     							 }}
                  </script>
                  <div class="form-group ">
                     <label for="">C 4. Máximo nivel educativo alcanzado:</label>
                     <select class="form-control" name="niveleducativo_id" value="{{old("niveleducativo_id")}}">
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
                  <div class="form-group">
                     <label for="modalidad_id">C 5.Condiciones de trabajo:</label>
                     <select class="form-control" name="condiciones_de_trabajo" value="{{old("condiciones_de_trabajo")}}"  id="condiciones_de_trabajo" >
                        <option value="" >Selecciona las condición de trabajo</option>
                        <option value="1" >Desocupado(a)</option>
                        <option value="2" >Empleo informal</option>
                        <option value="3" >Empleo formal</option>
                        <option value="4" >Población Inactiva (jubilados, menores de edad, pensionados, etc.)</option>
                        <option value="5" >Se desconoce</option>
                     </select>
                  </div>


                <div class="btn-1" style="width:10%;float:left"> <button class="btn btn-primary col-xs" type="submit" style="width:108%" >Agregar</button><br><br></div>

                  </div>
                </form>
            <div class="btn-2" style="width:11%;float:left;margin-left:40%"><button style="width:100%" class="btn btn-primary col-xs"  onclick="window.open('agregarDelitoD', 'width=800,height=600')"; >Siguiente</button><br><br></div>
      </section>
      <!-- este script lo que hace es agregar otro formulario de profesionales en el caso que intervenga mas de un profesional en el caso -->

   </body>
</html>
