<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/ventas.php');
require('../../backend/class/cliente.php');
require('../../backend/class/producto.php');
require('../../backend/class/ganancias.php');
    
$ventas = new ventas;
$cli = new cliente;
$producto = new producto;
$ganancias = new ganancias;
$total= 0;
  
           /*
            if(isset($_POST['cod_cli'] && $_POST['cod_pro']&& $_POST['id_venta']&& $_POST['cod_gan'])){
                $cli->pointer = $cli->read_cli_one($_POST['cod_cli']);
                $dataR = $cli->data_box();
                 $ventas->pointer = $ventas->read_ventas_one($_POST['id_venta']);
                $dataV = $ventas->data_box();
                 $producto->pointer = $producto->read_pro_one($_POST['cod_pro']);
                $dataP = $producto->data_box();
                 $ganancias->pointer = $ganancias->read_gan_one($_POST['cod_gan']);
                $dataG = $ganancias->data_box();        
            }
        */

?>

<div class="row">
	
	<div class="col-sm-3">
		<br><br>
		<h2>Control de clientes</h2></br>

		<?php   
            if(isset($_POST['id_ven'])){
                $ventas->pointer = $ventas->read_ventas_one($_POST['id_ven']);
                $dataR = $ventas->data_box();  
            }
         ?>

         <style type="text/css">
          #color_tabla{
         		background:transparent;
         	}

         	#color_tabla tr td{
         		font-size: 30px;
         	}

         	 #color_tabla tr td:hover{
         		background: #2B9281;
         	}
         </style>

<form action="../../backend/controller/ventas.php" method="post">
	<label>Nombre del cliente</label>
	<input type="text" name="nom_cli" id="nom_cli" class="form-control" placeholder="Cliente" pattern="[A-Za-z\s]{3,30}" value="<?php

            					if(isset($dataR['nom_cli'])){
                					 echo $dataR['nom_cli'];
           						  }
            
           						 ?>">
	<br>
	<label>Nombre del Producto</label>
	<input type="text" name="nom_pro" id="nom_pro" class="form-control" placeholder="nombre del producto" pattern="[A-Za-z\s]{3,30}" value="  <?php

            					if(isset($dataR['nom_pro'])){
                					 echo $dataR['nom_pro'];
           						  }
            
           						 ?>">
	<br>
	<label>Cantidad del producto</label>
	<input type="text" name="num_pro" id="num_pro" class="form-control" placeholder="Cantidad del producto" pattern="[0-9]{0,20}"    value="<?php

            					if(isset($dataR['num_pro'])){
                					 echo $dataR['num_pro'];
           						  }
            
           						 ?>">
	<br>
	<label>Precio del Producto</label>
	<input type="text" name="pre_pro" id="pre_pro" class="form-control" placeholder="Precio del producto" pattern="[0-9]{0,20}" value="<?php

            					if(isset($dataR['pre_pro'])){
                					 echo $dataR['pre_pro'];
           						  }
            
           						 ?>">

           						 <?php 
         						   if(isset($_POST['id_ven'])){
        					?>

        					<input type="hidden" name="id_ven" value="<?php echo $dataR['id_ven']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar venta">

        					 <?php
         						   } else {
        					?>

	<input type="submit" name='option_name' class="form-control" value="Registrar Venta">


 <?php   
        					}

        					 ?>
</form>

</div>
<div class="col-sm-6-offset-3">
	<table class="table-responsive">
		
		<tr>
						<td>
							Nombre Del Cliente
						</td>
						<td>
							Nombre Del Producto
						</td>
						<td>
							Cantidad del producto
						</td>
						<td>
							Precio del Producto
						</td>
						<td>
							Precio total de los productos

							 <td>
							<form action="ventas_full_pdf.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>							
						</td>
						<td>
							<form action="../../backend/controller/ventas.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar ventas">
							</form>
						</td>
						

	


		</tr>			
		<br>

			<?php 


						$ventas->pointer = $ventas->read_ventas();
				while($data = $ventas->data_box()){

					if ($data['sta_ven']== 0) {

						 ?>


						 <tr>
						 	
						 	<td>
						 		<?php echo $data['nom_cli'];?>
						 	</td>
						 	<td>
						 		<?php echo $data['nom_pro'];?>
						 	</td>

						 	<td>
						 		<?php echo $data['num_pro'];?>
						 	</td>

						 	<td>
						 		<?php echo $data['pre_pro'];?>
						 	</td>
						 	<td>
						 		<?php echo $data['din_gan'];?>
						 	</td>
						 	<td>
							<form action="admin_ventas.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/ventas.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar venta">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/ventas.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico venta">
							</form>
						</td>
						<td>
							<form action="ventas_pdf.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>

						 </tr>

						 <?php

						}
				}


			?>



	</table>
<center>
	</div>
	<div class="container-fluid">
		
	
	<div class="row">
		<div class="col-sm-8-offset-4">
			
		<br>
	<table class="table-responsive" style="width: 100%;" id="color_tabla">
		<tr>
			<td>
				Ganancia Total
			</td>
	

	
	 	<?php 
	 			$ventas->pointer = $ventas->read_ventas();
				while($data = $ventas->data_box()){


					$num= intval($data['din_gan']);
					$total= $total + $num;

?>
	 	

	 	


	 	<?php 

	 }
	 	 ?>


	 



	 		<td>
	 			<?php echo $total; ?>
	 		</td>
	 		<td>
							<form action="../../backend/controller/ganancias_total.php" method="post">
								 <input type="hidden" name='gan_total' value="<?php echo $total;?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="ganancia total">
							</form>
						</td>
	 	</tr>

	 </table>
	 </div>
	</div>
	</div>

	</center>