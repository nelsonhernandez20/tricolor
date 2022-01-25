<?php 

require("shorcut_user.php");
shorcut_header_user('User');

require('../../backend/class/ganancia_total.php');

$ganancias_total = new GananciaTotal; 

 ?>

 <div class="col-sm-8">
 	<br><br>
		<h2>Ganancia Total</h2>

		<table>
			
			<tr>
				<td>
					Ganancia Total
				</td>
				<td>
					Fecha
				</td>
				<?php 


				 ?>

				 <td>
							<form action="ganancia_total_full_pdf.php" method="post">
								 <input type="hidden" name="id_gan" value="<?php echo $data['id_gan']?>">
                        		<input type="submit" target="_blank" class="form-control btn-danger" name="option_name" value="pdf">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/user_ganancia_total.php" method="post">
								 <input type="hidden" name="id_gan" value="<?php echo $data['id_gan']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restaurar ganancias">
							</form>
						</td>
				 <?php 


				  ?>

			</tr>

			<?php 

			$ganancias_total->pointer = $ganancias_total->read_ganancia_total();
			while ($data= $ganancias_total->data_box()) {
				
				if ($data['sta_gan']== 0) {
					// code...

			
			 ?>

			 <tr>
			 	<td>
			 		<?php echo $data['gan_total'];?>
			 	</td>
			 	<td>
			 		<?php echo $data['fec_gan'];?>
			 	</td>
			 	<td>
							<form action="../../backend/controller/user_ganancia_total.php" method="post">
								 <input type="hidden" name="id_gan" value="<?php echo $data['id_gan']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar Ganancia">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/user_ganancia_total.php" method="post">
								 <input type="hidden" name="id_gan" value="<?php echo $data['id_gan']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico ganancias">
							</form>
						</td>
						<td>
							<form action="ganancia_total_pdf.php" method="post">
								 <input type="hidden" name="id_gan" value="<?php echo $data['id_gan']?>">
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