<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/css/select2.css" rel="stylesheet" type="text/css" />

	<title><?php echo $titulo ?> | Agenda</title>
</head>
<body>
	<nav class="navbar navbar-default" role="navigator">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#barra-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>">Agenda</a>
			</div>
			<div class="navbar-collapse collapse" id="barra-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php echo base_url() ?>Contactos/">Contactos</a>						
					</li>
					<li>
						<a href="<?php echo base_url() ?>Contactos/Agregar">Agregar</a>						
					</li>					
				</ul>
			</div>
		</div>
	</nav>
