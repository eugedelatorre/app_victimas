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
      <li class="nav-item"> <a class="nav-link" href="formularioA4victimas.php">Eje A: Datos institucionales</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioB4victimas.php">Eje B: Caracterización de la victima y su contexto</a> </li>
      <li class="nav-item"> <a class="nav-link " href="#">Eje C: Grupo Conviviente</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioD4victimas.php">Eje D: Caracterización de delito</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioE4victimas.php">Eje E: Datos del imputado</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioF4victimas.php">Eje F: Atención del caso</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioG4victimas.php">Eje G: Documentación</a> </li>
    </ul>
</header>

<body>

	<h1 class="text-center" style="padding: 15px;">
    	Eje C: Grupo Conviviente
		<h5 style="text-align: center;">Estas trabajando sobre el número de carpeta 5</h5>
	</h1>
        <section class="container">
        <form class="ejeC" action="" method="post">
        	<input type="hidden" name="_token" value="0gXwY5QPw95gtKwv0dB3e4JEOctn6msd6IQsG63n">
            <div class="form-group">
            	<label for="otraspersonas_id">¿Convivía la víctima con una o mas personas? </label>
	            <select class="form-control noPersonas" name="otraspersonas_id" >
	            	<option value=""></option>
	                	                	<option value="1">Si</option>
	                	                	<option value="2">No</option>
	                	                	<option value="3">Se desconoce</option>
	                	            </select>

            </div>

            <div class="padre">
                <div class="hijo"   >
                    <h3>Datos del Conviviente:</h3>
										<div class="form-group ">
                     <label for="">C 1. Nombre y apellido:</label>
                     <input type="text" class="form-control" name="victima_nombre_y_apellido" id="victima_nombre_y_apellido" value="">



                     <label for="bloqueo1" class="form-check-label">Se desconoce</label>
                     <input type="checkbox" id="bloqueo1" name="victima_nombre_y_apellido_desconoce" value="Se desconoce" onchange="checkC1(this)">
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
								 <input name="victima_edad" value="" id="victima_edad" class="form-control" type="text" onchange="mostrarValor(this.value);">


								 <label class="form-check-label" for="victima_edad_desconoce">Se desconoce</label>
								 <input name="victima_edad_desconoce" value="Se desconoce" id="victima_edad_desconoce" placeholder="" type="checkbox" onchange="checkC2(this)">
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
                    	<label for="genero_id">C 3. Género</label>
	                    <select class="form-control genero" id="genero_id">
	                        <option value="">Género?</option>
			                			                	<option value="1" >Mujer Cis</option>
			                			                	<option value="2" >Mujer Trans</option>
			                			                	<option value="3" >Varon Cis</option>
			                			                	<option value="4" >Varon Trans</option>
			                			                	<option value="5" >Otro</option>
			                			                	<option value="6" >Se desconoce</option>
			                	                    </select>

                    </div>

                    <div class="form-group" >
                    	<label for="vinculo_id">C 4. Vinculación con la víctima:</label>
	                    <select  class="form-control vinculo" onChange="selectOnChangeC5(this)">
	                        <option value="">Vínculo?</option>
			                			                	<option value="1" >Familiar</option>
			                			                	<option value="2" >Pareja</option>
			                			                	<option value="3" >Amistad</option>
			                			                	<option value="4" >Conocido</option>
			                			                	<option value="5" >Se desconoce</option>
			                			                	<option value="6" >Otro</option>
			                	                    </select>

                    </div>

                    <div id="cualC5" style="display: none">
                        <label for="vinculo_otro">Cuál?</label>
                        <input type="text" class="form-control vinculo_otro" name="vinculo_otro" id="vinculo_otro">
                    </div><br>

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
                    <label for="">C 5. Máximo nivel educativo alcanzado:</label>
                    <select class="form-control" name="niveleducativo_id">
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
								<div class="form-group ">
							                 <label for="modalidad_id">C 6.Condiciones de trabajo:</label>
							                 <select class="form-control" name="condiciones_de_trabajo" id="condiciones_de_trabajo" >
							                                                                             <option value="" >Selecciona las condición de trabajo</option>
							                                                                             <option value="1" >Desocupado(a)</option>
							                                                                             <option value="2" >Empleo informal</option>
							                                                                             <option value="3" >Empleo formal</option>
							                                                                             <option value="4" >Población Inactiva (jubilados, menores de edad, pensionados, etc.)</option>
							                                                                             <option value="5" >Se desconoce</option>


							                                         </select>
							               </div>

               </div>
            </div>

            <button type="submit" class="btn btn-primary col-xl" name="button">Enviar</button><br><br>

        </form>

    <button id="anadir" class="btn btn-outline-primary col-xl anadirProfesional" type="button"> Agregar conviviente </button><br><br>
    <button id="borra" class="btn btn-outline-danger col-xl" type="button" onclick="borra()">Borrar conviviente</button><br><br>

  </section>




        <!-- este script lo que hace es agregar otro formulario de profesionales en el caso que intervenga mas de un profesional en el caso -->
        <script>
         var nueva_entrada = $('.padre').html();

         $("#anadir").click(function(){
             $(".padre").append(nueva_entrada);
         });

       $("#borra").click(function(){
         $('.hijo').last().remove();
         swal('Se borro un conviviente');
     });
 </script>
 <script>
     var msg = '';
     var exist = '';
     if(exist){
       swal(msg);
     }
 </script>
 <script src="js/formulario.js" type="text/javascript" charset="utf-8" async defer></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  </body>
</html>
