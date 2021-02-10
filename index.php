<?php

	/*1)Crear una aplicación web en PHP para consumir servicio REST*/
	/*VALIDAR PRIMER VALOR DEL FORMULARIO*/
	if (isset($_GET['campo']))
	{
		/*OBTENER PARAMETRO DE BUSQUEDA*/
		$parametro = $_GET['campo'];
		echo "<center> Se han obtenido los valores del parametro </center> <br>";

		
		/*CONSUMIR SERVICIO REST*/
		$Dp_url = "https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items";
		/*OBTENER EL OBJETO*/
		$Dp_json = file_get_contents($Dp_url);
		/*TRABAJAR CON EL OBJETO COMO ARRAY*/
		$Dp_array = json_decode($Dp_json, true);

		
		/*RECORRER EL ARRAY PARA IDENTIFICAR PARAMETROS SOLICITADOS*/
	    //$campo = $parametro;
		$campo = "green";
		$contador = 0;
		foreach($Dp_array as $posicion)
		{
			foreach($posicion as $campos)
			{
				/*PARAMETROS SOLICITADOS / UTILIZAR CONTADOR PARA UBICARLOS*/
				if ($campos == $campo){
					$Dp_objeto = $Dp_array[$contador];
				}
			}
			$contador ++;
		}

		/*MOSTRAR OBJETO CON EL PARAMETRO SOLICITADO*/
		echo "<center>Elementos del objeto:";
		foreach($Dp_objeto as $propiedad)
		{
			echo "<br>" . $propiedad;
		}
		echo "</center>";

		/*MOSTRAR Y EXPORTAR OBJETO COMO ARCHIVO JSON*/
		echo "<br><center>Objeto JSON: " . json_encode($Dp_objeto) ."</center>";
		$contenido = json_encode($Dp_objeto);
		$archivo = fopen('Respuesta1.json','a');
		fputs($archivo,$contenido);
		fclose($archivo);
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Ejercicio 1.1</title>

	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>

	<h1>HELLO WORLD</h1>

</body>
</html>