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


     </ul>
   </header>
   <body><br>


<br>  <div class="form-group" style="margin-top:-1%;margin-left:38%"><br>
  <div class="btn-4" style="width:11%;float:left;margin-left:40%">   <button style="width:340%;margin-left:-435%;background-color:#97c93f;color:black;border: solid black 1px" class="btn btn-primary col-xs" name="button" onclick="window.open('agregarCaso', 'width=800,height=600')"; >Cargar Caso </button><br><br></div>
<br><br><br>
   	<form action="/search" method="GET">
   		{{csrf_field()}}
   		<input type="text" name="search" style="width:30%;margin-left:-8%">
   		<button type="submit" class="btn-primary" style="background-color:#97c93f;color:black;border: solid black 1px">Buscar</button>
   	</form><br>
    <strong><h5 style="margin-left:-25%">Buscar por Nombre de Referencia, por Nombre de la víctima o por modalidad de ingreso </h5></strong><br>
  </div></div>
  <div class="form-group" style="margin-top:-1%;margin-left:35%">
   	<ul style="list-style: none;">
   		@foreach ($casos as $caso)
   			<li>
   				<a href="/paneldecontrol/{{$caso->id}}">
   			{{$caso->nombre_referencia}}
   				</a>
   			</li>
   		@endforeach
   	</ul>
  </div>
   </body>
</html>
