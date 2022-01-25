<?php
require("shorcut_admin.php");
shorcut_header_admin('Admin');

require('../../backend/class/usuario.php');
    
$usu = new usuario;

?>
<center>
<div class="row">
	
	<div class="col-sm-4">
		<br><br>
		<h2>Control de clientes</h2></br>

		  <?php   
            if(isset($_POST['cod_usu'])){
                $usu->pointer = $usu->read_usu_one($_POST['cod_usu']);
                $dataR = $usu->data_box();  
            }
         ?>

         <form action="../../backend/controller/usuario.php">
         <label>Nombre de usuario</label>
							<input type="text" name="nom_usu" id="nom_usu" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
								value="<?php

            					if(isset($dataR['nom_usu'])){
                					 echo $dataR['nom_usu'];
           						  }
            
           						 ?>"	
								required><br>

								<label>Apellido</label>
							<input type="text" name="ape_usu" id="ape_usu" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
								value="<?php

            					if(isset($dataR['ape_usu'])){
                					 echo $dataR['ape_usu'];
           						  }
            
           						 ?>"	
								required><br>

								<label>Cedula del usuario</label>
							<input type="text" name="ced_usu" id="ced_usu" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								 
								value="<?php

            					if(isset($dataR['ced_usu'])){
                					 echo $dataR['ced_usu'];
           						  }
            
           						 ?>"	
								><br>
								<label>Telefono del usuario</label>
								<select name="codigo">
								<option value="0416"><p>0416</p></option>
								<option value="0426">0426</option>
								<option value="0414">0414</option>
								<option value="0424">0424</option>
								<option value="0412">0412</option>
								</select>

							<input type="text" name="tlf_usu" id="tlf_usu" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								
								value="<?php

            					if(isset($dataR['tlf_usu'])){
                					 echo $dataR['tlf_usu'];
           						  }
            
           						 ?>"	
								><br>
								<label>clave del usuario</label>
							<input type="text" name="con_usu" id="con_usu" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								
								value="<?php

            					if(isset($dataR['con_usu'])){
                					 echo $dataR['con_usu'];
           						  }
            
           						 ?>"	
								><br>
								<label>nick del ususario</label>
							<input type="text" name="nic_usu" id="nic_usu" class="form-control" placeholder="..." minlength="3" maxlength="30" 
								pattern="[A-Za-z\s]{3,30}" title="Solo letras mayusculas y minusculas !" 
								value="<?php

            					if(isset($dataR['nic_usu'])){
                					 echo $dataR['nic_usu'];
           						  }
            
           						 ?>"	
								required><br>

								<label>estatus del usuario</label>
							<input type="text" name="sta_usu" id="sta_usu" class="form-control" placeholder="..." 
								
								value="<?php

            					if(isset($dataR['sta_usu'])){
                					 echo $dataR['sta_usu'];
           						  }
            
           						 ?>"	
								required><br>
								<?php 
         						   if(isset($_POST['cod_usu'])){
        					?>
        					<label>M</label>
							<input type="radio" name="sex_usu" class="form-control" value="M" required>
							<label>F</label>
							<input type="radio" name="sex_usu" class="form-control" value="F" required><br><br>

        					 <input type="hidden" name="cod_usu" value="<?php echo $dataR['cod_usu']?>">
        					 <input type="submit" name='option_name' class="form-control" value="Actualizar usuario">

       						 <?php
         						   } else {
        					?>

        					<input type="submit" name='option_name' class="form-control" value="Crear cuenta">
             
       						 <?php   
        					}

        					 ?>

						</form>

     </div>

</div>
<div class="row">
	<div class="col-sm-6">
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
						<td>
							Opcion
						</td>
						<td>
							<form action="../../backend/controller/usuario.php" method="post">
								 <input type="hidden" name="cod_usu" value="<?php echo $data['cod_usu']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="restauracion usuarios">
							</form>
						</td>
					</tr>
			<?php

				$usu->pointer = $usu->read_usu();
				while($data = $usu->data_box()){
					if ($data['rol_usu']== 0) {

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
						<td>
							<?php echo $data['sta_usu'];?>
						</td>
						<td>
							<form action="admin_user.php" method="post">
								 <input type="hidden" name="cod_usu" value="<?php echo $data['cod_usu']?>">
                        		<input type="submit" class="form-control btn-primary" name="option_name" value="Actualizar">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/usuario.php" method="post">
								 <input type="hidden" name="cod_usu" value="<?php echo $data['cod_usu']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="borrado logico usuario">
							</form>
						</td>
						<td>
							<form action="../../backend/controller/usuario.php" method="post">
								 <input type="hidden" name="cod_usu" value="<?php echo $data['cod_usu']?>">
                        		<input type="submit" class="form-control btn-danger" name="option_name" value="Eliminar usuario">
							</form>
						</td>


					</tr>


			<?php
				}
				}


			?>

		</table>	

		<br><br>
	</div>

</div>

</center>