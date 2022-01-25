<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/soporte.php');
    
$sop = new soporte;

?>

<div class="row">
	
	<div class="col-sm-4">
		<br><br>
		<h2>Registro del soporte</h2></br>
		<form action="../../backend/controller/soporte.php">
		
		<?php   
            if(isset($_POST['cod_sop'])){
                $sop->pointer = $sop->read_sop_one($_POST['cod_sop']);
                $dataR = $sop->data_box();  
            }
         ?>
		
							<label>Nombre del soporte</label>
							<input type="text" name="nom_sop" id="nom_sop" class="form-control" placeholder="..." minlength="3" maxlength="30" 
							pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
							value="<?php

            					if(isset($dataR['nom_sop'])){
                					 echo $dataR['nom_sop'];
           						  }
            
           						 ?>"

							required><br>
							<label>Descripcion del soporte</label>
							<input type="text" name="des_sop" id="des_sop" class="form-control" placeholder="..." minlength="1" maxlength="150" 
							pattern="[A-Za-z\s]{1,150}" title="Solo letras mayusculas y minusculas !" 
							value="<?php

            					if(isset($dataR['des_sop'])){
                					 echo $dataR['des_sop'];
           						  }
            
           						 ?>"
							
							required><br>
							<br>
							
							<?php 
         						   if(isset($_POST['cod_sop'])){
        					?>

        					 <input type="hidden" name="cod_sop" value="<?php echo $dataR['cod_sop']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar soporte">

       						 <?php
         						   } else {
        					?>

        					<input type="submit" name='option_name' class="form-control" value="Registrar soporte">
             
       						 <?php   
        					}

        					 ?>

							
						</form>
		<br><br>
	</div>
	
	<div class="col-sm-8">
		<br><br>
		<h2>Todos los soportes</h2>
		<table>
			<tr>
				<td>
							<form action="../../backend/controller/soporte.php" method="post">
								 <input type="hidden" name="id_ven" value="<?php echo $data['id_ven']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar soportes">
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
							<form action="soportefull_pdf.php" method="post">
								 <input type="hidden" name="cod_sop" value="<?php echo $data['cod_sop']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>

					 <?php 


					}

					  ?>

					</tr>
			<?php

				$sop->pointer = $sop->read_sop();
				while($data = $sop->data_box()){
					if ($data['sta_sop']== 0) {

			?>
				<tr>
						<td>
							<?php echo $data['nom_sop'];?>
						</td>
						<td>
							<?php echo $data['des_sop'];?>
						</td>
						<td>
							<form action="admin_soporte.php" method="post">
								 <input type="hidden" name="cod_sop" value="<?php echo $data['cod_sop']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>

						<td>
							<form action="../../backend/controller/soporte.php" method="post">
								 <input type="hidden" name="cod_sop" value="<?php echo $data['cod_sop']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar soporte">
							</form>
						</td>

						<td>
							<form action="../../backend/controller/soporte.php" method="post">
								 <input type="hidden" name="cod_sop" value="<?php echo $data['cod_sop']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico soporte">
							</form>
						</td>


						<td>
							<form action="soporte_pdf.php" method="post">
								 <input type="hidden" name="cod_sop" value="<?php echo $data['cod_sop']?>">
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
