<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quality's webpage</title>
	 <!-- Bootstrap, css, javascript-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/simplePagination.css"/>
	<script language="javascript" type="text/javascript" src="js/main.js"></script>
	<script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.simplePagination.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
	<!-- Header -->
	<div class="container">
		<div class="col-md-12">
			<img src="images/header.png" alt="Encabezado" class="img-responsive">
			<p class="ubicacion">Estas en: Anterior Costura</p>
		</div>
		<!-- Content -->
		<div class="col-md-12">
			<div class="menu">
				<a href="index.php" class="btn btn-default" role="button">Inicio</a>
				<a href="garment_current.php" class="btn btn-danger" role="button">Actual costura</a>
				<a href="selling_current.php" class="btn btn-danger" role="button">Actual empaque</a>
				<a href="garment_previous.php" class="btn btn-danger" role="button">Anterior costura</a>
				<a href="selling_previous.php" class="btn btn-danger" role="button">Anterior empaque</a>
				<a href="irregular.php" class="btn btn-danger" role="button">Irregulares</a>
				<a href="ayuda.php" class="btn btn-default" role="button">Ayuda</a>
			</div>
		</div>
		<div class="col-md-12">
				<h1> Introduzca su busqueda aqui</h1>
					<form method="get" id="search">
				 		<!-- <input name="search" type="text" size="40" placeholder="Buscar..."/> -->
				 		<input name = "search" type="text" class="form-control" placeholder="Escriba la especificacion a buscar">
					</form>
				 		
					<?php
					$path = 'Especifications\SharePoint\PD - HbI Underwear Product Sp - Pre'; 
					$folders = array_diff(scandir($path), array('..', '.'));
					?>

					<!-- Code for the search -->
					<?php 
					if(isset($_GET['search'])):
					foreach($folders as $folder):
						if(preg_match("/{$_GET['search']}/i", $folder)):?>
							<table>
								<tr class="paginate">
									<td><a href="<?=$path.'/'.$folder?>"><?=$folder?></a> <br></td>
								</tr>
							</table>
					<?php  endif; endforeach; endif?>
		</div>
		<div id="page-nav" class="col-mid-12"></div>
		<!-- Footer -->
		<div class="col-md-12">
			<p class="firma">Yorki Bonilla</p>
			<img src="images/footer.png" alt="Pie de pagina" class="img-responsive">
		</div>
	</div>
</body>
</html>