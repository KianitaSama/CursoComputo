<?php if (session()->get('isLoggedIn')): ?>  
     <?php
      $uri = service('uri');
     ?>
      <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Administrador'){
        ?>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container">
                <h3>Registro Usuario </h3>
                <hr>
                <form class="" action="./register" method="post">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <label for="inputState">Tipo de Usuario</label>
                        <select id="firstname" class="form-control" name="firstname">
                        <option>Administrador </option>
                        <option>Maestro </option>
                        <option>Usuario</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <label for="email">Nombre</label>
                        <input type="text" class="form-control" name="lastname" id="lastname" value="<?=set_value('lastname')?>"> 
                    </div>
                    <div class="col-12 col-6">
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>"> 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" value=""> 
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="form-group">
                            <label for="password_confirm">Confirmar Contraseña</label>
                            <input type="password" class="form-control" name="password_confirm" id="password_confirm" value=""> 
                        </div>
                    </div>
                </div>
                <?php if(isset($validation)): ?>
                    <div class="col-12">
                        <div class="alert alert-danger" role="alert">
                            <?= $validation->listErrors()?>
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn">Registrar</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="./">Ya tienes una cuenta</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
 <?php
 }
 ?> 
  <?php endif; ?>