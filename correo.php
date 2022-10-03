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

	$headers =  "MIME-Version: 1.0 \r\n";
	$headers.=  "Content-type: text/plain; charset=utf-8\r\n";
	$headers.= "From: $nombre $apellidos <$correo> \r\n";
	$headers.= "To: Sitio Web <manuela.betancurmiranda@inemjose.edu.co> \r\n";
	$headers.= "Cc: copia@inemjose.edu.co \r\n";
	$headers.= "Bcc: copia@inemjose.edu.co\r\n";
	$headers.= "X_Mailer: PHP/".phpversion();
	$mail = @mail($correo, $asunto, $motivo);

	if($mail)
	{
		echo "<h4> Tú cita se ha enviado con éxito :D </h4>";
	}

}

?>