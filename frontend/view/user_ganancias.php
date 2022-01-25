<?php
require("shorcut_user.php");
shorcut_header_user('User');

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
					


						<td>
							<form action="ganancias_pdf.php" method="post">
								 <input type="hidden" name="cod_gan" value="<?php echo $data['cod_gan']?>">
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