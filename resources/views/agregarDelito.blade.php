<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje D: Caracterización de delito</title>
      <style>
      </style>
   </head>
   <header>
     <ul class="nav nav-tabs">
        <li class="nav-item"> <strong><a class="nav-link " style="color:black;font-size:1.1em" href="agregarCaso">Eje A: Datos institucionales</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "  style="color:#4CAF50;font-size:1.1em" href="agregarVictima">Eje B: Caracterización de la victima y su contexto</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarconviviente">Eje C: Grupo Conviviente</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em"  href="#">Eje D: Caracterización de delito</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarimputado">Eje E: Datos del imputado</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link " style="color:#4CAF50;font-size:1.1em" href="agregarOrganismo">Eje F: Atención del caso</a> </li></strong>
        <li class="nav-item"><strong> <a class="nav-link "style="color:#4CAF50;font-size:1.1em"  href="agregaDocumentacion">Eje G: Documentación</a> </li></strong>
<li class="nav-item"><strong> <a class="nav-link "style="color:#3490dc;font-size:1.1em"  href="home">Inicio</a> </li></strong>
     </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje D: Datos del delito</h1>
      <section class="container">
         <form class="" action="/D-agregarDelito" method="post">
           {{ csrf_field() }}
            <input type="hidden" name="_token" value="WsSjwRfaowBqFaOeDaMHgdvXFBiRpgdOYXGPxlXj">
            <div class="form-group ">
               <label for="Caratulación_judicial">D 1. Caratulación judicial:</label>
               <input type="text" class="form-control" name="Caratulación_judicial" id="Caratulación_judicial" value="">
            </div>
            <div class="form-group ">
               <label for="">D 2. Fecha del hecho: </label>
               <input type="date" class="form-control" id="victima_fecha_hecho" name="victima_fecha_hecho" value="" ><br>
               <label for="bloqueo3" class="form-check-label">Se desconoce</label>
               <input type="checkbox" id="bloqueo2" name="victima_fecha_hecho_desconoce" value="Se desconoce" onchange="checkD2(this)">
            </div>
            <script>
               function checkD2(checkbox)
               {
                   if (checkbox.checked)
                   {
                       $('#victima_fecha_hecho').val('1900-01-01');
                       document.getElementById('victima_fecha_hecho').setAttribute("readonly", "readonly");
                   }else
                       {
                           $('#victima_fecha_hecho').val('');
                           document.getElementById('victima_fecha_hecho').removeAttribute("readonly");
                       }
               }
            </script>

            <div class="form-group">
            			 		<!--  -->


            			 			<label for="countryId2">D 11. País de explotación:</label>
            			 			<input readonly type="text" value="Se desconoce" class="form-control mb-2" name="">
            				        <select name="paisExplotacion" class="countries2 order-alpha form-control" id="countryId2">
            				            <option value="">Seleccioná pais de explotación</option>
            				        </select>

            				        <label for="desconocePaisExplotacion">Se desconoce</label>
            						<input type="checkbox" name="" id="desconocePaisExplotacion" value="Se desconoce"><br>

            				        <label for="stateId2">D 12. Provincia de explotación:</label>
            				        <input readonly type="text" value="Se desconoce" class="form-control mb-2" name="">
            				        <select name="provinciaExplotacion" class="states2 order-alpha form-control" id="stateId2">
            				            <option value="">Seleccioná provincia de explotación</option>
            				        </select>

            				        <label for="desconoceProvinciaExplotacion">Se desconoce</label>
            						<input type="checkbox" name="" id="desconoceProvinciaExplotacion" value="Se desconoce"><br>

            				        <label for="cityId2">D 13. Localidad de explotación:</label>
            				        <input readonly type="text" value="Se desconoce" class="form-control mb-2" name="">
            				        <select name="ciudadExplotacion" class="cities2 order-alpha form-control" id="cityId2">
            				            <option value="">Seleccioná ciudad de explotación</option>
            				        </select>

            				        <label for="desconoceCiudadExplotacion">Se desconoce</label>
            						<input type="checkbox" name="" id="desconoceCiudadExplotacion" value="Se desconoce"><br>

            				    <!--  -->
            			 	</div>

            <button type="submit" class="btn btn-primary col-xl" name="button">Enviar</button>
         </form>
      </section>
      <script src="/js/paises.js" type="text/javascript"></script>

   </body>
</html>
