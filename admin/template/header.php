<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/ECFECOIT"?>
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrateur du site Web<span class="sr-only">(Current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/accueil.php">Accueil</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/formations.php">Formations</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/fermer.php">Fermer Sesion</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Voir site web</a>
        </div>
    </nav>
    <div class="container">
      <br/>
      <div class="row">