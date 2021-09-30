  <!-- Inicio de Secio con Login  -->

<?php if (session()->get('isLoggedIn')): ?>


<!--Busqueda Para Administrador  -->

<?php
      $uri = service('uri');
     ?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Administrador'){
?>

<div style="padding: 30px 100px 30px 100px">
 <section>

 	 <div class="card-header text-center" style="background-color:#1C00ff00;"><h3>Buscar Registros</h3></div>
        <br>
			<form method="post" action="Buscador">

				<label for="inputState">Cursos</label>
			      <select id="cnombre" class="form-control" onKeyUp="lookup(this.value);" name="cnombre">
			      <?php foreach($datos as $key): ?>
			       <option> <?php echo $key->nombrec?> </option>
			       <?php endforeach; ?>
		   </select>	  
		   			<br>	
		   			<center>		
			      <button class="btn text-center" name="buscar" type="submit">Buscar</button>
			 		</center>
			</form>
  </section>
</div>
<?php
 }
 ?>

  <!--Busqueda Para Mestros  -->

 <?php
      $uri = service('uri');
     ?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Maestro'){
?>

<div style="padding: 30px 100px 30px 100px">
 <section>

 	 <div class="card-header text-center" style="background-color:#1C00ff00;"><h3>Buscar Registros</h3></div>
        <br>
			<form method="post" action="Buscador">

				<label for="inputState">Cursos</label>
			      <select id="cnombre" class="form-control" onKeyUp="lookup(this.value);" name="cnombre">
			      <?php foreach($datos as $key): ?>
			       <option> <?php echo $key->nombrec?> </option>
			       <?php endforeach; ?>
		   </select>	  
		   			<br>	
		   			<center>		
			      <button class="btn text-center" name="buscar" type="submit">Buscar</button>
			 		</center>
			</form>
  </section>
</div>
<?php
 }
 ?>

 <?php endif; ?>