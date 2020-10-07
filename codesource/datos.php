<!DOCTYPE html>
<html lang="es">
	<head>
			<title>Datos</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
			
	</head>
	<body>
	<?php
		$nombre=$_POST['nombre'];
		$apepa=$_POST['apep'];
		$apema=$_POST['apema'];
		$pass=$_POST['pass'];
		$pais=$_POST['pais'];

	?>
			<div class="container">
								<div class="row mt-3 form-group">
					<div class="col-12 col-md-4">
						<label>Nombre </label>
						<input type="text" class="form-control" value="<?php echo $nombre;?>" disabled>
					</div>
					<div class="col-12 col-md-4">
						<label>Apellido Paterno </label>
						<input type="text" class="form-control" value="<?php echo $apepa; ?>" disabled>						
					</div>

					<div class="col-12 col-md-4">
						<label>Apellido Materno </label>
						<input type="text" class="form-control" value="<?php echo $apema; ?>" disabled >
					</div>	
				</div>
				<div class="row form-group">
					<div class="col-12 col-md-6">
						<label>Pass</label>
						<input type="text" class="form-control" value="<?php echo $pass;?>" disabled>
					</div>
					<div class="col-12 col-md-6">
						<label>Pais</label>
						<input type="text" class="form-control" value="<?php echo $pais;?>" disabled>
					</div>
				</div>
			</div>	
			<script src="../js/jquery-3.5.1.js"> </script>
			<script src="../js/bootstrap.js"> </script>
	</body>
</html>