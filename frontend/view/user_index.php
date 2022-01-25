<?php
require("shorcut_user.php");
shorcut_header_user('User');

session_start();

require('../../backend/class/usuario.php');
    
$usu = new usuario;

?>

<div class="row">
	
	<div class="offset-sm-3 col-sm-6">
		<br><br>
		<h2><cite>Mi perfil</cite></h2>
		
		<table>
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

				$usu->pointer = $usu->read_usu_one($_SESSION['cod_usu']);
				$data = $usu->data_box();

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

					</tr>

		</table>	
		
	</div>

</div>
