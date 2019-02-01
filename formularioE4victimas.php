<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/app.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <title>Eje E: Datos del imputado</title>
      <style>
      </style>
   </head>
   <header>
      <ul class="nav nav-tabs">
         <li class="nav-item"> <a class="nav-link" href="formularioA4victimas.php">Eje A: Datos institucionales</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioB4victimas.php">Eje B: Caracterización de la victima y su contexto</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioC4victimas.php">Eje C: Grupo Conviviente</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioD4victimas.php">Eje D: Caracterización de delito</a> </li>
         <li class="nav-item"> <a class="nav-link " href="#">Eje E: Datos del imputado</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioF4victimas.php">Eje F: Atención del caso</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioG4victimas.php">Eje G: Documentación</a> </li>
      </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje E: Datos del imputado</h1>
      <h5 style="text-align: center;">Estas trabajando sobre el número de carpeta 5</h5>
      </h1>
      <section class="container">
         <form class="ejeC" action="" method="post">
            <input type="hidden" name="_token" value="0gXwY5QPw95gtKwv0dB3e4JEOctn6msd6IQsG63n">
            <div class="form-group">
            <div class="padre">
               <div class="hijo">
                  <h3>Datos del Imputado:</h3>
                  <div class="form-group ">
                     <label for="">E 1. Nombre y apellido:</label>
                     <input type="text" class="form-control" name="imputado_nombre_y_apellido" id="imputado_nombre_y_apellido" value=""><br>
                     <label for="bloqueo1" class="form-check-label">Se desconoce</label>
                     <input type="checkbox" id="bloqueo1" name="victima_nombre_y_apellido_desconoce" value="Se desconoce" onchange="checkE1(this)">
                  </div>
                  <script>
                     function checkE1(checkbox)
                     {
                         if (checkbox.checked)
                             {
                                 $('#imputado_nombre_y_apellido').val('Se desconoce');
                                 document.getElementById('imputado_nombre_y_apellido').setAttribute("readonly", "readonly");
                             }else
                                 {
                                     $('#imputado_nombre_y_apellido').val('');
                                     document.getElementById('imputado_nombre_y_apellido').removeAttribute("readonly");
                                 }
                     }
                  </script>
                  <div class="form-group " id="tipodoc">
                     <label for="">E 2. Tipo de documentación:</label>
                     <select class="form-control" id="tipodocumento_id" name="tipodocumento_id" onChange="selectOnChangeE2(this)">
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
                     <div id="cualE2" style="display: none">
                        <label for="">Cual?</label>
                        <div class="">
                           <input name="imputado_tipo_documento_otro"  id="imputado_tipo_documento_otro" class="form-control" type="text" >
                        </div>
                     </div>
                  </div>
                  <script>
                     function selectOnChangeE2(sel) {


                     	if (sel.value=="9"){
                     		divC = document.getElementById("cualE2");
                     		divC.style.display = "";
                     	}else{
                     		divC = document.getElementById("cualE2");
                     		$('#imputado_tipo_documento_otro').val('');
                     		divC.style.display="none";
                     	}
                     }

                  </script>
                  <div class="form-group " id="nrodoc">
                     <label for="">E 3. Nro Documento:</label>
                     <input type="text" class="form-control" name="imputado_documento" placeholder="" id="imputado_documento" value="">
                  </div>
                  <label for="bloqueo3" class=" form-check-inline form-check-label"> </label>Se desconoce</label>
                  <input type="checkbox" id="bloqueo3" class="form-check-inline" name="imputado_documento_se_desconoce" value="Se desconoce" onchange="checkE3(this)">
                  <label for="bloqueo4" class=" form-check-inline form-check-label"> </label>No  posee</label>
                  <input type="checkbox" id="bloqueo3bis" class="form-check-inline" name="imputado_documento_se_desconoce" value="No posee" onchange="checkE3bis(this)"><br>
                  <script>
                     function checkE3(checkbox)
                     {
                         if (checkbox.checked)
                         {
                             $('#imputado_documento').val('Se desconoce');
                             document.getElementById('imputado_documento').setAttribute("readonly", "readonly");
                     document.getElementById("bloqueo3bis").checked= false;
                     document.getElementById("bloqueo3bis").disabled = true;
                         }else
                             {
                                 $('#imputado_documento').val('');
                                 document.getElementById('imputado_documento').removeAttribute("readonly");
                     document.getElementById('bloqueo3bis').disabled=false;
                             }
                     }
                  </script>
                  <script>
                     function checkE3bis(checkbox)
                     {
                         if (checkbox.checked)
                         {
                             $('#imputado_documento').val('No posee');
                             document.getElementById('imputado_documento').setAttribute("readonly", "readonly");
                     document.getElementById("bloqueo3").checked= false;
                     document.getElementById("bloqueo3").disabled = true;
                         }else
                             {
                                 $('#imputado_documento').val('');
                                 document.getElementById('imputado_documento').removeAttribute("readonly");
                     document.getElementById('bloqueo3').disabled=false;
                             }
                     }
                  </script><br>
                  <div class="form-group" >
                     <label for="vinculo_id">E 4. Vinculación con la víctima:</label>
                     <select  class="form-control vinculo" onChange="selectOnChangeE4(this)">
                        <option value="">Vínculo?</option>
                        <option value="1" >Familiar</option>
                        <option value="2" >Pareja</option>
                        <option value="3" >Amistad</option>
                        <option value="4" >Conocido</option>
                        <option value="5" >Se desconoce</option>
                        <option value="6" >Otro</option>
                     </select>
                  </div>
                  <div id="cualE4" style="display: none">
                     <label for="vinculo_otro">Cuál?</label>
                     <input type="text" class="form-control vinculo_otro" name="vinculo_otro" id="vinculo_otro">
                  </div>
                  <br>
                  <script>
                     function selectOnChangeE4(sel) {
                     							 if (sel.value=="6"){
                     									 divC = document.getElementById("cualE4");
                     									 divC.style.display = "";
                     							 }else{
                     									 divC = document.getElementById("cualE4");
                     									 $('#vinculo_otro').val('');
                     									 divC.style.display="none";
                     							 }}
                  </script>
                  <div class="form-group" >
                     <label for="antecedentes_id">E 5. Existencia de antecedentes penales:</label>
                     <select  class="form-control vinculo">
                        <option value="">Antecedentes penales?</option>
                        <option value="1" >Sí</option>
                        <option value="2" >No</option>
                        <option value="3" >Se desconoce</option>
                     </select>
                  </div>
                  <div class="form-group ">
                     <label for="">E 6. Defensoría N°: </label>
                     <input type="text" class="form-control" name="defensoria_numero" id="defensoria_numero" value="">
                     <label for="bloqueo6" class="form-check-label">Se desconoce</label>
                     <input type="checkbox" id="bloqueo6" name="defensoria_numero_desconoce" value="Se desconoce" onchange="checkE6(this)">
                  </div>
               </div>
            </div>
            <script>
               function checkE6(checkbox)
               {
               		if (checkbox.checked)
               				{
               						$('#defensoria_numero').val('Se desconoce');
               						document.getElementById('defensoria_numero').setAttribute("readonly", "readonly");
               				}else
               						{
               								$('#defensoria_numero').val('');
               								document.getElementById('defensoria_numero').removeAttribute("readonly");
               						}
               }
            </script>
            <button type="submit" class="btn btn-primary col-xl enviar" name="button">Enviar</button><br><br>
         </form>
         <button id="anadir" class="btn btn-outline-primary col-xl anadirProfesional" type="button"> Agregar imputado </button><br><br>
         <button id="borra" class="btn btn-outline-danger col-xl" type="button" onclick="borra()">Borrar imputado</button><br><br>
      </section>
      <!-- este script lo que hace es agregar otro formulario de profesionales en el caso que intervenga mas de un profesional en el caso -->
      <script>
         var nueva_entrada = $('.padre').html();

         $("#anadir").click(function(){
             $(".padre").append(nueva_entrada);
         });

         $("#borra").click(function(){
         $('.hijo').last().remove();
         swal('Se borro un imputado');
         });
      </script>
      <script>
         var msg = '';
         var exist = '';
         if(exist){
           swal(msg);
         }
      </script>
      <script src="js/formularioA.js" type="text/javascript" charset="utf-8" async defer></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </body>
</html>
