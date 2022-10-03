<?php

if (isset($_POST['enviar'])) {
	$nombre = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
	$asunto = $_POST['motivo'];
	$motivo = $_POST['mensaje'];
	$fechahoraCita = $_POST['fechahoraCita'];
	$asignatura = $_POST['asignatura'];
	$grado = $_POST['grado'];
	$seccion = $_POST['seccion'];
	$time = $_POST['time'];

	$headers.= "From: y2kdsp@gmail.com \r\n";
	$headers.= "Reply-To: y2kdsp@gmail.com \r\n";

	$mail = @mail($correo, $asunto, $motivo);

	if($mail)
	{
		echo "<h4> Tú cita se ha enviado con éxito :D </h4>";
	}

}

?>