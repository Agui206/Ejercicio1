<!DOCTYPE html>
<html lang="es">
	<head>
			<title>Formulario Basico</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
			<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
			
	</head>
	<body>
			<div class="container">
				<div class="row pt-3">
					<div class="col-12">
					<form action="">
					
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre">
						</div>
						
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" placeholder="Password" name="pass" id="pass">
						</div>
						<div class="form-group">
							<label>Pais</label>
							<select name="pais" id="pais" class="form-control">
								<option value="mexico">Mexico</option>
								<option value="usa">Estados Unidos</option>
								<option value="francia">Francia</option>
                                <option value="francia">Alemania</option>
							</select>
						</div>
						
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" name="sexo" id="hombre" class="form-check-input">Hombre
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" name="sexo" id="mujer" class="form-check-input">Mujer
							</label>
						</div>
						<div class="form-check">
							<label class="form-check-label">
							<input type="checkbox" name="terminos" id="mujer" class="form-check-input">Acepto Terminos y Condiciones
							</label>
						</div>
						<button class="btn btn-primary" type="submit">Aceptar</button>
					</form>
					</div>	
				</div>
			</div>
	</body>
        <script src="../js/jquery-3.5.1.js"> </script>
		<script src="../js/bootstrap.js"> </script>
</html>