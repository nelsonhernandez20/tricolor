<?php
require("shorcut_user2.php");
shorcut_header_user2('User2');

require('../../backend/class/producto.php');
    
$pro = new producto;

?>
<center>
<div class="row">
	
	<div class="col-sm-12">
		<br><br>
		<h2><cite>Todos los productos !</cite></h2>
		
		<table>
					<tr>
						<td>
							Nombre
						</td>
						<td>
							Cantidad
						</td>
						<td>
							Fecha
						</td>
						<td>
							Precio
						</td>
						<td>
							PDF
						</td>
					</tr>
			<?php

				$pro->pointer = $pro->read_pro();
				while($data = $pro->data_box()){


			?>
				<tr>
						<td>
							<?php echo $data['nom_pro'];?>
						</td>
						<td>
							<?php echo $data['num_pro'];?>
						</td>
						<td>
							<?php echo $data['fec_pro'];?>
						</td>
						<td>
							<?php echo $data['pre_pro'];?>
						</td>


						

					</tr>


			<?php

				}


			?>

		</table>	
		
	</div>

</div>
</center>