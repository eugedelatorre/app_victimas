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
         <li class="nav-item"> <a class="nav-link" href="formularioA4victimas.php">Eje A: Datos institucionales</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioB4victimas.php">Eje B: Caracterización de la victima y su contexto</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioC4victimas.php">Eje C: Grupo Conviviente</a> </li>
         <li class="nav-item"> <a class="nav-link " href="#">Eje D: Caracterización de delito</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioE4victimas.php">Eje E: Datos del imputado</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioF4victimas.php">Eje F: Atención del caso</a> </li>
         <li class="nav-item"> <a class="nav-link " href="formularioG4victimas.php">Eje G: Documentación</a> </li>
      </ul>
   </header>
   <body>
      <h1 class="text-center" style="padding: 15px;">Eje D: Datos del delito</h1>
      <section class="container">
         <form class="" action="" method="post">
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
            <div class="form-group ">
               <label for="">D 3. País del hecho: </label>
               <select id="pais_id" class="form-control" name="pais_id" onChange="selectOnChange3(this)">
                  <option value="">Elegí País</option>
                  <option value="1" >Afghanistan</option>
                  <option value="2" >Albania</option>
                  <option value="3" >Algeria</option>
                  <option value="4" >Andorra</option>
                  <option value="5" >Angola</option>
                  <option value="6" >Antigua and Barbuda</option>
                  <option value="7" >Argentina</option>
                  <option value="8" >Armenia</option>
                  <option value="9" >Australia</option>
                  <option value="10" >Austria</option>
                  <option value="11" >Azerbaijan</option>
                  <option value="12" >Bahamas</option>
                  <option value="13" >Bahrain</option>
                  <option value="14" >Bangladesh</option>
                  <option value="15" >Barbados</option>
                  <option value="16" >Belarus</option>
                  <option value="17" >Belgium</option>
                  <option value="18" >Belize</option>
                  <option value="19" >Benin</option>
                  <option value="20" >Bhutan</option>
                  <option value="21" >Bolivia</option>
                  <option value="22" >Bosnia and Herzegovina</option>
                  <option value="23" >Botswana</option>
                  <option value="24" >Brazil</option>
                  <option value="25" >Brunei</option>
                  <option value="26" >Bulgaria</option>
                  <option value="27" >Burkina Faso</option>
                  <option value="28" >Burundi</option>
                  <option value="29" >Cambodia</option>
                  <option value="30" >Cameroon</option>
                  <option value="31" >Canada</option>
                  <option value="32" >Cape Verde</option>
                  <option value="33" >Central African Republic</option>
                  <option value="34" >Chad</option>
                  <option value="35" >Chile</option>
                  <option value="36" >China</option>
                  <option value="37" >Colombia</option>
                  <option value="38" >Comoros</option>
                  <option value="39" >Congo (Brazzaville)</option>
                  <option value="40" >Congo</option>
                  <option value="41" >Costa Rica</option>
                  <option value="42" >Cote d&#039;Ivoire</option>
                  <option value="43" >Croatia</option>
                  <option value="44" >Cuba</option>
                  <option value="45" >Cyprus</option>
                  <option value="46" >Czech Republic</option>
                  <option value="47" >Denmark</option>
                  <option value="48" >Djibouti</option>
                  <option value="49" >Dominica</option>
                  <option value="50" >Dominican Republic</option>
                  <option value="51" >East Timor (Timor Timur)</option>
                  <option value="52" >Ecuador</option>
                  <option value="53" >Egypt</option>
                  <option value="54" >El Salvador</option>
                  <option value="55" >Equatorial Guinea</option>
                  <option value="56" >Eritrea</option>
                  <option value="57" >Estonia</option>
                  <option value="58" >Ethiopia</option>
                  <option value="59" >Fiji</option>
                  <option value="60" >Finland</option>
                  <option value="61" >France</option>
                  <option value="62" >Gabon</option>
                  <option value="63" >Gambia, The</option>
                  <option value="64" >Georgia</option>
                  <option value="65" >Germany</option>
                  <option value="66" >Ghana</option>
                  <option value="67" >Greece</option>
                  <option value="68" >Grenada</option>
                  <option value="69" >Guatemala</option>
                  <option value="70" >Guinea</option>
                  <option value="71" >Guinea-Bissau</option>
                  <option value="72" >Guyana</option>
                  <option value="73" >Haiti</option>
                  <option value="74" >Honduras</option>
                  <option value="75" >Hungary</option>
                  <option value="76" >Iceland</option>
                  <option value="77" >India</option>
                  <option value="78" >Indonesia</option>
                  <option value="79" >Iran</option>
                  <option value="80" >Iraq</option>
                  <option value="81" >Ireland</option>
                  <option value="82" >Israel</option>
                  <option value="83" >Italy</option>
                  <option value="84" >Jamaica</option>
                  <option value="85" >Japan</option>
                  <option value="86" >Jordan</option>
                  <option value="87" >Kazakhstan</option>
                  <option value="88" >Kenya</option>
                  <option value="89" >Kiribati</option>
                  <option value="90" >Korea, North</option>
                  <option value="91" >Korea, South</option>
                  <option value="92" >Kuwait</option>
                  <option value="93" >Kyrgyzstan</option>
                  <option value="94" >Laos</option>
                  <option value="95" >Latvia</option>
                  <option value="96" >Lebanon</option>
                  <option value="97" >Lesotho</option>
                  <option value="98" >Liberia</option>
                  <option value="99" >Libya</option>
                  <option value="100" >Liechtenstein</option>
                  <option value="101" >Lithuania</option>
                  <option value="102" >Luxembourg</option>
                  <option value="103" >Macedonia</option>
                  <option value="104" >Madagascar</option>
                  <option value="105" >Malawi</option>
                  <option value="106" >Malaysia</option>
                  <option value="107" >Maldives</option>
                  <option value="108" >Mali</option>
                  <option value="109" >Malta</option>
                  <option value="110" >Marshall Islands</option>
                  <option value="111" >Mauritania</option>
                  <option value="112" >Mauritius</option>
                  <option value="113" >Mexico</option>
                  <option value="114" >Micronesia</option>
                  <option value="115" >Moldova</option>
                  <option value="116" >Monaco</option>
                  <option value="117" >Mongolia</option>
                  <option value="118" >Morocco</option>
                  <option value="119" >Mozambique</option>
                  <option value="120" >Myanmar</option>
                  <option value="121" >Namibia</option>
                  <option value="122" >Nauru</option>
                  <option value="123" >Nepa</option>
                  <option value="124" >Netherlands</option>
                  <option value="125" >New Zealand</option>
                  <option value="126" >Nicaragua</option>
                  <option value="127" >Niger</option>
                  <option value="128" >Nigeria</option>
                  <option value="129" >Norway</option>
                  <option value="130" >Oman</option>
                  <option value="131" >Pakistan</option>
                  <option value="132" >Palau</option>
                  <option value="133" >Panama</option>
                  <option value="134" >Papua New Guinea</option>
                  <option value="135" >Paraguay</option>
                  <option value="136" >Peru</option>
                  <option value="137" >Philippines</option>
                  <option value="138" >Poland</option>
                  <option value="139" >Portugal</option>
                  <option value="140" >Qatar</option>
                  <option value="141" >Romania</option>
                  <option value="142" >Russia</option>
                  <option value="143" >Rwanda</option>
                  <option value="144" >Saint Kitts and Nevis</option>
                  <option value="145" >Saint Lucia</option>
                  <option value="146" >Saint Vincent</option>
                  <option value="147" >Samoa</option>
                  <option value="148" >San Marino</option>
                  <option value="149" >Sao Tome and Principe</option>
                  <option value="150" >Saudi Arabia</option>
                  <option value="151" >Senegal</option>
                  <option value="152" >Serbia and Montenegro</option>
                  <option value="153" >Seychelles</option>
                  <option value="154" >Sierra Leone</option>
                  <option value="155" >Singapore</option>
                  <option value="156" >Slovakia</option>
                  <option value="157" >Slovenia</option>
                  <option value="158" >Solomon Islands</option>
                  <option value="159" >Somalia</option>
                  <option value="160" >South Africa</option>
                  <option value="161" >Spain</option>
                  <option value="162" >Sri Lanka</option>
                  <option value="163" >Sudan</option>
                  <option value="164" >Suriname</option>
                  <option value="165" >Swaziland</option>
                  <option value="166" >Sweden</option>
                  <option value="167" >Switzerland</option>
                  <option value="168" >Syria</option>
                  <option value="169" >Taiwan</option>
                  <option value="170" >Tajikistan</option>
                  <option value="171" >Tanzania</option>
                  <option value="172" >Thailand</option>
                  <option value="173" >Togo</option>
                  <option value="174" >Tonga</option>
                  <option value="175" >Trinidad and Tobago</option>
                  <option value="176" >Tunisia</option>
                  <option value="177" >Turkey</option>
                  <option value="178" >Turkmenistan</option>
                  <option value="179" >Tuvalu</option>
                  <option value="180" >Uganda</option>
                  <option value="181" >Ukraine</option>
                  <option value="182" >United Arab Emirates</option>
                  <option value="183" >United Kingdom</option>
                  <option value="184" >United States</option>
                  <option value="185" >Uruguay</option>
                  <option value="186" >Uzbekistan</option>
                  <option value="187" >Vanuatu</option>
                  <option value="188" >Vatican City</option>
                  <option value="189" >Venezuela</option>
                  <option value="190" >Vietnam</option>
                  <option value="191" >Yemen</option>
                  <option value="192" >Zambia</option>
                  <option value="193" >Zimbabwe</option>
                  <option value="194" >Se desconoce</option>
               </select>
               <br>
               <label for="bloqueo8" class="form-check-label">Se desconoce</label>
               <input type="checkbox" id="bloqueo8" name="pais_desconoce" value="Se desconoce" onchange="check8(this)">
            </div>
            <script>
               function selectOnChange3(sel) {
               	if (sel.value=="7"){
                                      divC = document.getElementById("provinciasARG");
               	    divB = document.getElementById("localidadAR");
                                      divC.style.display = "";
               	    divB.style.display = "";
               	}else{
                                      divC = document.getElementById("provinciasARG");
               	    divB = document.getElementById("provinciasARG");
               	    $('#victima_provincia').val('');
                                      divB.style.display = "none";
               	    divC.style.display="none";
               	}

                                  if (sel.value=="185"){
                                      divC = document.getElementById("provinciasUR");
                                      divC.style.display = "";
                                  }else{
                                      divC = document.getElementById("provinciasUR");
                                      $('#victima_provincia').val('');
                                      divC.style.display="none";
                                  }

               	if (sel.value=="24") {
               	   divC = document.getElementById("provinciasBR");
               	   divC.style.display = "";
               	}else{
               	    divC = document.getElementById("provinciasBR");
               	    $('#victima_provincia').val('');
               	    divC.style.display="none";
               	}

                                  if (sel.value=="35") {
                                     divC = document.getElementById("provinciasCH");
                                     divC.style.display = "";
                                  }else{
                                      divC = document.getElementById("provinciasCH");
                                      $('#victima_provincia').val('');
                                      divC.style.display="none";
                                  }
               }
                              function check8(checkbox)
                              {
                                  if (checkbox.checked)
                                  {
                                      $('#pais_id').val('194');
                                      document.getElementById('pais_id').setAttribute("readonly", "readonly");
                                  }else
                                      {
                                          $('#pais_id').val('');
                                          document.getElementById('pais_id').removeAttribute("readonly");
                                      }
                              }

            </script>
            <div class="form-group" id="provinciasARG">
               <label for="">D 4. Provincia del hecho: </label>
               <select class="form-control" id="argprovincia_id" name="argprovincia_id">
                  <option value="">Elegí Provincia</option>
                  <option value="1" >Buenos Aires</option>
                  <option value="2" >Buenos Aires-GBA</option>
                  <option value="3" >Capital Federal</option>
                  <option value="4" >Catamarca</option>
                  <option value="5" >Chaco</option>
                  <option value="6" >Chubut</option>
                  <option value="7" >Córdoba</option>
                  <option value="8" >Corrientes</option>
                  <option value="9" >Entre Ríos</option>
                  <option value="10" >Formosa</option>
                  <option value="11" >Jujuy</option>
                  <option value="12" >La Pampa</option>
                  <option value="13" >La Rioja</option>
                  <option value="14" >Mendoza</option>
                  <option value="15" >Misiones</option>
                  <option value="16" >Neuquén</option>
                  <option value="17" >Río Negro</option>
                  <option value="18" >Salta</option>
                  <option value="19" >San Juan</option>
                  <option value="20" >San Luis</option>
                  <option value="21" >Santa Cruz</option>
                  <option value="22" >Santa Fe</option>
                  <option value="23" >Santiago del Estero</option>
                  <option value="24" >Tierra del Fuego</option>
                  <option value="25" >Tucumán</option>
                  <option value="26" >Se desconoce</option>
               </select>
               <br>
               <label for="bloqueo9" class="form-check-label">Se desconoce</label>
               <input type="checkbox" id="bloqueo9" name="provinciasARG_desconoce" value="Se desconoce" onchange="check9(this)">
            </div>
            <script>
               function check9(checkbox)
               {
                   if (checkbox.checked)
                   {
                       $('#argprovincia_id').val('26');
                       document.getElementById('argprovincia_id').setAttribute("readonly", "readonly");
                   }else
                       {
                           $('#argprovincia_id').val('');
                           document.getElementById('argprovincia_id').removeAttribute("readonly");
                       }
               }
            </script>
            <div class="form-group" id="provinciasARG">
               <label for="">D 5. Ciudad del hecho: </label>
               <select class="form-control" id="argprovincia_id" name="argprovincia_id">
                  <option value="">Elegí Ciudad</option>
                  <option value="1" >Buenos Aires</option>
                  <option value="2" >Buenos Aires-GBA</option>
                  <option value="3" >Capital Federal</option>
                  <option value="4" >Catamarca</option>
                  <option value="5" >Chaco</option>
                  <option value="6" >Chubut</option>
                  <option value="7" >Córdoba</option>
                  <option value="8" >Corrientes</option>
                  <option value="9" >Entre Ríos</option>
                  <option value="10" >Formosa</option>
                  <option value="11" >Jujuy</option>
                  <option value="12" >La Pampa</option>
                  <option value="13" >La Rioja</option>
                  <option value="14" >Mendoza</option>
                  <option value="15" >Misiones</option>
                  <option value="16" >Neuquén</option>
                  <option value="17" >Río Negro</option>
                  <option value="18" >Salta</option>
                  <option value="19" >San Juan</option>
                  <option value="20" >San Luis</option>
                  <option value="21" >Santa Cruz</option>
                  <option value="22" >Santa Fe</option>
                  <option value="23" >Santiago del Estero</option>
                  <option value="24" >Tierra del Fuego</option>
                  <option value="25" >Tucumán</option>
                  <option value="26" >Se desconoce</option>
               </select>
               <br>
               <label for="bloqueo10" class="form-check-label">Se desconoce</label>
               <input type="checkbox" id="bloqueo9" name="provinciasARG_desconoce" value="Se desconoce" onchange="check9(this)">
            </div>
            <script>
               function check9(checkbox)
               {
                   if (checkbox.checked)
                   {
                       $('#argprovincia_id').val('26');
                       document.getElementById('argprovincia_id').setAttribute("readonly", "readonly");
                   }else
                       {
                           $('#argprovincia_id').val('');
                           document.getElementById('argprovincia_id').removeAttribute("readonly");
                       }
               }
            </script>
            </script>
            <button type="submit" class="btn btn-primary col-xl" name="button">Enviar</button>
         </form>
      </section>
   </body>
</html>
