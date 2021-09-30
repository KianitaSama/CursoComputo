<!DOCTYPE html>
<html lang="en" dir="ltr">
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

</head>
<body>

     <?php
      $uri = service('uri');
     ?>

<nav class="navbar navbar-expand-lg" style="background-color:#D8D8D8;">
<!-- <img width="60" height="60" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>"></img>-->
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">

   <?php if (session()->get('isLoggedIn')): ?>
        <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Administrador'){
        ?>
      <ul class="navbar-nav mr-auto">
      <div class="header_logo">
       <img width="50" height="50" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>" />
      </div>
      <li style="padding:5px 0px 0px 20px" class="nav-item <?= ($uri->getSegment(1) == 'Dashboard/inicio' ? 'active' : null) ?>">
        <a class="nav-link" style="color:#000000" href="dashboard">Formulario</a>
      </li>
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a  class="nav-link" style="color:#000000" href="registro">Registro</a>
      </li>
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a  class="nav-link" style="color:#000000" href="rgrupos">Registro Grupos</a>
      </li>
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a  class="nav-link" style="color:#000000" href="busqueda">Buscar Grupos</a>
      </li>
     
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a class="nav-link" style="color:#000000" href="./register">Registrar</a>
      </li>

    </ul>
     <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="color:#000000" href="logout">Cerras sesión</a>
          </li>
        </ul>
        <?php
          }
          ?> 

        <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Maestro'){
        ?>
      <ul class="navbar-nav mr-auto">
      <div class="header_logo">
       <img width="50" height="50" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>" />
      </div>
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'Dashboard/inicio' ? 'active' : null) ?>">
        <a class="nav-link" style="color:#000000" href="dashboard">Formulario</a>
      </li>
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a class="nav-link" style="color:#000000" href="registro">Registro</a>
      </li> 
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a  class="nav-link" style="color:#000000" href="busqueda">Buscar Grupos</a>
      </li>

      </ul>
     <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="color:#000000" href="logout">Cerras sesión</a>
          </li>
        </ul>
        <?php
          }
          ?>    
          
          <?php
        $usr=$_SESSION['firstname'];
        if($usr=='Usuario'){
        ?>
      <ul class="navbar-nav mr-auto">
        <div class="header_logo">
        <img width="50" height="50" src="<?php echo base_url('public/imagenes/Logo.jpg') ?>" />
        </div>
      <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'Dashboard/inicio' ? 'active' : null) ?>">
        <a class="nav-link" style="color:#000000"  href="dashboard">Formulario</a>
      </li>   
    <!-- <li style="padding:5px 0px 0px 10px" class="nav-item <?= ($uri->getSegment(1) == 'Dashboard/inicio' ? 'active' : null) ?>">
        <a class="nav-link"  style="color:#000000" href="listaUsuario">Resgistro</a>
      </li>   -->
      </ul>
     <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link"  style="color:#000000" href="logout">Cerras sesión</a>
          </li>
        </ul>
        <?php
          }
          ?>    

      <?php else: ?>
    <ul class="navbar-nav mr-auto">
           <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
        <a class="nav-link" style="color:#1C00ff00" href="./">Inició de sesión</a>
      </li>
      </ul>
     <?php endif; ?>
  </div>
 </div>
</nav>