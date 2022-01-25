<?php
require("shorcut_user.php");
shorcut_header_user('User');

require('../../backend/class/proveedor.php');
    
$prv = new proveedor;

?>

<div class="row">
	
	<div class="offset-sm-3 col-sm-6">
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