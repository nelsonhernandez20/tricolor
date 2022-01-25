<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/ganancias.php');
    
$gan = new ganancias;

?>

<div class="row">
	
	<div class="col-sm-4">
		<br><br>
		<h2>Control de las ganancias</h2></br>

		<?php   
            if(isset($_POST['cod_gan'])){
                $gan->pointer = $gan->read_gan_one($_POST['cod_gan']);
                $dataR = $gan->data_box();  
            }
         ?>

		<form action="../../backend/controller/ganancias.php" method="post">
							<label>Dinero</label>
							<input type="text" name="din_gan" id="din_gan" class="form-control" placeholder="..." minlength="3" maxlength="30" 
							pattern="[0-9]{1,11}" title="Solo letras mayusculas y minusculas !" 
							value="<?php

            					if(isset($dataR['din_gan'])){
                					 echo $dataR['din_gan'];
           						  }
            
           						 ?>"

							required><br>
							<label>Fecha</label>
							<input type="date" name="fec_gan" id="fec_gan" class="form-control" 

							value="<?php

            					if(isset($dataR['fec_gan'])){
                					 echo $dataR['fec_gan'];
           						  }
            
           						 ?>"
					
							required><br>	
							<br>
							
							<?php 
         						   if(isset($_POST['cod_gan'])){
        					?>

        					 <input type="hidden" name="cod_gan" value="<?php echo $dataR['cod_gan']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar ganancias">

       						 <?php
         						   } else {
        					?>

        					<input type="submit" name='option_name' class="form-control" value="Registrar ganancias">
             
       						 <?php   
        					}

        					 ?>

						</form>
		<br><br>
	</div>
	
	<div class="col-sm-8">

		<br><br>

		<h2>Todos las ganancias</h2>
		
			<table>
					<tr>
						<td>
							Dinreo
						</td>
						<td>
							Fecha
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
							<form action="gananciasfull_pdf.php" method="post">
								 <input type="hidden" name="cod_gan" value="<?php echo $data['cod_gan']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>

					 <?php 


					}

					  ?>


					</tr>
			<?php

				$gan->pointer = $gan->read_gan();
				while($data = $gan->data_box()){


			?>
				<tr>
						<td>
							<?php echo $data['din_gan'];?>
						</td>
						<td>
							<?php echo $data['fec_gan'];?>
						</td>
						<td>
							<form action="admin_ganancias.php" method="post">
								 <input type="hidden" name="cod_gan" value="<?php echo $data['cod_gan']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>

						<td>
							<form action="../../backend/controller/ganancias.php" method="post">
								 <input type="hidden" name="cod_gan" value="<?php echo $data['cod_gan']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar ganancias">
							</form>
						</td>

						<td>
							<form action="ganancias_pdf.php" method="post">
								 <input type="hidden" name="cod_gan" value="<?php echo $data['cod_gan']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>


					</tr>


			<?php

				}


			?>

		</table>	


		<br><br>
	</div>

</div>
