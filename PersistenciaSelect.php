<?php
	$apiCall = curl_init("https://mapa2.electoral.gov.ar/geoserver/wfs?service=WFS&version=1.0.0&request=GetFeature&authkey=5ec628bcf2a5fff00edca3abf6c1727f&typeName=descargas:circuito_02&maxFeatures=2000&outputFormat=application%2Fjson");
	curl_setopt($apiCall, CURLOPT_RETURNTRANSFER, 1);
	$apiOutput = curl_exec($apiCall);
	curl_close($apiCall);
	$countries = json_decode($apiOutput, true);

	// $countries = ['Argentina', 'Brasil', 'Colombia', 'Perú'];

	$countryInPost = '';

	if ($_POST) {
		$countryInPost = $_POST['countries'];

	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Test Select</title>
	</head>
	<body>
		<form method="post">
			<select name="countries">
				<option value=""> Elegí </option>
				<?php foreach ($countries as $country): ?>
					<option
						value="<?= $country['name']; ?>"
						<?= $countryInPost == $country['name'] ? 'selected' : null ?>
					>
						<?= $country['name']; ?>
					</option>
				<?php endforeach; ?>
			</select>
			<br>
			<button type="submit">Enviar</button>
		</form>
	</body>
</html>
