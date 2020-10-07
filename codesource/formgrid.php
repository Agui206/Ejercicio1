<!DOCTYPE html>
<html lang="es">
	<head>
			<title>Formulario</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
			
	</head>
	<body>
			<div class="container">
				<form action="datos.php" method="post">
				<div class="row mt-3 form-group">
					<div class="col-12 col-md-4">
						<label>Nombre </label>
						<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
					</div>
					<div class="col-12 col-md-4">
						<label>Apellido Paterno </label>
						<input type="text" class="form-control" placeholder="Paterno" name="apep" id="apep">						
					</div>

					<div class="col-12 col-md-4">
						<label>Apellido Materno </label>
						<input type="text" class="form-control" placeholder="Materno" name="apema" id="apema">
					</div>	
				</div>
				<div class="row form-group">
					<div class="col-12 col-md-6">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Pass" name="pass" id="pass">
					</div>
					<div class="col-12 col-md-6">
						<label>Pais</label>
						<select name="pais" class="form-control" id="pais">
							<option value="Mexico">Mexico</option>
							<option value="Estados Unidos">Usa</option>
							<option value="Canada">Canada</option>
							<option value="Francia">Francia</option>
						</select>
					</div>
				</div>
				<div class="row mt-3 justify-content-center">
					<div class="col-12 col-md-4">
						<input type="submit" class="btn btn-outline-primary btn-block"value="Enviar">
					</div>
				</div>
				</form>
			</div>	
			<script src="../js/jquery-3.5.1.js"> </script>
			<script src="../js/bootstrap.js"> </script>
	</body>
</html>