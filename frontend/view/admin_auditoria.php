<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

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
									</tr>
			</table>
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
						<td>
							Opcion
						</td>
						<td>
							<form action="../../backend/controller/auditoria.php" method="post">
								 <input type="hidden" name="cod_aud" value="<?php echo $data['cod_aud']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar auditorias">
							</form>
						</td>
						<td>
							<form action="auditoria_full_pdf.php" method="post">
								 <input type="hidden" name="cod_aud" value="<?php echo $data['cod_aud']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>
						

					</tr>
			<?php

				$aud->pointer = $aud->read_aud();
				while($data = $aud->data_box()){
					if ($data['sta_aud']== 0) {

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
						<td>
							<form action="../../backend/controller/auditoria.php" method="post">
								 <input type="hidden" name="cod_aud" value="<?php echo $data['cod_aud']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Borrar auditoria">
							</form>
						</td>
						
						<td>
							<form action="../../backend/controller/auditoria.php" method="post">
								 <input type="hidden" name="cod_aud" value="<?php echo $data['cod_aud']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico auditoria">
							</form>
						</td>
						<td>
							<form action="auditoria_pdf.php" method="post">
								 <input type="hidden" name="cod_aud" value="<?php echo $data['cod_aud']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>
					</tr>


			<?php
				}
				}


			?>

		</table>	
		
	</div>

</div>
</center>