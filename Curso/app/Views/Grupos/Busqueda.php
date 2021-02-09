<div style="padding: 30px 0px 30px 0px">

    <div class="container">
		<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
		  <div class="card-header text-center" style="background-color:#1C00ff00;"><h3>Busqueda Cursos</h3></div>
		  <div class="card-body">

		<form action="Dashboard/mostrarlista" method="POST">

			<div class="form-row">

				<div class="form-group col-md-4">
			      <label for="inputState">Cursos</label>
			      <select id="Buscar" class="form-control" name="Buscar">
			       <?php foreach($datos as $key): ?>
			       <option> <?php echo $key->Inombre?> </option>
			       <?php endforeach; ?>
		          </select>	   
			    </div>
			</div>
            <br>
		    <center>
			  <input type="submit" name="search" id="btn_submit" value="Buscar"></input>
			</center>

		</form>
		   </p>
		  </div>
		 </div>






	    </div>
       </div>
