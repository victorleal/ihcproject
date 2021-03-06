<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../assets/ico/favicon.png">

		<title>Reserva Salas FT</title>

		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url(); ?>css/signin.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/apprise.css" rel="stylesheet">		

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- Menu -->
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Reserva Salas FT</a>
				</div>
				<?php
					if(isset($logged) && $logged){
				?>
				<div class="collapse navbar-collapse">
					<ul id="menu" class="nav navbar-nav">
						<li class="active">
							<a href="home">In&iacute;cio</a>
						</li>
						<li>
							<a id="link_reservas" href="javascript:;" onclick="enviar('reservas');">Reservas</a>
						</li>
						<li>
							<a id="link_salas" href="javascript:;" onclick="enviar('salas');">Salas</a>
						</li>
						<li>
							<a id="link_usuarios" href="javascript:;" onclick="enviar('usuarios');">Usuários</a>
						</li>
						<li>
							<a id="link_sobre" href="javascript:;" onclick="enviar('sobre');">Sobre</a>
						</li>
						<li>
							<a id="link_contato" href="javascript:;" onclick="enviar('contato');">Contato</a>
						</li>
						<li>
							<a id="sair" href="login/logout">Sair</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
				<?php } ?>
			</div>
		</div>
		<!-- Fim Menu -->
		<div class="container" style="margin-top:70px;">
			<div class="container theme-showcase" id="conteudo" style="min-height:500px;">

