<?php
require("shorcut_user2.php");
shorcut_header_user2('User2');

require('../../backend/class/usuario.php');
    
$usu = new usuario;

?>
<center>
<div class="row">
	
	<div class="col-sm-12">
		<br><br>

		<h2>Control de usuarios</h2>

			<table border="1">
					<tr>
						<td>
							Nombre
						</td>
						<td>
							Apeliido
						</td>
						<td>
							Cedula
						</td>
						<td>
							Fecha
						</td>
						<td>
							Sexo
						</td>
						<td>
							Telefono
						</td>
						<td>
							Nickname
						</td>
						
					</tr>
			<?php

				$usu->pointer = $usu->read_usu();
				while($data = $usu->data_box()){


			?>
				<tr>
						<td>
							<?php echo $data['nom_usu'];?>
						</td>
						<td>
							<?php echo $data['ape_usu'];?>
						</td>
						<td>
							<?php echo $data['ced_usu'];?>
						</td>
						<td>
							<?php echo $data['fec_usu'];?>
						</td>
						<td>
							<?php echo $data['sex_usu'];?>
						</td>
						<td>
							<?php echo $data['tlf_usu'];?>
						</td>
						<td>
							<?php echo $data['nic_usu'];?>
						</td>
<?php

				}


			?>


				</table>	
		
	</div>

</div>
</center>
