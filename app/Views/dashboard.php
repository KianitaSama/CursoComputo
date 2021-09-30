<?php if (session()->get('isLoggedIn')): ?>



<head>
		
		<script type="text/javascript" src="public/js/ajax.js"></script> 
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>

 <div style="padding: 30px 0px 30px 0px">

    <div class="container">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
		  <div class="card-header text-center" style="background-color:#1C00ff00;"><h3><?= session()->get('firstname')?>  <?= session()->get('lastname') ?></h3></div>
		  <div class="card-body">
		    <h5 class=" text-center">Formulario Inscripción Curso de Cómputo </h5>
		    <p class="card-text">

		    <!--Formulario-->

		<form  method="post" action="registro" method="post">

			<div class="form-row">

				<div class="form-group col-md-12">
			      <label for="pregistra">Persona que Registra:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="pregistra" name="pregistra" required>
			    </div>

			    <div class="form-group col-md-12">
			      <label for="nombre">Nombres:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="nombre" name="nombre" required>
			    </div>

			    <div class="form-group col-md-4">
			      <label for="paterno">Apellido Paterno:</label>
			      <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="paterno" name="paterno" required>
			    </div>
			  
			  <div class="form-group col-md-4">
			    <label for="materno">Apellido Materno:</label>
			    <input type="text" onkeyup="javascript:this.value=this.value.toUpperCase();" class="form-control" id="materno" name="materno" required>
			  </div>

			  <div class="form-group col-md-4">
			    <label for="correo">Correo:</label>
			    <input type="text" class="form-control" id="correo" name="correo" required>
			  </div>

			 
			</div>


			  <div class="form-row">

			  <div class="form-group col-md-4">
			      <label for="inputState">Estado:</label>
			      <select id="estado" class="form-control" name="estado">
			        <option >Alumno</option>
			        <option >Egresado</option>
			        <option>Externo</option>
			      </select>
			  </div>

			  <div class="form-group col-md-4">
			    <label for="cuenta">No. Cuenta: </label>
			    <input type="number" class="form-control" id="cuenta" name="cuenta" required>
			  </div>
			    

			    <div class="form-group col-md-4">
			      <label for="inputState">Carrera:</label>
			      <select id="carrera" class="form-control" name="carrera">
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
			      <label for="inputState">Semestre:</label>
			      <select id="semestre" class="form-control" name="semestre">
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
			      <select id="facultad" class="form-control" name="facultad">
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
			<div class="form-group col-md-12">
			      <label for="inputState">Cursos</label>
			      <select id="Inombre" class="form-control" onKeyUp="lookup(this.value);" name="Inombre">
			      <?php foreach($datos as $key): ?>
			       <option> <?php echo $key->nombrec?> </option>
			       <?php endforeach; ?>
		   </select>	  
           </div>
     <!-- Campos de Modificacion   <div class="form-group col-md-12">
			      <label for="inputState">Descipción Cursos</label>
			      <select id="Inombre" class="form-control" name="Inombre">
			       
			       <option>  </option>
			       <		   </select>	  
           </div>
			<div class="form-group col-md-8">
			      <label for="inputState">Descipción de Pago</label>
			      <select id="Inombre" class="form-control" name="Inombre">
			      
			       <option>  </option>
			      
		   </select>	  
           </div>  -->
            <div class="form-group col-md-4">
			      <label for="inputState">Pago:</label>
			      <select id="Pagado" class="form-control" name="Pagado">
			      	<option value="-1">Gratis</option>
			        <option value="0" >No Pagado</option>
			        <option value="1"> Pagado </option>
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


  <?php endif; ?>