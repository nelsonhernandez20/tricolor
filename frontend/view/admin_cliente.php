<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/cliente.php');
    
$cli = new cliente;

?>


<style type="text/css">
	
</style>

<div class="row">
	
	<div class="col-sm-4">
		<br><br>
		<h2>Control de clientes</h2></br>

		  <?php   
            if(isset($_POST['cod_cli'])){
                $cli->pointer = $cli->read_cli_one($_POST['cod_cli']);
                $dataR = $cli->data_box();  
            }
         ?>

		<form action="../../backend/controller/cliente.php" method="post">
							<label>Nombre completo</label>
							<input type="text" name="nom_cli" id="nom_cli" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
								value="<?php

            					if(isset($dataR['nom_cli'])){
                					 echo $dataR['nom_cli'];
           						  }
            
           						 ?>"	
								required><br>
							<label>Apellido completo</label>
							<input type="text" name="ape_cli" id="ape_cli" class="form-control" placeholder="..." minlength="3" maxlength="30" 
							pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !"
							value="<?php

            					if(isset($dataR['ape_cli'])){
                					 echo $dataR['ape_cli'];
           						  }
            
           						 ?>"

							required><br>
							<label>Contacto telefonico</label>
							<select name="codigo">
								<option value="0416"><p>0416</p></option>
								<option value="0426">0426</option>
								<option value="0414">0414</option>
								<option value="0424">0424</option>
								<option value="0412">0412</option>
							</select>
							<input type="text" name="tlf_cli" id="tlf_cli" class="form-control" placeholder="..." minlength="7" maxlength="7" 
							pattern="[0-9]{7,11}" title="Solo numeros !" 

							value="<?php

            					if(isset($dataR['tlf_cli'])){
                					 echo $dataR['tlf_cli'];
           						  }
            
           						 ?>"

							required><br>	
							<label>Cedula</label>
							<input type="text" name="ced_cli" id="ced_cli" class="form-control" placeholder="..." minlength="7" maxlength="9" 
							pattern="[0-9]{7,9}" title="Solo numeros !" 

							value="<?php

            					if(isset($dataR['ced_cli'])){
                					 echo $dataR['ced_cli'];
           						  }
            
           						 ?>"

							required><br>
							<label>M</label>
							<input type="radio" name="sex_cli" class="form-control" value="M" required>
							<label>F</label>
							<input type="radio" name="sex_cli" class="form-control" value="F" required><br><br>
							<label>Numero de cuenta Bancaria</label>
							<input type="text" name="cue_cli" id="cue_cli" class="form-control" placeholder="..." minlength="20" maxlength="20" pattern="[0-9]{20,20}"
							value="<?php

            					if(isset($dataR['cue_cli'])){
                					 echo $dataR['cue_cli'];
           						  }
            
           						 ?>"
							 required><br>
							<br>
							<?php 
         						   if(isset($_POST['cod_cli'])){
        					?>

        					 <input type="hidden" name="cod_cli" value="<?php echo $dataR['cod_cli']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar cliente">

       						 <?php
         						   } else {
        					?>

        					<input type="submit" name='option_name' class="form-control" value="Registrar cliente">
             
       						 <?php   
        					}

        					 ?>

						</form>
		<br><br>
	</div>
	</div>
	<div class="row">
	<div class="col-sm-12">
		<br><br>

		<h2>Todos los clientes</h2>

		<table>
			
				<td>
							<form action="../../backend/controller/cliente.php" method="post">
								 <input type="hidden" name="cod_cli" value="<?php echo $data['cod_cli']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar clientes">
							</form>
						</td>
			</td>
		</table>
			<table class="table-responsive">
					<tr>
						<td>
							Nombre
						</td>
						<td>
							apeliido
						</td>
						<td>
							cedula
						</td>
						<td>
							sexo
						</td>
						<td>
							telefono
						</td>
						<td>
							cuenta Bancaria
						</td3>
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
							<form action="clientefull_pdf.php" method="post">
								 <input type="hidden" name="cod_cli" value="<?php echo $data['cod_cli']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>
						
					 <?php 


					}

					  ?>

						
					</tr>

					

			<?php


				$cli->pointer = $cli->read_cli();
				while($data = $cli->data_box()){

					if ($data['sta_cli']== 0) {
					// code...
				

			?>
				<tr>
						<td>
							<?php echo $data['nom_cli'];?>
						</td>
						<td>
							<?php echo $data['ape_cli'];?>
						</td>
						<td>
							<?php echo $data['ced_cli'];?>
						</td>
						<td>
							<?php echo $data['sex_cli'];?>
						</td>
						<td>
							<?php echo $data['tlf_cli'];?>
						</td>
						<td>
							<?php echo $data['cue_cli'];?>
						</td>
						<td>
							<form action="admin_cliente.php" method="post">
								 <input type="hidden" name="cod_cli" value="<?php echo $data['cod_cli']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>

						<td>
							<form action="../../backend/controller/cliente.php" method="post">
								 <input type="hidden" name="cod_cli" value="<?php echo $data['cod_cli']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar cliente">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/cliente.php" method="post">
								 <input type="hidden" name="cod_cli" value="<?php echo $data['cod_cli']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico cliente">
							</form>
						</td>


						<td>
							<form action="cliente_pdf.php" method="post">
								 <input type="hidden" name="cod_cli" value="<?php echo $data['cod_cli']?>">
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
