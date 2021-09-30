
<div class="container">
    <div class="row">
        <div class="col-12 col-sm8- offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper">
            <div class="container" >
           
                <p  align="Center"> <img width="70" height="70" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>"></img> <FONT SIZE=5> Cursos Cómputo</font></p>
                <hr>
          
                <!--significa horizontal line, es un espaciado entre lineas, como un salto de línea-->
                <?php if(session()->get('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->get('success') ?>
                    </div>
                <?php endif; ?>
                <form class="" action="./" method="post">
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?=set_value('email')?>"> 
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" value=""> 
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
                            <button align="right" type="submit" class="btn">Ingresar</button>
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
<br>
<br>
<br>

