<?php
require("shorcut_user2.php");
shorcut_header_user2('User2');

require('../../backend/class/ganancias.php');
    
$gan = new ganancias;

?>
<center>
<div class="row">
	
	<div class="col-sm-12">
		<br><br>
		<h2><cite>Todas las ganancias !</cite></h2>
		
		<table>
					<tr>
						<td>
							Dinero
						</td>
						<td>
							Fecha
						</td>
						<td>
							PDF
						</td>

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
					


						



					</tr>


			<?php

				}


			?>

		</table>	
		
	</div>

</div>
</center>