<?php if (session()->get('isLoggedIn')): ?> 

 <!--Formulario Para Adinistrador (Actualizar) -->
 <?php
      $uri = service('uri');
     ?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Administrador'){
     ?>
<?php 
    $id = $datos[0]['id'];
    $pregistra = $datos[0]['pregistra']; 
    $nombre = $datos[0]['nombre'];
    $paterno = $datos[0]['paterno'];
    $materno = $datos[0]['materno']; 
    $cuenta = $datos[0]['cuenta'];
    $estado = $datos[0]['estado'];  
    $carrera = $datos[0]['carrera'];
    $semestre = $datos[0]['semestre'];   
    $facultad = $datos[0]['facultad'];
    $Pagado = $datos[0]['Pagado'];
    $Acreditado = $datos[0]['Acreditado'];
    $Entregado = $datos[0]['Entregado'];
    $correo = $datos[0]['correo'];
    $Inombre = $datos[0]['Inombre'];
   

 ?>
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Curso de Cómputo</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('public/imagenes/Logo2.png') ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/assets/css/Uli/css/uikit.min.css" />
    <script src="public/assets/css/Uli/js/uikit.min.js"></script>
    <script src="public/assets/css/Uli/js/uikit-icons.min.js"></script>

    <nav class="navbar navbar-expand-lg" style="background-color:#D8D8D8;">
      <div class="header_logo">
       <img width="50" height="50" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>" />
      </div>
    </nav>
</head>

<div style="padding: 30px 40px 30px 40px">
<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
   <input onClick="javascript:window.history.back();" class="btn" type="button" value="Atrás" />
</ul>

    <div class="container">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
		  <div class="card-header text-center" style="background-color:#1C00ff00;"><h4><?php echo $nombre?> <?php echo $paterno?> <?php echo $materno?></h4></div>
		  <div class="card-body">
		    <h5 class=" text-center"> Datos Personales </h5>
		    <p class="card-text">

		    <!--Formulario-->

  
		<form method="POST" action="<?php echo site_url().'actualizar'?>">
         <input type="text" id="id" name="id" hidden="" value="<?php echo $id ?>">

			<div class="form-row">

				 <div class="form-group col-md-12">
			      <label for="pregistra">Persona que Registro:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="pregistra" name="pregistra" value="<?php echo $pregistra ?>">
			    </div>

			    <div class="form-group col-md-6">
			      <label for="nombre">Nombre:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre ?>">
			    </div>

			    <div class="form-group col-md-6">
			      <label for="paterno">Apellido Paterno:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno ?>">
			    </div>
			  
			  <div class="form-group col-md-6">
			    <label for="materno">Apellido Materno:</label>
			    <input type="text"  onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="materno" name="materno" value="<?php echo $materno ?>">
			  </div>

			  <div class="form-group col-md-6">
			    <label for="cuenta">No. Cuenta: </label>
			    <input type="number" class="form-control" id="cuenta" name="cuenta"  value="<?php echo $cuenta ?>">
			  </div>

			  <div class="form-group col-md-12">
			      <label for="correo">Correo:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="correo" name="correo" value="<?php echo $correo ?>">
			   </div>
			 
			  <div class="form-group col-md-12">
			      <label for="Inombre">Correo:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="Inombre" name="Inombre" value="<?php echo $Inombre ?>">
			   </div>
			  </div>

			  <div class="form-row">
			    
			    <div class="form-group col-md-4">
			      <label for="inputState">Estado:</label>
			      <select id="estado" class="form-control" name="estado" value="<?php echo $estado ?>">
			        <option >Egresado</option>
			        <option>Alumno</option>
			      </select>
			    </div>

			    <div class="form-group col-md-4">
			      <label for="inputState">Carrera:</label>
			      <select id="carrera" class="form-control" name="carrera" value="<?php echo $carrera?>">
			        <option >Derecho</option>
			        <option>Comunicación Y Periodismo</option>
			        <option>Economía</option>
			        <option>Planificación Para El Desarrollo Agropecuario</option>
			        <option>Relaciones Internacionales</option>
			        <option>Sociología</option>
			        <option>Arquitectura</option>
			        <option>Diseño Industrial</option>
			        <option>Pedagogía</option>
			        <option>Ingeniería En Computación</option>
			        <option>Ingeniería Civil</option>
			        <option>Ingeniería Eléctrica Electrónica</option>
			        <option>Ingeniería Industrial</option>
			        <option>Ingeniería Mecánica</option>
			        <option>Externo</option>

			      </select>
			    </div>

			    <div class="form-group col-md-4">
			      <label for="semestre">Semestre:</label>
			      <select id="semestre" class="form-control" name="semestre" value="<?php echo $semestre?>">
			        <option >Egresado </option>
			        <option>Primero</option>
		            <option>Segundo</option>
		            <option>Tercero</option>
		            <option>Cuarto</option>
		            <option>Quinto</option>
		            <option>Sexto</option>
		            <option>Septimo</option>
		            <option>Octavo</option>
		            <option>Noveno</option>
		            <option>Decimo</option>
			      </select>
			    </div>


			    <div class="form-group col-md-4">
			      <label for="inputState">Facultad:</label>
			      <select id="facultad" class="form-control" name="facultad" value="<?php echo $facultad?>">
			        <option > Facultad de Estudios Superiores Aragón</option>
			        <option>Facultad de Estudios Superiores Acatlán</option>
			        <option>Facultad de Estudios Superiores Cuautitlán</option>
			        <option> Facultad de Estudios Superiores Iztacala</option>
			        <option> Facultad de Estudios Superiores Zaragoza</option>
			        <option> Facultad de Arquitectura</option>
			        <option> Facultad de Artes y Diseño</option>
			        <option>Facultad de Ciencias</option>
			        <option>Facultad de Ciencias Políticas y Sociales</option>
			        <option>Facultad de Contaduría y Administración</option>
			        <option>Facultad de Derecho</option>
			        <option>Facultad de Economía</option>
			        <option>Facultad de Filosofía y Letras</option>
			        <option>Facultad de Ingeniería</option>
			        <option> Facultad de Medicina</option>
			        <option> Facultad de Medicina Veterinaria y Zootecnia</option>
			        <option>Facultad de Música</option>
			        <option>Facultad de Odontología</option>
			        <option>Facultad de Psicología</option>
			        <option> Facultad de Química</option>
			      </select>
			    </div>	
           		
           	<div class="form-group col-md-4">
			       <label for="inputState">Pago: Gratis= -1; NO Pagado= 0; Pagado= 1</label>
			      <select id="Pagado" class="form-control" name="Pagado" value="<?php echo $Pagado?>">
			        <option >-1</option>
			        <option >0</option>
			        <option>1</option>
		    </select>	   
			</div>
			<div class="form-group col-md-4">
			      <label for="inputState">Acreditado: En Proceso=-1 Si=1 No=0</label>
			      <select id="Acreditado" class="form-control" name="Acreditado" value="<?php echo $Acreditado?>">
			        <option >-1</option>
			        <option >0</option>
			        <option>1</option>
		    </select>	   
			</div>
			<div class="form-group col-md-4">
			      <label for="inputState">Entregado: Si=1 No=0</label>
			      <select id="Entregado" class="form-control" name="Entregado" value="<?php echo $Entregado?>">
			        <option >-1</option>
			        <option >0</option>
			        <option>1</option>
                 </select> 
                </div>
               </div>
			<center>
				<?php if(isset($validation)): ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors()?>
                        </div>
                    </div>
                 <?php endif; ?>
			  <button type="submit" class="btn">Registro</button>
			</center>

		</form>	

		    <!--Formulario-->

		    </p>
		  </div>
		</div>
	</div>
</div>

<?php
 }
 ?>

 <!--Formulario Para Maestros (Actualizar)-->


  <?php
      $uri = service('uri');
     ?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Maestro'){
     ?>
<?php 
    $id = $datos[0]['id'];
    $pregistra = $datos[0]['pregistra']; 
    $nombre = $datos[0]['nombre'];
    $paterno = $datos[0]['paterno'];
    $materno = $datos[0]['materno']; 
    $cuenta = $datos[0]['cuenta'];
    $estado = $datos[0]['estado'];  
    $carrera = $datos[0]['carrera'];
    $semestre = $datos[0]['semestre'];   
    $facultad = $datos[0]['facultad'];
    $Pagado = $datos[0]['Pagado'];
    $Acreditado = $datos[0]['Acreditado'];
    $Entregado = $datos[0]['Entregado'];
    $correo = $datos[0]['correo'];
    $Inombre = $datos[0]['Inombre'];
   

 ?>
<head>
   <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Curso de Cómputo</title>
    <link rel="icon" type="image/png" href="<?php echo base_url('public/imagenes/Logo2.png') ?>" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/assets/css/Uli/css/uikit.min.css" />
    <script src="public/assets/css/Uli/js/uikit.min.js"></script>
    <script src="public/assets/css/Uli/js/uikit-icons.min.js"></script>

    <nav class="navbar navbar-expand-lg" style="background-color:#D8D8D8;">
      <div class="header_logo">
       <img width="50" height="50" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>" />
      </div>
    </nav>
</head>

<div style="padding: 30px 40px 30px 40px">
<ul class="uk-breadcrumb" style="padding:  0px 70px 0px 70px">
    <a class="btn-btn" href="<?php echo base_url();?>./">Regresar</a>
</ul>

    <div class="container">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
		  <div class="card-header text-center" style="background-color:#1C00ff00;"><h4><?php echo $nombre?> <?php echo $paterno?> <?php echo $materno?></h4></div>
		  <div class="card-body">
		    <h5 class=" text-center"> Datos Personales </h5>
		    <p class="card-text">

		    <!--Formulario-->

  
		<form method="POST" action="<?php echo site_url().'actualizar'?>">
         <input type="text" id="id" name="id" hidden="" value="<?php echo $id ?>">

			<div class="form-row">

				 <div class="form-group col-md-12">
			      <label for="pregistra">Persona que Registro:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="pregistra" name="pregistra" value="<?php echo $pregistra ?>">
			    </div>

			    <div class="form-group col-md-6">
			      <label for="nombre">Nombre:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre ?>">
			    </div>

			    <div class="form-group col-md-6">
			      <label for="paterno">Apellido Paterno:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="paterno" name="paterno" value="<?php echo $paterno ?>">
			    </div>
			  
			  <div class="form-group col-md-6">
			    <label for="materno">Apellido Materno:</label>
			    <input type="text"  onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="materno" name="materno" value="<?php echo $materno ?>">
			  </div>

			  <div class="form-group col-md-6">
			    <label for="cuenta">No. Cuenta: </label>
			    <input type="number" class="form-control" id="cuenta" name="cuenta"  value="<?php echo $cuenta ?>">
			  </div>

			  <div class="form-group col-md-12">
			      <label for="correo">Correo:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="correo" name="correo" value="<?php echo $correo ?>">
			   </div>
			 
			  <div class="form-group col-md-12">
			      <label for="Inombre">Correo:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="Inombre" name="Inombre" value="<?php echo $Inombre ?>">
			   </div>
			  </div>

			  <div class="form-row">
			    
			    <div class="form-group col-md-4">
			      <label for="inputState">Estado:</label>
			      <select id="estado" class="form-control" name="estado" value="<?php echo $estado ?>">
			        <option >Egresado</option>
			        <option>Alumno</option>
			      </select>
			    </div>

			    <div class="form-group col-md-4">
			      <label for="inputState">Carrera:</label>
			      <select id="carrera" class="form-control" name="carrera" value="<?php echo $carrera?>">
			        <option >Derecho</option>
			        <option>Comunicación Y Periodismo</option>
			        <option>Economía</option>
			        <option>Planificación Para El Desarrollo Agropecuario</option>
			        <option>Relaciones Internacionales</option>
			        <option>Sociología</option>
			        <option>Arquitectura</option>
			        <option>Diseño Industrial</option>
			        <option>Pedagogía</option>
			        <option>Ingeniería En Computación</option>
			        <option>Ingeniería Civil</option>
			        <option>Ingeniería Eléctrica Electrónica</option>
			        <option>Ingeniería Industrial</option>
			        <option>Ingeniería Mecánica</option>
			        <option>Externo</option>

			      </select>
			    </div>

			    <div class="form-group col-md-4">
			      <label for="semestre">Semestre:</label>
			      <select id="semestre" class="form-control" name="semestre" value="<?php echo $semestre?>">
			        <option >Egresado </option>
			        <option>Primero</option>
		            <option>Segundo</option>
		            <option>Tercero</option>
		            <option>Cuarto</option>
		            <option>Quinto</option>
		            <option>Sexto</option>
		            <option>Septimo</option>
		            <option>Octavo</option>
		            <option>Noveno</option>
		            <option>Decimo</option>
			      </select>
			    </div>


			    <div class="form-group col-md-4">
			      <label for="inputState">Facultad:</label>
			      <select id="facultad" class="form-control" name="facultad" value="<?php echo $facultad?>">
			        <option > Facultad de Estudios Superiores Aragón</option>
			        <option>Facultad de Estudios Superiores Acatlán</option>
			        <option>Facultad de Estudios Superiores Cuautitlán</option>
			        <option> Facultad de Estudios Superiores Iztacala</option>
			        <option> Facultad de Estudios Superiores Zaragoza</option>
			        <option> Facultad de Arquitectura</option>
			        <option> Facultad de Artes y Diseño</option>
			        <option>Facultad de Ciencias</option>
			        <option>Facultad de Ciencias Políticas y Sociales</option>
			        <option>Facultad de Contaduría y Administración</option>
			        <option>Facultad de Derecho</option>
			        <option>Facultad de Economía</option>
			        <option>Facultad de Filosofía y Letras</option>
			        <option>Facultad de Ingeniería</option>
			        <option> Facultad de Medicina</option>
			        <option> Facultad de Medicina Veterinaria y Zootecnia</option>
			        <option>Facultad de Música</option>
			        <option>Facultad de Odontología</option>
			        <option>Facultad de Psicología</option>
			        <option> Facultad de Química</option>
			      </select>
			    </div>	
           		
           	<div class="form-group col-md-4">
			       <label for="inputState">Pago: Gratis= -1; NO Pagado= 0; Pagado= 1</label>
			      <select id="Pagado" class="form-control" name="Pagado" value="<?php echo $Pagado?>">
			        <option >-1</option>
			        <option >0</option>
			        <option>1</option>
		    </select>	   
			</div>
			<div class="form-group col-md-4">
			      <label for="inputState">Acreditado: En Proceso=-1 Si=1 No=0</label>
			      <select id="Acreditado" class="form-control" name="Acreditado" value="<?php echo $Acreditado?>">
			        <option >-1</option>
			        <option >0</option>
			        <option>1</option>
		    </select>	   
			</div>
			<div class="form-group col-md-4">
			      <label for="inputState">Entregado: Si=1 No=0</label>
			      <select id="Entregado" class="form-control" name="Entregado" value="<?php echo $Entregado?>">
			        <option >-1</option>
			        <option >0</option>
			        <option>1</option>
                 </select> 
                </div>
               </div>
			<center>
				<?php if(isset($validation)): ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors()?>
                        </div>
                    </div>
                 <?php endif; ?>
			  <button type="submit" class="btn">Registro</button>
			</center>

		</form>	

		    <!--Formulario-->

		    </p>
		  </div>
		</div>
	</div>
</div>

<?php
 }
 ?>


<?php endif; ?>