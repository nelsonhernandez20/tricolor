<?php
require("shorcut_user.php");
shorcut_header_user('User');

require('../../backend/class/soporte.php');
    
$sop = new soporte;

?>
<center>
<div class="col-sm-12">
		<br><br>
		<h2>Todos los soportes</h2>
		
		<table>
					<tr>
						<td>
							Nombre
						</td>
						<td>
							Descripcion
						</td>
						<td>
							opcion
						</td>
						
					</tr>
			<?php

				$sop->pointer = $sop->read_sop();
				while($data = $sop->data_box()){


			?>
				<tr>
						<td>
							<?php echo $data['nom_sop'];?>
						</td>
						<td>
							<?php echo $data['des_sop'];?>
						</td>
						
						<td>
							<form action="soporte_pdf.php" method="post">
								 <input type="hidden" name="cod_sop" value="<?php echo $data['cod_sop']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>

			<?php

				}


			?>

		</table>	
		
		<br><br>
	</div>

</div>
</center>