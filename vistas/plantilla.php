<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php echo COMPANY; ?></title>
    <?php  include "./vistas/inc/Links.php"; ?>
</head>
<body>
	<?php
		$peticionAjax= false;
		require_once "./controladores/vistasControlador.php";
		$IV= new vistasControlador();
		
		$vista= $IV->obtener_vistas_controlador();

		if ($vista=="login" || $vista=="404"	){
			require_once "./vistas/contenidos/".$vista."-view.php";
		}else {
	?>
	
	<!-- Main container -->
	<main class="full-box main-container">
		<!-- Nav lateral -->
        <?php include "./vistas/inc/NavLateral.php" ;  ?>

		<!-- Page content -->
        <!-- Barra de la parte de arriba -->
		<section class="full-box page-content">
			
            <?php include "./vistas/inc/NavBarSup.php"; 
				include $vista;
			?>

			<!-- DESACTIVAR PORQUE SE HARA DINAMICO CON VISTAS 
             Page header 
			<div class="full-box page-header">
				<h3 class="text-left">
					<i class="fab fa-dashcube fa-fw"></i> &nbsp; DASHBOARD
				</h3>
				<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit nostrum rerum animi natus beatae ex. Culpa blanditiis tempore amet alias placeat, obcaecati quaerat ullam, sunt est, odio aut veniam ratione.
				</p>
			</div>  -->

			<!-- Content -->
            <!-- DESACTIVAR PORQUE SE HARA DINAMICO CON VISTAS 
			<div class="full-box tile-container">
				<a href="client-new.html" class="tile">
					<div class="tile-tittle">Clientes</div>
					<div class="tile-icon">
						<i class="fas fa-users fa-fw"></i>
						<p>5 Registrados</p>
					</div>
				</a>
				
				<a href="item-list.html" class="tile">
					<div class="tile-tittle">Items</div>
					<div class="tile-icon">
						<i class="fas fa-pallet fa-fw"></i>
						<p>9 Registrados</p>
					</div>
				</a>

				<a href="reservation-reservation.html" class="tile">
					<div class="tile-tittle">Reservaciones</div>
					<div class="tile-icon">
						<i class="far fa-calendar-alt fa-fw"></i>
						<p>30 Registradas</p>
					</div>
				</a>

				<a href="reservation-pending.html" class="tile">
					<div class="tile-tittle">Prestamos</div>
					<div class="tile-icon">
						<i class="fas fa-hand-holding-usd fa-fw"></i>
						<p>200 Registrados</p>
					</div>
				</a>

				<a href="reservation-list.html" class="tile">
					<div class="tile-tittle">Finalizados</div>
					<div class="tile-icon">
						<i class="fas fa-clipboard-list fa-fw"></i>
						<p>700 Registrados</p>
					</div>
				</a>

				<a href="user-list.html" class="tile">
					<div class="tile-tittle">Usuarios</div>
					<div class="tile-icon">
						<i class="fas fa-user-secret fa-fw"></i>
						<p>50 Registrados</p>
					</div>
				</a>

				<a href="company.html" class="tile">
					<div class="tile-tittle">Empresa</div>
					<div class="tile-icon">
						<i class="fas fa-store-alt fa-fw"></i>
						<p>1 Registrada</p>
					</div>
				</a>
			</div>   -->

		</section>
	</main>
		
	
	<!--=============================================
	=            Include JavaScript files           =
	==============================================-->
		<?php 
		}
			include "./vistas/inc/Scripts.php"; ?>
</body>
</html>