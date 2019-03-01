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
       <li class="nav-item"> <strong><a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="/detalleCaso/">Eje A: Datos institucionales</a> </li></strong>
       <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="/detallevictima/" >Eje B: Caracterización de la victima y su contexto</a> </li></strong>
       <li class="nav-item"><strong> <a class="nav-link " style="color:black;font-size:1.1em" href="#">Eje C: Grupo Conviviente</a> </li></strong>
       <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelitoD">Eje D: Caracterización de delito</a> </li></strong>
       <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="/detalleimputado/">Eje E: Datos del imputado</a> </li></strong>
       <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="/detalleOrganismo/">Eje F: Atención del caso</a> </li></strong>
       <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacionG">Eje G: Documentación</a> </li></strong>
     </ul>
   </header>
   <body>

   <h1 class="text-center" style="padding: 15px;">Eje B: Caracterización de la victima y su contexto</h1>
<input type ='button' style="width:317px;background-color:grey;margin-left:39%" class="btn btn-danger col-xs" name="button" value = 'Agregar' onclick="window.open('detalleagregarVictima')"/></button>
      <h5 class="text-center" style="padding: 15px;">
        <ul>
          @foreach($victimas as $victima)

        @if($victima->idCaso==session("idCaso"))
                 <li>

                <strong>{{$victima->victima_nombre_y_apellido}}</strong>

<div class="botones" style="overflow:hidden;margin-left:37%">
          <div class="btn1" style="float:left">  <input type ='button' style="width:150px;background-color:green" class="btn btn-danger col-xs" name="button" value = 'Editar' onclick="window.open('detallevictima/{{$victima->id}}', 'width=800,height=600');"/></button></div>
<div class="btn2" style="float:left">   <input type ='button' style="width:150px; margin-left:13%" class="btn btn-danger col-xs" name="button" value = 'Eliminar' onclick="window.open('detallevictima/deletevictima/{{$victima->id}}', 'width=800,height=600');"/></button></div>
</div>
              </li>


        @endif
          @endforeach

        </ul>
      </h5>

   </body>
</html>
