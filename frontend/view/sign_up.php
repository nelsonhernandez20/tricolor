<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
				<link rel='icon' src='../img/icon.png'>
				<link rel='stylesheet' href='../css/estilos.css'>
				<link rel='stylesheet' href='../css/bootstrap.min.css'>
				<title>Registro</title>
				
		</head>
			
		<body>
				
			<div class="container-fluid">
				
				<div class="row">
					
					</br></br></br></br></br></br></br></br></br>
					
					<div class="col-sm-8">
						<center>
							<img src="../css/TRICOLOR.jpg">
						</center>
					</div>
					
					<div class="col-sm-4">
						
						<form action="../../backend/controller/usuario.php" method="post">
							
							<label>Nombre</label>
							<input type="text" name="nom_usu" class="form-control"pattern="[A-Za-z\s]{3,30}"   required>
							<label>Apellido</label>
							<input type="text" name="ape_usu" class="form-control"pattern="[A-Za-z\s]{3,30}"  required>
							<label>Cedula</label>
							<input type="text" name="ced_usu" class="form-control" required pattern="[0-9]{7,9}" >
							<label>Fecha de nacimiento</label>
							<input type="date" name="fec_usu" class="form-control" required>
							<label>Masculino</label>
							<input type="radio" name="sex_usu" class="form-control"  value="M"required>
							<label>Femenino</label>
							<input type="radio" name="sex_usu" class="form-control"  value="F"required>
						    <label>Telefono</label>
						    <select name="codigo">
								<option value="0416"><p>0416</p></option>
								<option value="0426">0426</option>
								<option value="0414">0414</option>
								<option value="0424">0424</option>
								<option value="0412">0412</option>
							</select>

							<input type="text" name="tlf_usu" class="form-control" required>
						    <label>Nombre de usuario</label>
							<input type="text" name="nic_usu" class="form-control" required>
							<label>Contraseña</label>
							<input type="password" name="con_usu" class="form-control" required>
							<input type="submit" name="option_name" value="Crear cuenta" class="form-control">
							
						</form>
						
					</div>
					
				</div>
				
				</br></br></br></br></br></br></br></br></br>
				
			</div>
				
				
		</body>
		
</html>