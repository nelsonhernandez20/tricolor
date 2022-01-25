<?php
require("shorcut_user.php");
shorcut_header_user('User');

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


						<td>
							<form action="producto_pdf.php" method="post">
								 <input type="hidden" name="cod_pro" value="<?php echo $data['cod_pro']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>


					</tr>


			<?php

				}


			?>

		</table>	
		
	</div>

</div>
</center>