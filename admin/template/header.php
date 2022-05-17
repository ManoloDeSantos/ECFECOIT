<?php 
session_start();
  if(!isset($_SESSION['utilisateur'])){
    header("Location:../index.php");
  }else{

      if($_SESSION['utilisateur']=="ok"){
        $nomUtilisateur=$_SESSION["nomUtilisateur"];

      }

  }

?>
<!doctype html>
<html lang="fr">
  <head>
    <title>ECOIT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&family=Quicksand&family=Trirong:ital@1&display=swap"
      rel="stylesheet"
    />
  </head>
<body>
  <?php $url="http://".$_SERVER['HTTP_HOST']."/ECOIT"?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrateur <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/accueil.php">Accueil</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/formations.php">Formations</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/admin/section/fermer.php">Fermer</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">Afficher le site web</a>
        </div>
    </nav>
    <div class="container">
      <br/>
        <div class="row">


