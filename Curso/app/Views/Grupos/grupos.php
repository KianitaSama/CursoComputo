<?php
    $conexion=mysqli_connect('localhost','root','','login');
    ?>

              <?php 
		        $sql = " SELECT * from registro where carrera = 'Derecho' ";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
	 ?><table class="table text-center">
				  <thead>
				    <tr>
				      <th style="background-color:#FF9E5F;" class="table-active">Nombre</th>
				      <th>A.Paterno</th>
				      <th style="background-color:#FF9E5F;" class="table-active">A.Materno</th>
				      <th>No.Cuenta</th>
				      <th style="background-color:#FF9E5F;" class="table-active">Carrera</th>
				      <th>Borrar</th>
				      <th style="background-color:#FF9E5F;" class="table-active">Editar</th>
				      
				    </tr>
				  </thead>


				  <tbody >
				  	<tr>
				    <td style="background-color:#FF9E5F;" class="table-active" ><?php echo $mostrar['nombre'] ?></td>
				    <td><?php echo $mostrar['paterno'] ?></td>
				    <td style="background-color:#FF9E5F;" class="table-active"><?php echo $mostrar['materno'] ?></td>
				    <td><?php echo $mostrar['cuenta'] ?></td>
				    <td style="background-color:#FF9E5F;" class="table-active"><?php echo $mostrar['carrera'] ?></td>	            
                    <td>
                   <a href="borrar?id=<?php echo $mostrar['id']; ?>" class="btn btn-outline-danger" role="button" ><i class="fa fa-trash"></i>Borrar</a>
                   <td style="background-color:#FF9E5F;" class="table-active">
                   <a class="uk-button uk-button-default" style="color:#000000" href="<?php echo site_url('/Dashboard/editarR/').$mostrar['id']?>"> Editar </a>	
                   </td> 
                  </td>
                 </tr>				    
			    </tbody>
		    <?php }?>
		  </table>
