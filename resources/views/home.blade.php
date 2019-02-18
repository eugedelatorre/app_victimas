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
      <ul class="nav nav-tabs">
         <li class="nav-item"> <strong><a class="nav-link " style="color:black;font-size:1.1em" href="#">Eje A: Datos institucionales</a> </li></strong>
         <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="agregarVictimaB">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
         <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarConvivienteC">Eje C: Grupo Conviviente</a> </li></strong>
         <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelitoD">Eje D: Caracterización de delito</a> </li></strong>
         <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarImputadoE">Eje E: Datos del imputado</a> </li></strong>
         <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarOrganismoF">Eje F: Atención del caso</a> </li></strong>
         <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacionG">Eje G: Documentación</a> </li></strong>
      </ul>
   </header>
   <body><br>
     <strong><h3 style="text-align: center">Buscar por Nombre de Referencia, por Nombre de la víctima o por modalidad de ingreso </h3></strong><br>

<br>  <div class="form-group" style="margin-top:-1%;margin-left:38%"><br>

   	<form action="/search" method="GET">
   		{{csrf_field()}}
   		<input type="text" name="search">
   		<button type="submit" class="btn">Search</button>
   	</form>
  </div></div><br>
  <div class="form-group" style="margin-top:-1%;margin-left:38%">
   	<ul>
   		@foreach ($casos as $caso)
   			<li>
   				<a href="/detalleCaso/{{$caso->id}}">
   			{{$caso->nombre_referencia}}
   				</a>
   			</li>
   		@endforeach
   	</ul>
  </div>
   </body>
</html>
