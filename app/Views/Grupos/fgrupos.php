<?php if (session()->get('isLoggedIn')): ?>


 <div style="padding: 30px 0px 30px 0px">

    <div class="container">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
		  <div class="card-header text-center" style="background-color:#1C00ff00;"><h3>Registro Cursos</h3></div>
		  <div class="card-body">

		<form  method="post" action="cursos" method="post">

			<div class="form-row">

				<div class="form-group col-md-6">
			      <label for="nombrec">Nombre del Curso </label>
			      <input onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" id="nombrec" name="nombrec" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="costo">Costo</label>
			      <input onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" id="costo" name="costo" required>
			    </div>

			    <div class="form-group col-md-12">
			      <label for="descripcion">Descripcion</label>
			      <input onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" id="descripcion" name="descripcion" required>
			    </div>
			    			    <div class="form-group col-md-6">
			      <label for="inicioc">Inico de Curso</label>
			       <input name="inicioc" class="form-control" type="datetime-local" value="" id="inicioc">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="finc">Fin de Curso</label>
			      <input name="finc" class="form-control" type="datetime-local" value="" id="finc">
			    </div> 
			</div>
            <br>
		    <center>
			  <button type="submit" class="btn">Registro</button>
			</center>

		</form>
		   </p>
		  </div>
		 </div>
	    </div>
       </div>
 <?php endif; ?>