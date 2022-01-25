<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
				<link rel='icon' src='../img/icon.png'>
				<link rel='stylesheet' href='../css/estilos.css'>
				<link rel='stylesheet' href='../css/bootstrap.min.css'>
				<title>Iniciar Sesion</title>
				
		</head>
			
		<body>
				
			<div class="container-fluid">
				
				</br></br></br></br></br></br></br></br></br>
				
				<div class="row">
					
					<div class="col-sm-6">
						<center>
							<img src="../css/TRICOLOR.png" width="200"> <br><br>
							<img src="../css/TRICOLOR.jpg" width="350">
						</center>
					</div>
					
					<div class="col-sm-6" style="padding-right: 100px;">
						<center><h2>Iniciar Sesion</h2></center> 
						<form class="iniciar_sesion" action="../../backend/controller/login.php" method="post">
								<label>Usuario</label>
								<input type="text" name="nic_usu" class="form-control" required> 
								<label>Contraseña</label>
								<input type="password" name="con_usu" class="form-control" required> 
								<input type="submit" name="option_name" value="Iniciar sesion" class="form-control">
						</form>
						
						<a href="sign_up.php"><button class="btn-light form-control">Crear cuenta</button></a>
						
					</div>
					
				</div>
				
				</br></br></br></br></br></br></br></br></br>
				
			</div>
				
				
		</body>
		
</html>