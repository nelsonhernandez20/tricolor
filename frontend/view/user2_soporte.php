<?php
require("shorcut_user2.php");
shorcut_header_user2('User2');

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
						
					
			<?php

				}


			?>

		</table>	
		
		<br><br>
	</div>

</div>
</center>