<?php
require("shorcut_user2.php");
shorcut_header_user2('User2');

require('../../backend/class/auditoria.php');
    
$aud = new auditoria;

?>

<center>
<div class="row">
	
	<div class="col-sm-12">
		<br><br>
		<h2><cite>Todas las acciones</cite></h2>
		
		<table>
					<tr>
						<td>
							Fecha
						</td>
						<td>
							Hora
						</td>
						<td>
							Accion
						</td>
						
					</tr>
			<?php

				$aud->pointer = $aud->read_aud();
				while($data = $aud->data_box()){


			?>
				<tr>
						<td>
							<?php echo $data['fec_aud'];?>
						</td>
						<td>
							<?php echo $data['hor_aud'];?>
						</td>
						<td>
							<?php echo $data['acc_aud'];?>
						</td>
						

							<?php

				}


			?>

		</table>	
		
	</div>

</div>
</center>