<?php 

	header("Content-disposition: attachment; filename=Respuesta1.json");

	header("Content-type: application/json");

	readfile("Respuesta1.json");

 ?>