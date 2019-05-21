<!DOCTYPE html>

<html>

<head>

  <title>Consulta</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
  <script type="text/javascript" src="js/funciones.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body class="fondoIndex">


<div class="row">

  <div class="col-lg-2">
  
    <a href="index.php"><img src="../img/logo telecentro.jpg" class="imgLogo"></a>

  </div>

  <div class="col-lg-8 btn-group">
  
    <p class="textTelecentro">Telecentro de Andilla</p>
  
  </div>
    

  <div class="col-lg-2">

    <a href="https://www.facebook.com/BaroniaAndilla/"><img src="../img/facebook.jpg" onmouseover="imgGrande(this)" onmouseout="imgPequenya(this)" class="imgRedes"></a>

    <a href="https://www.instagram.com/baroniandilla/?hl=es"><img src="../img/instagram.png" onmouseover="imgGrande(this)" onmouseout="imgPequenya(this)" class="imgRedes"></a>

    <a href="https://twitter.com/andillaayto"><img src="../img/twitter.jpg" onmouseover="imgGrande(this)" onmouseout="imgPequenya(this)" class="imgRedes"></a>

    <a href="https://www.youtube.com/channel/UCvyZ2-TRbG0tcx4ELqiKi0A?view_as=subscriber"><img src="../img/youtube.png" onmouseover="imgGrande(this)" onmouseout="imgPequenya(this)" class="imgRedes"></a>
  
  </div>

</div>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav centrarNav">

      <li class="nav-item">

        <a class="nav-link" href="index.php">Inicio</a>

      </li>  

      <li class="nav-item">

        <a class="nav-link" href="conoce.php">Conócenos</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="hacemos.php">¿ Qué hacemos ?</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="loca.php">Localización</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="contacta.php">Contacta</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="redes.php">Redes</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="formacion.php">Formación</a>

      </li> 

      <li class="nav-item">

        <a class="nav-link" href="consulta.php">Consulta</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="recursos.php">Recursos</a>

      </li>
      
      <li class="nav-item">

        <a class="nav-link" href="descargas.php">Descargas</a>

      </li> 

    </ul>

  </div>  

</nav>

<div class="row">

  <div class="col-lg-3"></div>

  <div class="col-lg-6">

    <form method="POST">

        <div class="form-group">
    
            <label for="nombre2"><p class="textoBotones">Nombre:</p></label>

            <input type="text" class="form-control" name="nombre2">

        </div>   
  
        <div class="form-group">
    
            <label for="email2"><p class="textoBotones">Dirección de Email:</p></label>
    
            <input type="email" class="form-control" name="email2">
  
        </div>

        <div class="form-group dropdown">

        <label for="listacursos"><p class="textoBotones">Lista de Cursos disponibles</p></label>
            
          <select name="listacursos">

            <option value="Alfabetización Digital">Alfabetización Digital</option> 

            <option value="Internet">Internet</option> 

            <option value="Word">Word</option>

            <option value="Excel">Excel</option>

            <option value="Acces">Acces</option>

            <option value="Iniciación a Windows">Iniciación a Windows</option> 

          </select>

        </div>
      
        <div class="form-group">
        
            <textarea class="form-control" name="texto2" rows="15" cols="50"></textarea>
  
        </div>

      
        <button type="submit" class="btn btn-primary">Enviar</button>
    
    </form>

  </div>

  <div class="col-lg-3"></div>

</div>

<?php

    include 'formcurso.php';

?> 


</body>

<html>