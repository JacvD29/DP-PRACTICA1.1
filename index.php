<?php

	echo "Hola Mundo";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>Ejercicio 1.1</title>

	<link rel="stylesheet" type="text/css" href="estilos.css">

	<link rel="shortcut icon" href="logo-dportenis.ico">

</head>
<body>

	<!-- ENCABEZADO -->
	<h1 class="title"> Aplicación web en PHP para consumir - Servicio REST</h1>
    
    <!-- CONTENEDOR MAIN -->
    <div class="container">

    	<!-- TARJETA DE INFORMACION -->
        <div class="card">

        	<!-- IMAGEN -->
            <img src="logo-dportenis.png">
            <h4>EJERCICIO #1</h4>

            <!-- FORMULARIO PARA ENVIAR PARAMETRO -->
            <form action="" method="GET">

            	<!-- SOLAMENTE MOSTRARE EL BOTON PUES EL EJERCICIO SOLICITA SOLAMENTE EL PARAMETRO GREEN -->
                <!-- <label for="campo">Propiedad</label> -->
                <input type="text" name="campo" placeholder="Green" hidden="true">
                <button type="submit" class="btn_a">CONSULTAR</button>
            </form>

            <!--AGREGAR LINK DE DESCARGA -->
            <p>Presiona el boton antes de descargar</p>
            <a href="descargar.php">Descargar Respuesta1</a>
        </div>   
    </div>

    <!-- FOOTER -->
    <footer class="site-footer">
        <div class="contenido-footer">
            <p>Examen practico | Practica #1 por Jacv | <b>10.02.2021</b></p>
        </div>
    </footer>

</body>
</html>