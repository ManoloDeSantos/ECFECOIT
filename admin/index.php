<?php 
session_start();
if($_POST){
    if(($_POST['utilisateur']=="user1")&&($_POST['motDePasse']=="system")){
        
        $_SESSION['utilisateur']="ok";
        $_SESSION['nomUtilisateur']="user1";
        header('Location:accueil.php');
    }else{
        $message="Erreur : L’utilisateur ou le mot de passe sont incorrects";

    }
    
}

?>
<!doctype html>
<html lang="fr">
  <head>
    <title>Administrator</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <div class="row">
        
        <div class="col-md-4"> 

        </div>

        <div class="col-md-4">
          <br/><br/><br/>
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">

              <?php if(isset($message)) {?>
                  <div class="alert alert-danger" role="alert">
                      <?php echo $message; ?>
                  </div>
              <?php } ?>            
                <form method="POST">

              <div class = "form-group">
              <label>Utilisateur</label>
              <input type="text" class="form-control" name="utilisateur" placeholder="Enter Utilisateur">
              </div>
              

              <div class="form-group">
              <label >Mot de passe</label>
              <input type="password" class="form-control" name="motDePasse" placeholder="Écrivez votre Mot De Passe">
              </div>

              <br/>
              <button type="submit" class="btn btn-primary">Entrer dans l’administrateur</button>
              </form>
              
              

            </div>
          </div>
        </div>

<?php include("template/footer.php");?>  