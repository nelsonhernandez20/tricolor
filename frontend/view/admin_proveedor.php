<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/proveedor.php');
    
$prv = new proveedor;

?>

<div class="row">
	
	<div class="col-sm-4">
		<br><br>
		<h2>Control de proveedores</h2></br>
		
		<?php   
            if(isset($_POST['cod_prv'])){
                $prv->pointer = $prv->read_prv_one($_POST['cod_prv']);
                $dataR = $prv->data_box();  
            }
         ?>
		
		<form action="../../backend/controller/proveedor.php">
							<label>Nombre del proveedor</label>
							<input type="text" name="nom_prv" id="nom_prv" class="form-control" placeholder="..." minlength="3" maxlength="30" 
							pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
							value="<?php

            					if(isset($dataR['nom_prv'])){
                					 echo $dataR['nom_prv'];
           						  }
            
           						 ?>"
							
							required><br>
							<label>Contacto telefonico</label>
							<input type="text" name="tlf_prv" id="tel_prv" class="form-control" placeholder="..." minlength="11" maxlength="11" 
							pattern="[0-9]{11}" title="Solo numeros !" 
							value="<?php

            					if(isset($dataR['tlf_prv'])){
                					 echo $dataR['tlf_prv'];
           						  }
            
           						 ?>"
							
							required><br>	
							<label>Descripcion del proveedor</label>
							<input type="text" name="des_prv" id="des_prv" class="form-control" placeholder="..." minlength="1" maxlength="150" 
							pattern="[A-Za-z\s]{1,150}" title="Solo letras mayusculas y minusculas !" 
							value="<?php

            					if(isset($dataR['des_prv'])){
                					 echo $dataR['des_prv'];
           						  }
            
           						 ?>"
							
							required><br>
							<br>
							
							<?php 
         						   if(isset($_POST['cod_prv'])){
        					?>

        					 <input type="hidden" name="cod_prv" value="<?php echo $dataR['cod_prv']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar proveedor">

       						 <?php
         						   } else {
        					?>

        					<input type="submit" name='option_name' class="form-control" value="Registrar proveedor">
             
       						 <?php   
        					}

        					 ?>
							
						</form>
		<br><br>
	</div>
	
	<div class="col-sm-8">
		<br><br>
		<h2>Todos los proveedores</h2>
		
		<table>
			<tr>
				
					<td>
							<form action="../../backend/controller/proveedor.php" method="post">
								 <input type="hidden" name="cod_prv" value="<?php echo $data['cod_prv']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar proveedores">
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
							Telefono
						</td>
						<td>
							Descripcion
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
							<form action="proveedorfull_pdf.php" method="post">
								 <input type="hidden" name="cod_prv" value="<?php echo $data['cod_prv']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>
						

					 <?php 


					}

					  ?>

					</tr>
			<?php

				$prv->pointer = $prv->read_prv();
				while($data = $prv->data_box()){

					if ($data['sta_prv']== 0) {


			?>
				<tr>
						<td>
							<?php echo $data['nom_prv'];?>
						</td>
						<td>
							<?php echo $data['tlf_prv'];?>
						</td>
						<td>
							<?php echo $data['des_prv'];?>
						</td>
						<td>
							<form action="admin_proveedor.php" method="post">
								 <input type="hidden" name="cod_prv" value="<?php echo $data['cod_prv']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>

						<td>
							<form action="../../backend/controller/proveedor.php" method="post">
								 <input type="hidden" name="cod_prv" value="<?php echo $data['cod_prv']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar proveedor">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/proveedor.php" method="post">
								 <input type="hidden" name="cod_prv" value="<?php echo $data['cod_prv']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico proveedor">
							</form>
						</td>

						<td>
							<form action="proveedor_pdf.php" method="post">
								 <input type="hidden" name="cod_prv" value="<?php echo $data['cod_prv']?>">
                        		<input type="submit" target="blank" class="form-control btn-danger" name="option_name" value="pdf">
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