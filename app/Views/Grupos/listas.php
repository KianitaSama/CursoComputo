<?php if (session()->get('isLoggedIn')): ?>
<div style="padding: 30px 100px 30px 100px">

<?php
$host="localhost";
$usuario="root";
$contraseña="";
$base="login";

$conexion= new mysqli($host, $usuario, $contraseña, $base);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$where="";
$nombre=$_POST['cnombre'];

if (isset($_POST['buscar']))
{
	if (empty($_POST['cnombre']))
	{
		$where="where Inombre like '".$nombre."%'";
	}

	else
	{
		$where="where Inombre like '".$nombre."%'";
	}
}


$alumnos="SELECT * FROM registro $where ";
$resC=$conexion->query($alumnos);
$resCarreras=$conexion->query($alumnos);

if(mysqli_num_rows($resC)==0)
{
	$mensaje="<h1>No hay registros que coincidan con su criterio de búsqueda.</h1>";
}
?>

<div class="card-header text-center" style="background-color:#1C00ff00;"><h3><?php echo $nombre ?> </h3></div>



<html lang="es">
          
			<table class="table">
				<tr>
					<th>id </th>
					<th>Nombre </th>
					<th>A.Paterno</th>
					<th>A.Materno</th>
					<th>N.Cuenta</th>
					<th class="text-center">Correo</th>
					<th>Estado</th>
					<th>Entregado</th>
					<th>Editar</th>


				</tr>

				<?php

				while($DatosC = $resC->fetch_array(MYSQLI_BOTH)){
		         ?>

				  <tbody >
				  	  <td><?php echo $DatosC['id'] ?></td>
				  	  <td><?php echo $DatosC['nombre'] ?></td>	    
				  	  <td><?php echo $DatosC['paterno'] ?></td>
				  	  <td><?php echo $DatosC['materno'] ?></td>
				  	  <td><?php echo $DatosC['cuenta'] ?></td>
				  	  <td><?php echo $DatosC['correo'] ?></td>
				  	  <td><?php echo $DatosC['estado'] ?></td>
				  	  <td class="text-center"><?php echo $DatosC['Entregado'] ?></td>
				  	  <td class="text-center">
                      <a class="uk-button uk-button-default" style="color:#000000" href="<?php echo site_url('/Dashboard/editarR/').$DatosC['id']?>"> Editar </a>	
                      </td> 			   	  
				  	
                  </td>
                 </tr>	

			    </tbody>
		        <?php }?>
			</table>

			<?
				echo $mensaje;
			?>
		</section>
	</body>
</html>
</div>

<?php endif; ?>