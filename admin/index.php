<?php
if($_POST){
  header("Location:accueil.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
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

              <form method="post">
              <div class = "form-group">
              <label>Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>

              <div class = "form-group">
              <label>Utilisateur</label>
              <input type="text" class="form-control" name="utilisateur" placeholder="Enter Utilisateur">
              </div>
              

              <div class="form-group">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" class="form-control" placeholder="Password">
              </div>

              <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">rappeler mot de passe</label>
              </div>
              <br/>
              <button type="submit" class="btn btn-primary">Entrer dans l’administrateur</button>
              </form>
              
              

            </div>
          </div>
        </div>

      </div>
    </div>
  </body>
</html>