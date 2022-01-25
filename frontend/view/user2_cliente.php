	<?php
require("shorcut_user.php");
shorcut_header_user('User2');


require('../../backend/class/cliente.php');
    
$cli = new cliente;

?>

<center>
	<div class="col-sm-12">
		<br><br>

		<h2>Todos los clientes</h2>

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
							cuenta
						</td>
						<td>
							opcion
						</td>

						
					</tr>
			<?php

				$cli->pointer = $cli->read_cli();
				while($data = $cli->data_box()){


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
							
							

			<?php

				}


			?>

			</table>	

		<br><br>
	</div>

</div>
</center>