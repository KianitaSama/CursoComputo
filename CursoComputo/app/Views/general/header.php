<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Curso de Cómputo</title>
    <link rel="icon" type="image/png" href="public/imagenes/pizza.png" />

</head>
<body>
  <?php
      $uri = service('uri');
     ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="#">Curso de Cómputo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
   <?php if (session()->get('isLoggedIn')): ?>
      <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= ($uri->getSegment(1) == 'Dashboard/inicio' ? 'active' : null) ?>">
        <a class="nav-link" href="dashboard">Formulario</a>
      </li>
      <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a class="nav-link" href="registro">Registro</a>
      </li>
      <li class="nav-item <?= ($uri->getSegment(1) == 'profile' ? 'active' : null) ?>">
        <a class="nav-link" href="profile">Perfil</a>
      </li>
      <li class="nav-item <?= ($uri->getSegment(1) == 'register' ? 'active' : null) ?>">
        <a class="nav-link" href="./register">Registrar</a>
      </li>

    </ul>
     <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="logout">Cerras sesión</a>
          </li>
        </ul>
      <?php else: ?>
    <ul class="navbar-nav mr-auto">
           <li class="nav-item <?= ($uri->getSegment(1) == '' ? 'active' : null) ?>">
        <a class="nav-link" href="./">Inició de sesión</a>
      </li>
      </ul>
     <?php endif; ?>
  </div>
</div>
</nav>