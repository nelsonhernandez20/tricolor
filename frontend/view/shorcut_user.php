<?php 


// CABEZERA DEL USUARIO

function shorcut_header_user($header_title){
	echo "<!DOCTYPE html>
		<html lang='es'>

			<head>
			
				<meta charset='UTF-8'>
				<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
				<link rel='icon' src='../img/icon.png'>
				<link rel='stylesheet' href='../css/estilos.css'>
				<link rel='stylesheet' href='../css/bootstrap.min.css'>
				<title>$header_title</title>
				
				<style>
	
						td{
							padding:10px;
						}

				</style>

			</head>
			
			<body>

				<div class='container-fluid'>
					
					<nav class='navbar navbar-inverse'>
   						 <ul class='nav navbar-nav'>
   						 	<li>
      						 <a class='nav-link blanco' href='home.php'>Inicio</a>
      						 </li>
    				 		 <li>
      						 <a class='nav-link blanco' href='user_user.php'>Usuarios</a>
      						 </li>
    				 		 <li>
      						 <a class='nav-link blanco' href='user_ganancia_total.php'>Ganancias</a>
      						 </li>
     						 <li>
      						 <a class='nav-link blanco' href='user_producto.php'>Productos</a>
     						 </li>
          					<li>
      						 <a class='nav-link blanco' href='user_proveedor.php'>Proveedores</a>
     						 </li>
     						 <li>
      						 <a class='nav-link blanco' href='user_ventas.php'>Ventas</a>
     						 </li>
     						 <li>
      						 <a class='nav-link blanco' href='user_soporte.php'>Soporte</a>
     						 </li>
     						 <li>
      						 <a class='nav-link blanco' href='user_cliente.php'>Cliente</a>
     						 </li>
     						 <li>
      						 <a class='nav-link blanco' href='user_auditoria.php'>Auditoria</a>
     						 </li>
							 <li>
        					 <a class='nav-link blanco' href='../../backend/controller/logout.php'>Cerrar sesión</a>
     						</li>
    					</ul>
					</nav>";

}

//PIE DE PAGINA DEL USUARIO

function shorcut_footer_user(){
	echo "

				<div class='row'>
					<div class='col-sm-12'>
						<div class='jumbotron'>
							<p><center>Sistema de ventas.</center></p>
						</div>
					</div>
				</div>

				</div>

			</body>
				
		</html>
		";
	
}

?>

