<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/producto.php');
    
$pro = new producto;

?>

<div class="row">
	
	<div class="col-sm-4">
		<br><br>
		<h2>Control de los productos</h2></br>
		
		<?php   
            if(isset($_POST['cod_pro'])){
                $pro->pointer = $pro->read_pro_one($_POST['cod_pro']);
                $dataR = $pro->data_box();  
            }
         ?>
		
		<form action="../../backend/controller/producto.php">
							<label>Nombre del producto</label>
							<input type="text" name="nom_pro" id="nom_pro" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
								value="<?php

            					if(isset($dataR['nom_pro'])){
                					 echo $dataR['nom_pro'];
           						  }
            
           						 ?>"
								required><br>
									
							<label>Fecha</label>
							<input type="date" name="fec_pro" id="fec_pro" class="form-control" required><br>	
							
							<label>Cantidad</label>
							<input type="text" name="num_pro" id="num_pro" class="form-control" placeholder="..." minlength="1" maxlength="11" 
							pattern="[0-9]{1,11}" title="Solo letras mayusculas y minusculas !" 
							value="<?php

            					if(isset($dataR['num_pro'])){
                					 echo $dataR['num_pro'];
           						  }
            
           						 ?>"
							required><br>
			
							<label>Precio</label>
							<input type="text" name="pre_pro" id="pre_pro" class="form-control" placeholder="..." minlength="1" maxlength="11" 
							pattern="[0-9]{1,11}" title="Solo numeros !" 
							value="<?php

            					if(isset($dataR['pre_pro'])){
                					 echo $dataR['pre_pro'];
           						  }
            
           						 ?>"
							required><br>
							<br>
								
							<?php 
         						   if(isset($_POST['cod_pro'])){
        					?>

        					 <input type="hidden" name="cod_pro" value="<?php echo $dataR['cod_pro']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar producto">

       					<?php
         						   } else {
        					?>

        					<input type="submit" name='option_name' class="form-control" value='registrar producto'>
             
       						 <?php   
        					}

        					 ?>
							
						</form>
		<br><br>
	</div>
	
	<div class="col-sm-8">
		<br><br>
		<h2>Todos los productos</h2>
			
			<table>
				<tr>
				<td>
							<form action="../../backend/controller/producto.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar productos">
							</form>
						</td>
						</tr>
			</table>

		<table>
					<tr>
						<td>
							Nombre
						</td>
						<td>
							Fecha
						</td>
						<td>
							Cantidad
						</td>
						<td>
							Precio
						</td>
						<td>
							Opcion
						</td>
						<td>
							Opcion
						</td>
						<td>
							Opcion
						</td>


						<?php 

					{

					 ?>


					 <td>
							<form action="productofull_pdf.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>
							
					 <?php 


					}

					  ?>


					</tr>
			<?php

				$pro->pointer = $pro->read_pro();
				while($data = $pro->data_box()){

					if ($data['sta_pro']== 0) {

			?>
				<tr>
						<td>
							<?php echo $data['nom_pro'];?>
						</td>
						<td>
							<?php echo $data['fec_pro'];?>
						</td>
						<td>
							<?php echo $data['num_pro'];?>
						</td>
						<td>
							<?php echo $data['pre_pro'];?>
						</td>
						<td>
							<form action="admin_producto.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>

						<td>
							<form action="../../backend/controller/producto.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar producto">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/producto.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico producto">
							</form>
						</td>

						<td>
							<form action="producto_pdf.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>

					</tr>


			<?php

				}

				}


			?>

		</table>	
		
		<br><br>
	</div>

</div>
