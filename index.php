<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Formulario de citas médicas en línea :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords"
		content="Medical Appointment Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs Sign up Web Templates, 
 Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design">
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- Custom Theme files -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--fonts-->
	<!-- <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<!-- <h1>Agendar cita </h1> -->
	<div class="bg-agile">
		<div class="book-appointment">
			<h2>Agendar Cita</h2>
			
			<form method="post" name="formulario" id="appointment">
				<div id="resultados_ajax" class="gaps"></div>
				<div class="left-agileits-w3layouts same">
					<div class="gaps">
						<p>Nombre</p>
						<input type="text" name="nombres" placeholder="" required/>
					</div>
					
					<div class="gaps">
						<p>Apellidos</p>
						<input type="text" name="apellidos" placeholder="" required/>
					</div>
					
					<div class="gaps">
						<p>Correo</p>
						<input type="email" name="correo" placeholder="" required/>
					</div>
					
					<div class="gaps">
						<p>Asunto</p>
						<textarea name="motivo" placeholder="" required></textarea>
					</div>
					<div class="gaps">
						<p>Mensaje</p>
						<textarea name="mensaje" placeholder="" required></textarea>
					</div>
				</div>
				<div class="right-agileinfo same">
					<div class="gaps">
						<p>Seleccionar fecha</p>
						<input id="datepicker1" name="fechahoraCita" type="text" value="" onfocus="this.value = '';"
							onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="gaps">
						<p>Asignatura</p>
						<select class="form-control" name="asignatura">
							<option></option>
							<option value="Sociales">Sociales</option>
							<option value="Artes">Artes</option>
							<option value="Tecnologia">Tecnología</option>
							<option value="Politica">Política</option>
							<option value="Filosofia">Filosofía</option>
							<option value="Quimica">Química</option>
							<option value="Matematicas">Matemáticas</option>
							<option value="Edu.Fisica">Edu.Física</option>
							<option value="Ingles">Inglés</option>
							<option value="Español">Español</option>
							<option value="Fisica">Física</option>
							<option value="Emprendimiento">Emprendimiento</option>
							<option value="Religion">Religión</option>
							<option value="Etica">Ética</option>
						</select>
					</div>
					<div class="gaps">
						<p>Grado</p>
						<select class="form-control" name="grado" required>
							<option></option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
						</select>
					</div>
					<div class="gaps">
						<p>Sección</p>
						<input type="number" name="seccion" placeholder="" required/>
					</div>
					
					<div class="gaps">
						<p>Hora</p>
						<input type="text" id="timepicker" name="time" class="timepicker form-control" value="">
					</div>
				</div>
				<div class="clear"></div>
				<input type="submit" value="Realizar cita" name="enviar">
			</form>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({ twentyFour: false });
	</script>

	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
		<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});

	</script>

	<?php
	include("correo.php");
	?>
	

</body>
</html>