<?php if (session()->get('isLoggedIn')): ?>  
<?php
      $uri = service('uri');

?>
     <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Uusuario'){
     ?>  
<div style="padding: 30px 0px 30px 0px"> 
    <div class="container">
       <div class="card-header text-secondary text-center"><h3 style="color:#000000">Registro Curso de Cómputo</h3></div>
    	 <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table text-center">
                        <tr>
                            <th style="background-color:#FF9E5F;" class="table-active">Nombre</th>
                            <th>Apellido paterno</th>
                            <th style="background-color:#FF9E5F;" class="table-active">Apellido materno</th>
                        </tr>  
                      <?php foreach($datos as $key): ?>
                        <tr>
                            <td style="background-color:#FF9E5F;" class="table-active"><?php echo $key->nombre ?></td>
                            <td><?php echo $key->paterno ?></td>
                            <td style="background-color:#FF9E5F;" class="table-active"><?php echo $key->materno ?></td>
                        </tr>
                    <?php endforeach; ?>                     
            </table>
          </div>
        </div>
      </div>
	</div>
  </div>
  <?php
 }
 ?>
 <?php endif; ?>