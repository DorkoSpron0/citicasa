<?php

/*
if( ! isset($_POST['nombre'] ) ){
    hader("Location: index.html");
}
*/


$Nombre = $_POST ( "nombre");
$Cpellidos = $_POST ( "apellidos");
$Correo = $_POST ( "correo");
$Motivo = $_POST ( "motivo");
$Seleccionarfecha = $_POST ( "fechahoraCita");
$Asignatura = $_POST ( "asignatura");
$Grado = $_POST ( "grado");
$Sección = $_POST ( "seccion");
$Hora = $_POST ( "time");

if (empty(trim($Nombre))) $Nombre = "anonimo";
if (empty(trim($Apellido))) $Apellido = "anonimo";
$body = <<<HTML 
    <h1>Cita escolar</h1>
    <p>De:$Nombre $Apellido /$email</p>
    <h2>Motivo</h2>
    $Motivo
HTML;

$headers =  "MIME-Version: 1.0 \r\n";
$headers.=  "Content-type: text/html; charset=utf-8\r\n";
$header.= "From: $Nombre $Apellido <$Correo> \r\n";
$header. = "Cc: copia@inemjose.edu.co \r\n"
$header. = "Bcc: copia@inemjose.edu.co\r\n"

var_dump($nombre);
$rta = mail("manuela.betancurmiranda@inemjose.edu.co", "Cita escolar", $body, $header );
//var_dump($rta);

header("Location: Gracias.html");