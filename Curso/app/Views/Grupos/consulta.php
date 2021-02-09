<?php
    $conexion=mysqli_connect('localhost','root','','login');
 ?>
<div style="padding: 30px 0px 30px 0px"> 
    <div class="container">

        <div class="uk-card uk-width-1-2@m" >
          <div class="card-header  text-center"><h3 style="color:#000000">Registro Curso de Cómputo</h3></div>
          <div class="card-body">

                    <table class="table text-center">
                  <thead>
                    <tr>
                      <th class="table-warning" class="table-active">Nombre</th>
                      <th >A.Paterno</th>
                      <th class="table-warning" class="table-active">A.Materno</th>
                      <th >Listas</th>
                     
                      
                    </tr>
                  </thead>
                <?php 
                $sql="SELECT * from cursos";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                 ?>

                  <tbody >
                    <tr>
                    <td class="table-warning" class="table-active" ><?php echo $mostrar['Inombre'] ?></td>
                    <td><?php echo $mostrar['InicioC'] ?></td>
                    <td class="table-warning" class="table-active"><?php echo $mostrar['FinC'] ?></td>
                  
                    <td>
                   <a class="uk-button uk-button-default" style="color:#000000" href="<?php echo site_url('intento/').$mostrar['Inombre']?>"> Listas </a>  
                   </td>
                 </tr>                  
                </tbody>
            <?php }?>
          </table>
        </div>
      </div>
    </div>
  </div>