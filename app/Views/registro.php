<?php if (session()->get('isLoggedIn')): ?>  
     <?php
      $uri = service('uri');
     ?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Administrador'){
     ?>
<?php
    $conexion=mysqli_connect('localhost','root','','login');
 ?>
<div style="padding: 30px 0px 30px 0px"> 
    <div class="container">

    	<div class="uk-card uk-width-1-2@m" >
		  <div class="card-header text-secondary text-center"><h3 style="color:#000000">Registro Curso de Cómputo</h3></div>
		  <div class="card-body">

		  			<table class="table text-center">
				  <thead>
				    <tr>
				      <th class="table-warning" class="table-active">Nombre</th>
				      <th >A.Paterno</th>
				      <th class="table-warning" class="table-active">A.Materno</th>
				      <th >No.Cuenta</th>
				      <th class="table-warning" class="table-active">Curso Computo</th>
				    <!--   <th >Borrar</th>-->
				      <th  >Editar</th>
				      
				    </tr>
				  </thead>
				<?php 
		        $sql="SELECT * from registro";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		         ?>

				  <tbody >
				  	<tr>
				    <td class="table-warning" class="table-active" ><?php echo $mostrar['nombre'] ?></td>
				    <td><?php echo $mostrar['paterno'] ?></td>
				    <td class="table-warning" class="table-active"><?php echo $mostrar['materno'] ?></td>
				    <td><?php echo $mostrar['cuenta'] ?></td>
				    <td class="table-warning" class="table-active"><?php echo $mostrar['Inombre'] ?></td>	            
                    <td>
                  <!-- <a class="uk-button uk-button-default" style="color:#000000" href="<?php echo site_url('/Dashboard/Borrar/').$mostrar['id']?>"> Borrar </a>	
                   <td class="table-warning" class="table-active">-->


                   <a class="uk-button uk-button-default" style="color:#000000" href="<?php echo site_url('/Dashboard/editarR/').$mostrar['id']?>"> Editar </a>	


                                     </td> 
                  </td>
                 </tr>				    
			    </tbody>
		    <?php }?>
		  </table>
		</div>
	  </div>
	</div>
  </div>
 <?php
 }
 ?>
      <?php
      $uri = service('uri');
     ?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Maestro'){
     ?>
<?php
    $conexion=mysqli_connect('localhost','root','','login');
 ?>
<div style="padding: 30px 0px 30px 0px"> 
    <div class="container">

    	<div class="uk-card uk-width-1-2@m" >
		  <div class="card-header text-secondary text-center"><h3 style="color:#000000">Registro Curso de Cómputo</h3></div>
		  <div class="card-body">

		  			<table class="table text-center">
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
				<?php 
		        $sql="SELECT * from registro";
		        $result=mysqli_query($conexion,$sql);

		        while($mostrar=mysqli_fetch_array($result)){
		         ?>

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
		</div>
	  </div>
	</div>
  </div>
 <?php
 }
 ?>
  <?php endif; ?>