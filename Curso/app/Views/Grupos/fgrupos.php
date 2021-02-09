 <div style="padding: 30px 0px 30px 0px">

    <div class="container">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
		  <div class="card-header text-center" style="background-color:#1C00ff00;"><h3>Registro Cursos</h3></div>
		  <div class="card-body">

		<form  method="post" action="cursos" method="post">

			<div class="form-row">

				<div class="form-group col-md-6">
			      <label for="Inombre">Nombre del Curso </label>
			      <input onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" id="Inombre" name="Inombre" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="Inombre">Costo</label>
			      <input onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" id="Inombre" name="Inombre" required>
			    </div>

			    <div class="form-group col-md-12">
			      <label for="Inombre">Descripcion</label>
			      <input onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" class="form-control" id="Inombre" name="Inombre" required>
			    </div>
			    			    <div class="form-group col-md-6">
			      <label for="InicioC">Inico de Curso</label>
			       <input name="InicioC" class="form-control" type="datetime-local" value="" id="InicioC">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="FinC">Fin de Curso</label>
			      <input name="FinC" class="form-control" type="datetime-local" value="" id="FinC">
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
