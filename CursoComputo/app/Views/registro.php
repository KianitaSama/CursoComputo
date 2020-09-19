<?php if (session()->get('isLoggedIn')): ?>  
<?php
    $conexion=mysqli_connect('localhost','root','root','login');
 ?>
<div style="padding: 30px 0px 30px 0px">
    <div class="container">

    	<div class="card">
		  <div class="card-header text-secondary text-center"><h3>Registro Curso de Cómputo</h3></div>
		  <div class="card-body">

		  			<table class="table table-bordered  text-center">
				  <thead>
				    <tr>
				      <th class="table-active" >Nombre</th>
				      <th>A.Paterno</th>
				      <th class="table-active">A.Materno</th>
				      <th >No.Cuenta</th>
				      <th class="table-active">Carrera</th>
				      <th>Borrar</th>
				      <th class="table-active">Constancia</th>

				    </tr>
				  </thead>
				<?php 
		        $sql="SELECT * from registro";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		         ?>

				  <tbody >
				  	<tr>
				    <td class="table-active" ><?php echo $mostrar['nombre'] ?></td>
				    <td><?php echo $mostrar['paterno'] ?></td>
				    <td class="table-active"><?php echo $mostrar['materno'] ?></td>
				    <td><?php echo $mostrar['cuenta'] ?></td>
				    <td class="table-active"><?php echo $mostrar['carrera'] ?></td>	            
                    <td>
                   <a href="borrar?id=<?php echo $mostrar['id']; ?>" class="btn btn-outline-danger" role="button" ><i class="fa fa-trash"></i>Borrar</a>
                    </td>
                    <td class="table-active">
                    	<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						  <label class="form-check-label" for="defaultCheck1">
						    Entregada
						  </label>
						</div>
                   </td>
			      </tr>				    
			    </tbody>
		    <?php }?>
		  </table>
		</div>
	  </div>
	</div>
  </div>

  <?php endif; ?>