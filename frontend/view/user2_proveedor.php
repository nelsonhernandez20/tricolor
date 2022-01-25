<?php
require("shorcut_user2.php");
shorcut_header_user2('User2');

require('../../backend/class/proveedor.php');
    
$prv = new proveedor;

?>
<center>
<div class="row">
	
	<div class="col-sm-12">
		<br><br>
		<h2><cite>Todos los proveedores !</cite></h2>
		
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
							PDF
						</td>
					</tr>
			<?php

				$prv->pointer = $prv->read_prv();
				while($data = $prv->data_box()){


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
					

					

					</tr>


			<?php

				}


			?>

		</table>	
		
	</div>

</div>
</center>