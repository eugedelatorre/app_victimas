
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
        <li class="nav-item"> <strong><a class="nav-link " style="color:black;font-size:1.1em" href="#">Eje A: Datos institucionales</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="agregarVictima">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarconviviente">Eje C: Grupo Conviviente</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="agregarDelito">Eje D: Caracterización de delito</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarimputado">Eje E: Datos del imputado</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarOrganismo">Eje F: Atención del caso</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacion">Eje G: Documentación</a> </li></strong>
<li class="nav-item"><strong> <a class="nav-link "style="color:#3490dc;font-size:1.1em"  href="home">Inicio</a> </li></strong>
     </ul>
   </header>
   <body>

    <h1 class="text-center" style="padding: 15px;">Eje G: Documentación</h1>

    <div class="divpersona" id="divpersona">  <h2 class="text-center" style="padding: -20px;">Adjuntar Documentación</h2></div>

    <section class="container" >

<!Listado Personas asistidas>

<!Listado Personas asistidas>
<div class="archivos" style="margin-left:38%">
<ul style="list-style: none";>
        @foreach($documentos as $documento)
@if($documento->IdCaso==session("idCaso"))

               <li>
            <a href="/storage/{{$documento->archivo}}">
              {{$documento->nombre_documento}}</a>
              <strong>  <a style="color:red"href="detalleDocumento/deleteDocumento/{{$documento->id}}">
              ELIMINAR</a></strong>
            </li>
  @endif
        @endforeach



      </ul>
    </div>
        <br>


    <form class="" action="/agregarDocumento" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
    <input type="hidden" name="idCaso" value="{{session("idCaso")}}">



<!-G seleccionar archivo>

      <div class="form-group" {{ $errors->has('tipo_documento') ? 'has-error' : ''}}>
      <label for="tipo_documento">G 1.- Seleccionar tipo de Documento: </label>
      <select class="form-control" name="tipo_documento" >
            <option value="">Tipo de documento</option>
              @if(old("tipo_documento")==1)
              <option value="1" selected >Notas internas </option>
              @else <option value="1">Notas internas </option>@endif

              @if(old("tipo_documento")==2)
              <option value="2" selected >Notas externas </option>
              @else  <option value="2" >Notas externas </option>@endif

              @if(old("tipo_documento")==3)
              <option value="3" selected >Noticias relacionadas </option>
              @else  <option value="3">Noticias relacionadas</option>@endif

              @if(old("tipo_documento")==4)
              <option value="4" selected >Plan de Intervención/Estrategias de abordaje </option>
              @else<option value="4" >Plan de Intervención/Estrategias de abordaje </option>@endif
              </select>
      {!! $errors->first('tipo_documento', '<p class="help-block" style="color:red";>:message</p>') !!}
      </div>

      <div class="form-group" {{ $errors->has('documentos') ? 'has-error' : ''}}>
      <label for="nombre_documento">G 1.-Nombre del Documento: </label>
      <input type="text" class="form-control" name="nombre_documento"  value="{{old("nombre_documento")}}">
      {!! $errors->first('documentos', '<p class="help-block" style="color:red";>:message</p>') !!}
      </div>


      <div class="form-group">
        <label for="">Agregar Archivos:</label>
        <input type="file" name="archivo" class="form-control">
      </div>


<!BOTONES>

      <div class="botones" style="overflow:hidden;width:100%;margin-left:40%">
      <div class="btn-1" style="width:10%;float:left"> <button type="submit" class="btn btn-primary col-xs" name="button"  >Agregar/Enviar</button><br><br></div>
      </div>
      </form>

      <div class="btn-4" style="width:11%;float:left;margin-left:40%">   <button style="width:100%" class="btn btn-primary col-xs" name="button" onclick="window.open('agregarInforme', 'width=800,height=600')"; >Siguiente </button><br><br></div>
      </section>



      </body>
</html>
