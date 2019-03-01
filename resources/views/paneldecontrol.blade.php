<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="/css/styles.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje C: Grupo Conviviente</title>
      <style>
      .Auno,.Ados{float: left;
    width: 50%;
      }
      .AunoDos{overflow: hidden;margin-left: 1%}
      </style>
   </head>
   <header>

   </header>
   <body>
<div class="panel" style="background-color:#97c93f;text-align:center;margin:0.5%;padding:0,5%;color:white">
<h1> PANEL DE CONTROL </p>
</div>
     <div class="AunoDos">
       <div class="Auno">
  <div class="card">
         <h4 class="text-center" style="padding:5%;margin-bottom:-5%">Eje A: Datos institucionales</h4>
    <h4 class="text-center" style="padding: 15px;">Editar Caso</h4>

<input type ='button' style="width:317px;background-color:grey;margin-left:22%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('/detalleCaso/{{$caso->id}}')"/></button>







        <h4 class="text-center" style="padding: 15px;">Personas Asistidas</h4>

<input type ='button' style="width:317px;background-color:grey;margin-left:22%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarPersona')"/></button>
    <h5 class="text-center" style="padding: 15px;">
      <ul>
        @foreach($personas as $persona)

      @if($persona->idCaso==session("idCaso"))
               <li>

              <strong style="margin-left:-15%">{{$persona->nombre_persona_asistida}}</strong>

<div class="botones" style="overflow:hidden;margin-left:15%">
        <div class="btn1" style="float:left">  <input type ='button' style="width:150px;background-color:#97c93f;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('/detallePersona/{{$persona->id}}', 'width=800,height=600');"/></button></div>
<div class="btn2" style="float:left">   <input type ='button' style="width:150px; margin-left:13%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('/detallePersona/deletePersona/{{$persona->id}}', 'width=800,height=600');"/></button></div>
</div>
            </li>


      @endif
        @endforeach

      </ul>
    </h5>
  </div>



<div class="card">


    <h3 class="text-center" style="padding: -30px;">Profesional interviniente</h3><br>

    <input type ='button' style="width:317px;background-color:grey;margin-left:22%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarProfesional')"/></button>
     <h6 class="text-center" style="padding: 15px;">
       <ul>
         @foreach($profesionales as $profesional)

       @if($profesional->idCaso==session("idCaso"))
                <li>

               <strong style="margin-left:-15%">{{$profesional->usuario->nombre_y_apellido}}</strong><br>

    <div class="botones" style="overflow:hidden;margin-left:15%">
         <div class="btn1" style="float:left">  <input type ='button' style="width:150px;background-color:#97c93f;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('/detalleProfesional/{{$profesional->id}}', 'width=800,height=600');"/></button></div>
    <div class="btn2" style="float:left">   <input type ='button' style="width:150px; margin-left:13%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('/detalleProfesional/deleteProfesional/{{$profesional->id}}', 'width=800,height=600');"/></button></div>
    </div>
             </li>


       @endif
         @endforeach

       </ul>
     </h6>
   </div>



<div class="card">
     <h4 class="text-center" style="padding: 15px;">Eje B: La victima y su contexto</h4>
     <input type ='button' style="width:317px;background-color:grey;margin-left:22%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarVictima')"/></button>
        <h5 class="text-center" style="padding: 15px;">
          <ul>
            @foreach($victimas as $victima)

          @if($victima->idCaso==session("idCaso"))
                   <li>

                  <strong style="margin-left:-15%">{{$victima->victima_nombre_y_apellido}}</strong>

     <div class="botones" style="overflow:hidden;margin-left:15%">
            <div class="btn1" style="float:left">  <input type ='button' style="width:150px;background-color:#97c93f;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('/detallevictima/{{$victima->id}}', 'width=800,height=600');"/></button></div>
            <div class="btn2" style="float:left">
              <button onclick="myFunction()" style="width:150px;background-color:red;color:black;border: solid black 1px" class="btn btn-danger col-xs" >Eliminar</button>


            <script>
                 function myFunction() {
                   var resul =confirm("Desea Eliminar esta Víctima");
                   if(resul==true){window.open('/detallevictima/deletevictima/{{$victima->id}}', 'width=800,height=600');

                   }
                 }
                 </script>

            </div>

            </div>
                     </li>


               @endif
                 @endforeach

               </ul>
             </h6>
           </div>
         </div>

      <div clas "Ados">
      <div class="card">
     <h4 class="text-center" style="padding: 15px;">Eje C: Grupo Conviviente</h4>



  <input type ='button' style="width:317px;background-color:grey;margin-left:28%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarconviviente')"/></button>
        <h5 class="text-center" style="padding: 15px;">
          <ul>
            @foreach($convivientes as $conviviente)

          @if($conviviente->idCaso==session("idCaso"))
                   <li>

                  <strong style="margin-left:-15%">{{$conviviente->nombre_y_apellido}}</strong>

                  <div class="botones" style="overflow:hidden;margin-left:22%">
                            <div class="btn1" style="float:left">  <input type ='button' style="width:150px;background-color:#97c93f;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('/detalleconviviente/{{$conviviente->id}}', 'width=800,height=600');"/></button></div>
                  <div class="btn2" style="float:left">
                    <input type ='button' style="width:150px; margin-left:13%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('/detalleconviviente/deleteconviviente/{{$conviviente->id}}', 'width=800,height=600');"/></button></div>
                  </div>
                                </li>


                          @endif
                            @endforeach

          </ul>
        </h5>
      </div>
      <div class="card">
     <h4 class="text-center" style="padding: 15px;">Eje E: Datos del imputado</h4>


<input type ='button' style="width:317px;background-color:grey;margin-left:28%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarimputado')"/></button>
      <h5 class="text-center" style="padding: 15px;">
        <ul >
          @foreach($imputados as $imputado)

        @if($imputado->idCaso==session("idCaso"))
                 <li >

                <strong style="margin-left:-15%">{{$imputado->nombre_y_apellido}}</strong>

<div class="botones" style="overflow:hidden;margin-left:22%">
          <div class="btn1" style="float:left">  <input type ='button' style="width:150px;background-color:#97c93f;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('/detalleimputado/{{$imputado->id}}', 'width=800,height=600');"/></button></div>
<div class="btn2" style="float:left">
  <input type ='button' style="width:150px; margin-left:13%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('/detalleimputado/deleteimputado/{{$imputado->id}}', 'width=800,height=600');"/></button></div>
</div>
              </li>


        @endif
          @endforeach

        </ul>
      </h5>
    </div>
    <div class="card">
      <h4 class="text-center" style="padding: 15px;">Eje F: Atención del caso</h4>

      <input type ='button' style="width:317px;background-color:grey;margin-left:29%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarOrganismo')"/></button>
<br><br>
</div>
<div class="card">
      <h4 class="text-center" style="padding: 15px;">Eje G:Agregar Documentos</h4>


      <input type ='button' style="width:317px;background-color:grey;margin-left:29%;color:black;border: solid black 1px" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('/detalleagregarDocumento')"/></button>
<br><br>
</div>
</div></div>









   </body>
</html>
