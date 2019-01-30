<!DOCTYPE html>
<html lang="en">
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
      <li class="nav-item"> <a class="nav-link " href="#">Eje A: Datos institucionales</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioB4victimas.php">Eje B: Caracterización de la victima y su contexto</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioC4victimas.php">Eje C: Grupo Conviviente</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioD4victimas.php">Eje D: Caracterización de delito</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioE4victimas.php">Eje E: Datos del imputado</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioF4victimas.php">Eje F: Atención del caso</a> </li>
      <li class="nav-item"> <a class="nav-link " href="formularioG4victimas.php">Eje G: Documentación</a> </li>
    </ul>
</header>
<body>
    <h1 class="text-center" style="padding: 15px;">Eje A: Datos institucionales</h1>

    <section class="container">
            <form class="" action="" method="post">
            <input type="hidden" name="_token" value="WsSjwRfaowBqFaOeDaMHgdvXFBiRpgdOYXGPxlXj">

            <div class="form-group ">
                <label for="datos_nombre_referencia">A 1. Nombre de referencia:</label>
                <input type="text" class="form-control" name="datos_nombre_referencia" id="datos_nombre_referencia" value="">

            </div>
            <div class="form-group ">


                                  <div class="AunoDos">
                                  <label for="">A 2. Tipo de delito:</label><br>
                                  <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
                                  <div class="Auno">
                                  <input type="checkbox" value="1" class="form-check-inline" name="tipos_delitos[]" id="abandono_de_persona">
                                  <label for="abandono_de_persona" class="form-check-inline form-check-label">Abandono de persona</label><br>
                                  <input type="checkbox" value="2" class="form-check-inline" name="tipos_delitos[]" id="abuso_sexual">
                                  <label for="abuso_sexual" class="form-check-inline form-check-label">Abuso sexual</label> <br>
                                  <input type="checkbox" value="3" class="form-check-inline" name="tipos_delitos[]" id="abuso sexual_seguido_de_muerte">
                                  <label for="abuso sexual_seguido_de_muerte" class="form-check-inline form-check-label">Abuso sexual seguido de muerte</label><br>
                                  <input type="checkbox" value="4" class="form-check-inline" name="tipos_delitos[]" id="acoso_sexual">
                                  <label for="acoso_sexual" class="form-check-inline form-check-label">Acoso sexual</label><br>
                                  <input type="checkbox" value="5" class="form-check-inline" name="tipos_delitos[]" id="amenazas">
                                  <label for="amenazas" class="form-check-inline form-check-label">Amenazas</label><br>
                                  <input type="checkbox" value="6" class="form-check-inline" name="tipos_delitos[]" id="Averiguación_causales_muerte">
                                  <label for="Averiguación_causales_muerte" class="form-check-inline form-check-label">Averiguación de causales de muerte</label><br>
                                  <input type="checkbox" value="7" class="form-check-inline" name="tipos_delitos[]" id="bullying">
                                  <label for="bullying" class="form-check-inline form-check-label">Bullying</label><br>
                                  <input type="checkbox" value="8" class="form-check-inline" name="tipos_delitos[]" id="catastrofes_naturales">
                                  <label for="catastrofes_naturales" class="form-check-inline form-check-label">Catástrofes naturales</label><br>
                                  <input type="checkbox" value="9" class="form-check-inline" name="tipos_delitos[]" id="desaparicion_personas">
                                  <label for="desaparicion_personas" class="form-check-inline form-check-label">Desaparición de personas</label><br>
                                  <input type="checkbox" value="10" class="form-check-inline" name="tipos_delitos[]" id="femicidio">
                                  <label for="femicidio" class="form-check-inline form-check-label">Femicidio</label><br>
                                  <input type="checkbox" value="11" class="form-check-inline" name="tipos_delitos[]" id="femicidio_indirecto">
                                  <label for="femicidio_indirecto" class="form-check-inline form-check-label">Femicidio indirecto</label><br>
                                  <input type="checkbox" value="12" class="form-check-inline" name="tipos_delitos[]" id="grooming">
                                  <label for="grooming" class="form-check-inline form-check-label">Grooming</label><br>
                                  <input type="checkbox" value="13" class="form-check-inline" name="tipos_delitos[]" id="homicidio">
                                  <label for="homicidio" class="form-check-inline form-check-label">Homicidio</label><br>
                                  <input type="checkbox" value="14" class="form-check-inline" name="tipos_delitos[]" id="instigacion_ayuda_suicidio">
                                  <label for="instigacion_ayuda_suicidio" class="form-check-inline form-check-label">Instigación o ayuda al suicidio</label><br>
                                  <input type="checkbox" value="15" class="form-check-inline" name="tipos_delitos[]" id="lesiones">
                                  <label for="lesiones" class="form-check-inline form-check-label">Lesiones</label><br>
                                  <input type="checkbox" value="16" class="form-check-inline" name="tipos_delitos[]" id="pornografia_menores">
                                  <label for="pornografia_menores" class="form-check-inline form-check-label">Pornografía de menores</label><br>
                                  <input type="checkbox" value="17" class="form-check-inline" name="tipos_delitos[]" id="privacion_ilegal_libertad">
                                  <label for="privacion_ilegal_libertad" class="form-check-inline form-check-label">Privación ilegal de la libertad</label><br>
                                </div>
                                <div class="Ados">
                                  <input type="checkbox" value="18" class="form-check-inline" name="tipos_delitos[]" id="promocion_facilitacion_corrupcion_menores">
                                  <label for="promocion_facilitacion_corrupcion_menores" class="form-check-inline form-check-label">Promoción y facilitación de corrupción de menores</label><br>
                                  <input type="checkbox" value="19" class="form-check-inline" name="tipos_delitos[]" id="promocion_facilitacion_prostitucion_ mayores">
                                  <label for="promocion_facilitacion_prostitucion_ mayores" class="form-check-inline form-check-label">Promoción y facilitación de prostitución de mayores</label><br>
                                  <input type="checkbox" value="20" class="form-check-inline" name="tipos_delitos[]" id="promoción_facilitacion_prostitucion_menores">
                                  <label for="promoción_facilitacion_prostitucion_menores " class="form-check-inline form-check-label">Promoción y facilitación de prostitución de menores</label><br>
                                  <input type="checkbox" value="21" class="form-check-inline" name="tipos_delitos[]" id="reducción_servidumbre">
                                  <label for="reducción_servidumbre" class="form-check-inline form-check-label">Reducción a la servidumbre</label><br>
                                  <input type="checkbox" value="22" class="form-check-inline" name="tipos_delitos[]" id="robo_agravado">
                                  <label for="robo_agravado" class="form-check-inline form-check-label">Robo agravado</label><br>
                                  <input type="checkbox" value="23" class="form-check-inline" name="tipos_delitos[]" id="robo_seguido_muerte">
                                  <label for="robo_seguido_muerte" class="form-check-inline form-check-label">Robo seguido de muerte (criminis causa, art. 80 inc. 7)</label><br>
                                  <input type="checkbox" value="24" class="form-check-inline" name="tipos_delitos[]" id="secuestro">
                                  <label for="secuestro" class="form-check-inline form-check-label">Secuestro</label><br>
                                  <input type="checkbox" value="25" class="form-check-inline" name="tipos_delitos[]" id="secuestro_seguido_muerte">
                                  <label for="secuestro_seguido_muerte" class="form-check-inline form-check-label">Secuestro seguido de muerte</label><br>
                                  <input type="checkbox" value="26" class="form-check-inline" name="tipos_delitos[]" id="siniestro_vial">
                                  <label for="siniestro_vial" class="form-check-inline form-check-label">Siniestro vial</label><br>
                                  <input type="checkbox" value="27" class="form-check-inline" name="tipos_delitos[]" id="suicidio">
                                  <label for="suicidio" class="form-check-inline form-check-label">Suicidio</label><br>
                                  <input type="checkbox" value="28" class="form-check-inline" name="tipos_delitos[]" id="tentativa_homicidio">
                                  <label for="tentativa_homicidio" class="form-check-inline form-check-label">Tentativa de homicidio</label><br>
                                  <input type="checkbox" value="29" class="form-check-inline" name="tipos_delitos[]" id="tentativa_suicidio">
                                  <label for="tentativa_suicidio" class="form-check-inline form-check-label">Tentativa de suicidio</label><br>
                                  <input type="checkbox" value="30" class="form-check-inline" name="tipos_delitos[]" id="tortura">
                                  <label for="tortura" class="form-check-inline form-check-label">Tortura</label><br>
                                  <input type="checkbox" value="31" class="form-check-inline" name="tipos_delitos[]" id="usurpacion">
                                  <label for="usurpacion" class="form-check-inline form-check-label">Usurpación</label><br>
                                  <input type="checkbox" value="32" class="form-check-inline" name="tipos_delitos[]" id="violencia_genero">
                                  <label for="violencia_genero" class="form-check-inline form-check-label">Violencia de género</label><br>
                                  <input type="checkbox" value="33" class="form-check-inline" name="tipos_delitos[]" id="violencia_espectaculos_deportivos ">
                                  <label for="violencia_espectaculos_deportivos " class="form-check-inline form-check-label">Violencia en espectáculos deportivos</label><br>
                                  <input type="checkbox" value="35" class="form-check-inline" name="tipos_delitos[]" id="violencia_institucional">
                                  <label for="violencia_institucional" class="form-check-inline form-check-label">Violencia institucional</label><br>
                                  <input type="checkbox" value="36" class="form-check-inline" name="tipos_delitos[]" id="violenciaf_familiar">
                                  <label for="violenciaf_familiar" class="form-check-inline form-check-label">Violencia familiar</label><br>
                                  <input type="checkbox" value="37" class="form-check-inline" name="tipos_delitos[]"  id="checkeado"  onclick="muestroCualA2()">
                                  <label for="otro" class="form-check-inline form-check-label" >otro</label><br>
                                 </div>

                                   </div>
                                </div>

                                <div id="cualA2"style="display:none">

                                <label for="tipos_delitos_cual">Cuál?:</label>
                                <input class="form-control" name="tipos_delitos_otro_cual" type="text" id="tipos_delitos_otro_cual">

                                </div>


                              <div class="form-group ">
                                <label for="breve_descripcion_caso">A 3. Breve descripciòn del caso:</label>
                                <input type="text" class="form-control" name="breve_descripcion_caso" id="breve_descripcion_caso" value="" style="height:80px">

                              </div>
                              <div class="form-group ">
                                  <label for="datos_fecha_ingreso">A 4. Fecha de Ingreso:</label>
                                  <input type="date" class="form-control" name="datos_fecha_ingreso" id="datos_fecha_ingreso" value="">

                              </div>




                              <div class="form-group ">
                                  <label for="modalidad_id">A 5. Modalidad de Ingreso</label>
                                  <select class="form-control" name="modalidad_id" id="modalidad_id" onChange="selectOnChangeA5(this)" >

                                                                                              <option value="1" >Presentación espontánea</option>
                                                                                              <option value="2" >Intervenciòn de oficio</option>
                                                                                              <option value="3" >Derivación de otro organismo</option>


                                                          </select>



                                  <div id="derivacion_otro_organismo_id" style="display: none;"><br>
                                      <select class="form-control" onChange="selectOnChangeA5bis(this)" name="derivacion_otro_organismo_id" id="otro_organismo">
                                          <option value=" ">Que Organismo?</option>

                                          <option value="1" >Unidad de Ministro (Ministerio de Justicia)</option>
                                                          <option value="2" >Organismo Provincial de Niñez y Adolescencia</option>
                                                          <option value="3" > Portal Mi Provincia</option>
                                                          <option value="4" >Registro Provincial de Información de Personas Menores de Edad Extraviadas (REPIPME)</option>
                                                          <option value="5" >Fiscalía</option>
                                                          <option value="6" >Comisaría</option>
                                                          <option value="7" >Municipio</option>
                                                          <option value="8" >Centro de Acceso a Justicia (CAJ)</option>
                                                          <option value="9" >Defensoría del Pueblo</option>
                                                          <option value="10" >Estado en Tu Barrio</option>
                                                          <option value="11" >DDI</option>
                                                          <option value="12" >Cerca de Noche</option>
                                                          <option value="13" >Equipo territorial de barrios</option>
                                                          <option value="14" >Otro</option>
                            </select>
                            </div>

                            <div id="cualA5" style="display: none;">
                            <br><label for="">Cuál?</label>
                            <div class="">
                            <input class="form-control" name="derivacion_otro_organismo_cual" id="derivacion_otro_organismo_cual" type="text">
                            </div>
                            </div>
                            </div>
                            <div class="form-group ">
                              <div class="AunoDos">
                                                <label for="">A 6. CAVAJ interviniente:</label><br>
                                                <label for="">En caso de requerir, tildar todas las opciones que considere correspondientes.</label><br>
                                                <div class="Auno">
                                  <input type="checkbox" value="1" class="form-check-inline" name="cavaj_intervinientes[]" id="la_plata">
                                  <label for="la_plata" class="form-check-inline form-check-label">Sede Central (La Plata)</label></label><br>
                                  <input type="checkbox" value="2" class="form-check-inline" name="cavaj_intervinientes[]" id="moron">
                                 <label for="moron" class="form-check-inline form-check-label">Morón</label></label><br>
                                 <input type="checkbox" value="3" class=" form-check-inline" name="cavaj_intervinientes[]" id="azul">
                                <label for="azul" class="form-check-inline form-check-label">Azul</label></label><br>
                                <input type="checkbox" value="4" class=" form-check-inline" name="cavaj_intervinientes[]" id="pergamino">
                                <label for="pergamino" class="form-check-inline form-check-label">Pergamino</label><br>
                                <input type="checkbox" value="5" class=" form-check-inline" name="cavaj_intervinientes[]" id="bahia_blanca">
                                <label for="bahia_blanca" class="form-check-inline form-check-label">Bahía Blanca</label><br>
                               <input type="checkbox" value="6" class=" form-check-inline" name="cavaj_intervinientes[]" id="pilar">
                               <label for="pilar" class="form-check-inline form-check-label">Pilar</label><br>
                              <input type="checkbox" value="7" class=" form-check-inline" name="cavaj_intervinientes[]" id="ezeiza">
                               <label for="ezeiza" class="form-check-inline form-check-label">Ezeiza</label><br>
                               <input type="checkbox" value="8" class=" form-check-inline" name="cavaj_intervinientes[]" id="pinamar">
                               <label for="pinamar" class="form-check-inline form-check-label">Pinamar</label><br>
                               <input type="checkbox" value="9" class=" form-check-inline" name="cavaj_intervinientes[]" id="lanus">
                               <label for="lanus" class="form-check-inline form-check-label">Lanús</label><br>
                              <input type="checkbox" value="10" class=" form-check-inline" name="cavaj_intervinientes[]" id="quilmes">
                              <label for="quilmes" class="form-check-inline form-check-label">Quilmes</label><br>
                              <input type="checkbox" value="11" class=" form-check-inline" name="cavaj_intervinientes[]" id="lomas_de_zamora">
                              <label for="lomas_de_zamora" class="form-check-inline form-check-label">Lomas de Zamora</label><br>
                            </div>
                            <div class="Ados">

                              <input type="checkbox" value="12" class=" form-check-inline" name="cavaj_intervinientes[]" id="san_fernando">
                              <label for="san_fernando" class="form-check-inline form-check-label">San Fernando</label><br>
                              <input type="checkbox" value="13" class=" form-check-inline" name="cavaj_intervinientes[]" id="los_toldos">
                              <label for="los_toldos" class="form-check-inline form-check-label">Los Toldos</label><br>
                              <input type="checkbox" value="14" class=" form-check-inline" name="cavaj_intervinientes[]" id="san_martin">
                              <label for="san_martin" class="form-check-inline form-check-label">San Martín</label><br>
                              <input type="checkbox" value="15" class=" form-check-inline" name="cavaj_intervinientes[]" id="mar_del_plata">
                              <label for="mar_del_plata" class="form-check-inline form-check-label">Mar del Plata</label><br>
                              <input type="checkbox" value="16" class=" form-check-inline" name="cavaj_intervinientes[]" id="tandil">
                              <label for="tandil" class="form-check-inline form-check-label">Tandil</label><br>
                              <input type="checkbox" value="17" class=" form-check-inline" name="cavaj_intervinientes[]" id="mercedes">
                              <label for="mercedes" class="form-check-inline form-check-label">Mercedes</label><br>
                            <input type="checkbox" value="18" class=" form-check-inline" name="cavaj_intervinientes[]" id="vicente_lopez">
                            <label for="vicente_lopez" class="form-check-inline form-check-label">Vicente López</label><br>
                            <input type="checkbox" value="19" class=" form-check-inline" name="cavaj_intervinientes[]" id="moreno">
                              <label for="moreno" class="form-check-inline form-check-label">Moreno</label><br>
                            <input type="checkbox" value="20" class=" form-check-inline" name="cavaj_intervinientes[]" id="zarate">
                              <label for="zarate" class="form-check-inline form-check-label">Zárate</label><br>
                            <input type="checkbox" value="21" class=" form-check-inline" name="cavaj_intervinientes[]" id="Jose_Paz">
                              <label for="Jose_Paz" class="form-check-inline form-check-label">José C. Paz</label><br>
                            <input type="checkbox" value="22" class=" form-check-inline" name="cavaj_intervinientes[]" id="almirante_brown">
                              <label for="almirante_brown" class="form-check-inline form-check-label">Almirante Brown</label><br>
                            <input type="checkbox" value="23" class=" form-check-inline" name="cavaj_intervinientes[]" id="la_matanza">
                              <label for="la_matanza" class="form-check-inline form-check-label">La Matanza</label><br>


                            </div></div>


                            <div class="form-group ">
                                <label for="datos_ente_judicial">A 7. Fiscalía/Juzgado a cargo:</label>
                                <input type="text" class="form-control" name="datos_ente_judicial" id="datos_ente_judicial" value="">

                            </div>

                            <div class="form-group ">
                                <label for="datos_nro_causa">A 8. N° Causa o Id Judicial:</label>
                                <input type="text" class="form-control" name="datos_nro_causa" value="">

                            </div>
                            <div class="form-group ">
                                <label for="comisaria_interviniente">A 9. Comisaría interviniente:</label>
                                <input type="text" class="form-control" name="comisaria_interviniente" value="">

                            </div>
                            <div class="form-group ">
                                <label for="denuncias_previas">A 10.¿Hubo denuncias previas vinculadas a la temática del tipo de delito actual?:</label>
                                <select class="form-control" name="denuncias_previas">
                                <option value="">Estado Actual</option>
                                                                                <option value="1" >Sí</option>
                                                                                <option value="2" >No</option>
                                                                                <option value="3" >Se desconoce</option>

                                                    </select>

                            </div>
                            <div class="form-group ">
                                <label for="departamento_judicial">A 11.Departamento judicial:</label>
                            <select class="form-control"  name="departamento_judicial">
                                <option value="">Departamento Judicial</option>

                                                <option value="1" >Azul</option>
                                                <option value="2" >Bahía Blanca</option>
                                                <option value="3" >Dolores<option>
                                                <option value="4" >General San Martín</option>
                                                <option value="5" >Junín</option>
                                                <option value="6" >La Matanza</option>
                                                <option value="7" >La Plata</option>
                                                <option value="8" >Lomas de Zamora</option>
                                                <option value="9" >Mar del Plata</option>
                                                <option value="10" >Mercedes</option>
                                                <option value="11" >Moreno - General Rodríguez</option>
                                                <option value="12" >Morón</option>
                                                <option value="13" >Necochea</option>
                                                <option value="14" >Pergamino</option>
                                                <option value="15" >Quilmes</option>
                                                <option value="16" >San Isidro</option>
                                                <option value="17" >San Nicolás</option>
                                                <option value="18" >Trenque Lauquen</option>
                                                <option value="19" >Zárate - Campana</option>
                            </select>

                            <div class="form-group ">
                                <label for="estadocaso_id">A 12. Estado:</label>
                                <select class="form-control" name="estadocaso_id" onChange="selectOnChangeA12(this)">
                                <option value="">Estado:</option>
                                                                                <option value="1" >Activo</option>
                                                                                <option value="2" >Pasivo</option>


                                                    </select>

                            </div>
                            <div id="pase_pasivo" style="display:none">
                            <label for="">A12I. Motivo de pase a pasivo:</label>
                            <select class="form-control" onChange="selectOnChangeA12bis(this)" name="motivo_pase_pasivo" id="motivo_pase_pasivo">
                                <option value="">Motivo de pase a pasivo:</option>

                                                <option value="1" >Se cubrió la demanda inicial</option>
                                                <option value="2" >Deja de requerir intervención</option>
                                                <option value="3" >Imposibilidad de contacto</option>
                                                <option value="4" >Otro</option>
                                                </select>
                               </div>
                                                  <div id="cualA12" style="display: none;">
                                                  <br><label for="">Cuál?</label>
                                                  <div class="">
                                                  <input class="form-control" name="motivo_pase_pasivo" type="text" id="motivo_pase_pasivo_cual">
                                                  </div>
                                                  </div>

                                                  <div class="form-group ">
                                                      <label for="victima_nombre_y_apellido">A 13. Nombre y apellido de la víctima:</label>
                                                      <input type="text" class="form-control" name="victima_nombre_y_apellido" id="victima_nombre_y_apellido" value="">

                                                  </div>


                                                  <div class="form-group ">
                                                      <label for="es_la_victima">A 14. ¿Es la persona asistida la víctima directa?:</label>
                                                      <select class="form-control" name="es_la_victima" onChange="selectOnChangeA14(this)">
                                                      <option value=""></option>
                                                                                                      <option value="1" >Sí</option>
                                                                                                      <option value="2" >No</option>


                                                                          </select>

                                                                        <!--ACA HAY QUE HACER UN DIV DISPLAY NONE QUE SE MUESTRE EN CASO DE QUE A.14 FUERA NEGATIVA-->
                                                                        <div id="personas_asistidas" style="display:none">
                                                                        <div class="form-group ">
                                                                            <label for="Nombre_apellido_persona_asistida">A 14I. Nombre y apellido de la persona asistida: </label>
                                                                            <input type="text" class="form-control" name="Nombre_apellido_persona_asistida" id="Nombre_apellido_persona_asistida" value="">

                                                                        </div>


                                                                        <div class="form-group ">
                                                                            <label for="vinculo_victima">A 14II. Tipo de vínculo con la víctima: </label>
                                                                            <select class="form-control" name="vinculo_victima" id="vinculo_victima" onChange="selectOnChangeA14II(this)">
                                                                            <option value=""></option>
                                                                                                                            <option value="1" >Familiar</option>
                                                                                                                            <option value="2" >Lazo afectivo</option>
                                                                                                                            <option value="3" >Organismo o institución</option>
                                                                                                                            <option value="4" >Otro</option>


                                                                                                </select>
                                                                                              </div>

                                                                                              <div id="vinculo_victima_cual" style="display: none;">
                                                                                              <br><label for="">Cuál?</label>
                                                                                              <div class="">
                                                                                              <input class="form-control" name="vinculo_victima_cual" id="vinculo_victima_cual_otro" type="text">
                                                                                              </div>
                                                                                              </div>
                                                                                              <div class="form-group ">
                                                                                                  <label for="telefono_contacto">A 14III. Teléfono de contacto: </label>
                                                                                                  <input type="text" class="form-control" name="telefono_contacto" id="telefono_contacto" value="">

                                                                                              </div>
                                                                                              <div class="form-group ">
                                                                                                  <label for="domicilio_contacto">A 14 IV. Domicilio del contacto: </label>
                                                                                                  <input type="text" class="form-control" name="domicilio_contacto" id="domicilio_contacto" value="">

                                                                                              </div>

                                                                                              <div class="form-group ">
                                                                                                  <label for="localidad_residencia">A 14 V. Localidad de residencia: </label>
                                                                                                  <input type="text" class="form-control" name="localidad_residencia" id="localidad_residencia" value="">

                                                                                              </div>
                                                                                            </div>
                                                                                            </div>
                                                                        <!--ACA IRIA BOTON PARA AGREGAR MAS CONTACTOS CONTACTOS, IDEM PROF.INTERVINIENTES DE TRATA-->




                <div id="padre">
                    <div id="hijo">
                        <h3>A 15. Profesional Interviniente:</h3>
                        <div class="form-group ">
                            <label for="profesional_id">Profesional que interviene</label>
                            <select class="form-control" name="profesional_id[]">
                                <option value="">Seleccioná profesional</option>
                                                                    <option value="1">Jessica Nerina Seimandi - Dirección</option>
                                                                    <option value="2">Mercedes Ratti - Dirección</option>
                                                                    <option value="3">Elina Contreras - Dirección</option>
                                                                    <option value="4">Emiliano Lurbet - Equipo Barrios</option>
                                                                    <option value="5">Correa, Anabella - Equipo Barrios</option>
                                                                    <option value="6">Jose Maria Retamasso - Equipo Barrios</option>
                                                                    <option value="7">Carolina Cabral - Equipo Barrios</option>
                                                                    <option value="8">Horacio Renone - Equipo Barrios</option>
                                                                    <option value="9">Jorge samuel Chocobar - Equipo Barrios</option>
                                                                    <option value="10">Candela Chuliver - Equipo de rescate</option>
                                                                    <option value="11">Licia Cipollone - Equipo de rescate</option>
                                                                    <option value="12">Romina Camperchiolli - Equipo de rescate</option>
                                                                    <option value="13">Florencia Daireaux - Equipo de rescate</option>
                                                                    <option value="14">María Victoria García - Equipo de rescate</option>
                                                                    <option value="15">Pamela Gisela Ledesma - Equipo de rescate</option>
                                                                    <option value="16">Mauro Javier Salgueira - Equipo de rescate</option>
                                                                    <option value="17">María Eugenia Sánchez - Equipo de rescate</option>
                                                                    <option value="18">María Pilar Sanz - Equipo de rescate</option>
                                                                    <option value="19">Adrian Sein - Equipo de rescate</option>
                                                                    <option value="20">Martin Urtasun - Equipo de rescate</option>
                                                                    <option value="21">Paola Vazquez - Equipo de rescate</option>
                                                                    <option value="22">Angela Gonzalez Touzett - Equipo de rescate</option>
                                                                    <option value="23">Paola Vega De Nazar - Equipo de rescate</option>
                                                                    <option value="24">Belén Della Croce - Equipo de rescate</option>
                                                                    <option value="25">Diego Campero - Equipo de planificación</option>
                                                                    <option value="26">Maria Alejandro Cardoso - Equipo de planificación</option>
                                                                    <option value="27">Luciano Ramis - Equipo de planificación</option>
                                                                    <option value="28">Cecilia Svanossi - Equipo de planificación</option>
                                                                    <option value="29">Paula Labombarda - Equipo de planificación</option>
                                                                    <option value="30">Camila Ledesma - Equipo de planificación</option>
                                                                    <option value="31">Luciana Salgueira - Equipo de planificación</option>
                                                                    <option value="32">María Garro - Administrativo</option>
                                                                    <option value="33">Soledad Iglesias - Administrativo</option>
                                                                    <option value="34">Denisse Noguera - Administrativo</option>
                                                                    <option value="35">Florencia Sánchez Turi - Administrativo</option>
                                                                    <option value="36">Rosario Sánchez - Subsecretaría</option>
                                                                    <option value="37">Lorena Signore - Subsecretaría</option>
                                                                    <option value="38">Lucía Moreno - Subsecretaría</option>
                                                            </select>

                        </div>



                        <div class="form-group ">
                            <label for="datos_profesional_interviene_desde">A 15.3 Interviene desde:</label>
                            <input type="date" class="form-control" name="datos_profesional_interviene_desde[]" id="datos_profesional_interviene_desde" value="">

                        </div>

                        <div class="form-group ">
                            <label for="profesionalactualmente_id">A 15.4 Actualmente Interviene:</label>
                            <select class="form-control" name="profesionalactualmente_id[]" onChange="selectOnChange15(this)">
                                <option value="">Actualmente interviene?</option>
                                                                    <option value="1">Si</option>
                                                                    <option value="2">No</option>
                                                            </select>

                            </div>

                            <div id="no" style="display: none;">
                                <div class="form-group ">
                                    <label for="datos_profesional_interviene_hasta">A 9.5 Interviene hasta:</label>
                                    <input type="date" class="form-control" name="datos_profesional_interviene_hasta[]" id="datos_profesional_interviene_desde" value="">

                                </div>
                            </div>
                        </div>
                    </div>




            <button type="submit" class="btn btn-primary col-xl" name="button">Enviar</button><br><br>

        </form>
<button id="anadir" class="btn btn-outline-primary col-xl anadirProfesional" type="button"> Agregar profesional </button><br><br>


        <button id="borra" class="btn btn-outline-danger col-xl" type="button" onclick="borra()">Borrar profesional</button><br><br>

    </section>



            <script>
                var padres = $('div#padre').children('div#hijo').length;
                console.log(padres);
            </script>


            <script>
                //PRUEBA
                // var no = $('#no').html();

                // $('#actualmente').on('change', function (e){
                //     $('#hijo').append(no);
                //     });
                //FIN PRUEBA
                function selectOnChange1(sel) {
                    if (sel.value=="2"){
                        divC = document.getElementById("no");
                        divC.style.display = "";
                    }else{
                        divC = document.getElementById("no");
                        $('#datos_profesional_interviene_hasta').val('');
                        divC.style.display="none";
                    }
                }
            </script>


            <script>
                // $(document).ready(function(){
                //     var nueva_entrada ='';
                //     $(document).ready(function() {
                    var nueva_entrada = $('#padre').html();
                    // });

                    $("#anadir").click(function(){
                        $("#padre").append(nueva_entrada);
                    });

                // });

                function borra() {
                    $('#hijo').last().remove();
                   // var padre = document.getElementById("padre");
                   // var hijo = document.getElementById("hijo")
                   //  padre.removeChild(hijo);
                }
            </script>


            <script>
 		            function muestroCualA2() {
 		                var checkBox = document.getElementById("checkeado");
 		                var text = document.getElementById("cualA2");
 		                if (checkBox.checked == true){
 		                    text.style.display = "block";
 		                } else {
                      $('#tipos_delitos_otro_cual').val('');
 		                   text.style.display = "none";
 		                }
 		            }
                </script>

<script>
     function selectOnChangeA5bis(sel) {
       if (sel.value=="14"){
         divC = document.getElementById("cualA5");
         divC.style.display = "";}
         else{
            divC = document.getElementById("cualA5");
            $('#derivacion_otro_organismo_cual').val('');

            divC.style.display = "none";}
     }
</script>
                <script>
                     function selectOnChangeA5(sel) {
                       if (sel.value=="1"||sel.value=="2"){
                            divC = document.getElementById("derivacion_otro_organismo_id");
                            $('#otro_organismo').val(' ');
                            divC.style.display = "none";}


                       if (sel.value=="3"){
                            divC = document.getElementById("derivacion_otro_organismo_id");
                            divC.style.display = "";

                     }}
                </script>

                <script>
                     function selectOnChangeA12(sel) {

                                             if (sel.value=="2"){
                            divC = document.getElementById("pase_pasivo");
                            divC.style.display = "";

                     }
                     else{
                           divC = document.getElementById("pase_pasivo");
                           $('#motivo_pase_pasivo').val(' ');
                           divC.style.display = "none";}}
                </script>
                <script>
                     function selectOnChangeA12bis(sel) {
                       if (sel.value=="4"){
                         divC = document.getElementById("cualA12");
                         divC.style.display = "";}
                         else{
                            divC = document.getElementById("cualA12");
                            $('#motivo_pase_pasivo_cual').val('');

                            divC.style.display = "none";}
                     }
                </script>
                <script>
                     function selectOnChangeA14(sel) {
                       if (sel.value=="2"){
                         divC = document.getElementById("personas_asistidas");
                         divC.style.display = "";}
                         else{
                            divC = document.getElementById("personas_asistidas");
                            $('#Nombre_apellido_persona_asistida').val('');
                            $('#vinculo_victima').val('');
                            $('#vinculo_victima_cual_otro').val('');
                            $('#telefono_contacto').val('');
                            $('#domicilio_contacto').val('');
                            $('#localidad_residencia').val('');
                            divC.style.display = "none";}
                     }
                </script>
              <script>
                function selectOnChangeA14II(sel) {
                  if (sel.value=="4"){
                    divC = document.getElementById("vinculo_victima_cual");
                    divC.style.display = "";}
                    else{
                       divC = document.getElementById("vinculo_victima_cual");
                       $('#vinculo_victima_cual_otro').val('');

                       divC.style.display = "none";}
                }
                </script>
</body>
</html>
