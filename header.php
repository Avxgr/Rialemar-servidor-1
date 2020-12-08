<!DOCTYPE html>
<html lang="es">  
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Agencias RIALEMAR&copy; - Servidor</title>
		<link rel="icon" href="<?=ROOTURL?>images/logo.ico" type="image/x-icon/">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>header.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>general.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>formulario.css">
		<link rel="stylesheet" type="text/css" href="<?=CSS?>tabla.CSS">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
		<script src="https://kit.fontawesome.com/146714d81a.js" crossorigin="anonymous"></script>
		<script src="<?=JS?>fechaActual.js"></script>
	</head>
	<body>
		<?php
			$accion = "";
			if(isset($_GET['accion'])){
				$accion = $_GET['accion'];
			}
		?>
		<header>
			<div class="header">
				<div class="logo">
					<div class="imglogo" onclick="window.location.href='<?=ROOTURL?>?accion=home'"><img src="<?=ROOTURL?>Images/logo.png" alt="Logo"></div>
				</div>
				<?php if($_SESSION['tipo_usuario'] == 1){ ?>
				<div class="select">
					<div class="option"><a href="#"></a></div>
				</div>
				<div class="select">
					<div class="option"><a href="#"></a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listEmpleados">Empleados</a></div>
					<div class="container">
						<ul class="suboption">
							<li><a href="<?=ROOTURL?>?accion=addEmpleado">Registrar un empleado</a></li>
						</ul>
					</div>
				</div>
				<div class="select">
					<div class="option"><a href="#"></a></div>
				</div>
				<div class="select">
					<div class="option"><a href="#"></a></div>
				</div>
				<?php }else if($_SESSION['tipo_usuario'] == 2){ ?>
				<div class="select">
					<div><a href="<?=ROOTURL?>?accion=listClientes">Clientes</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listCarros">Carros</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listPartes">Partes</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listCompras">Compras</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listRentas">Rentas</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listVentas">Ventas</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listMembresia">Membres&iacute;as</a></div>
				</div>
				<?php }else if($_SESSION['tipo_usuario'] == 3){ ?>
				<div class="select">
					<div><a href="<?=ROOTURL?>?accion=listClientes">Clientes</a></div>
				</div>
				<div class="select">
					<div><a href="<?=ROOTURL?>?accion=listEmpleados">Empleados</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listCarros">Carros</a></div>
					<div class="container">
						<ul class="suboption">
							<li><a href="<?=ROOTURL?>?accion=addCarro">Registrar un carro</a></li>
						</ul>
					</div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listPartes">Partes</a></div>
					<div class="container">
						<ul class="suboption">
							<li><a href="<?=ROOTURL?>?accion=addPartes">Registrar una parte</a></li>
						</ul>
					</div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listMembresia">Membres&iacute;as</a></div>
				</div>
				<div class="select">
					<div class="option"><a href="<?=ROOTURL?>?accion=listCDescuentos">CDescuentos</a></div>
					<div class="container">
						<ul class="suboption">
							<li><a href="<?=ROOTURL?>?accion=addCDescuentos">Registrar un c&oacute;digo</a></li>
						</ul>
					</div>
				</div>
				<?php } ?>				
				<div class="logged">
					<div class="username"><?php echo getDatosEmpleadoLogin($_SESSION['user_session']);?></div>
					<div class="imgprofile"><img src="<?=ROOTURL?>Images/logo.png" alt="Hola"></img></div>
					<div class="settings"><i class="fas fa-sign-out-alt" onclick="window.location.href='<?=ROOTURL?>?accion=logout'"></i></div>
				</div>
			</div>
			<span id="line"></span>
		</header>
		<div id="contenedor">