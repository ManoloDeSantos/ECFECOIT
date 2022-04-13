<?php include("../template/header.php");?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNom=(isset($_POST['txtNom']))?$_POST['txtNom']:"";
$txtImage=(isset($_FILES['txtImage']['name']))?$_FILES['txtImage']['name']:"";
$action=(isset($_POST['action']))?$_POST['action']:"";

include("../config/bd.php");

switch($action){

        case "Ajouter":
          
          $sentenceSQL= $connexion->prepare("INSERT INTO formations (nom,image ) VALUES (:nom,:image);");
          $sentenceSQL->bindParam(':nom',$txtNom);
          $sentenceSQL->bindParam(':image',$txtImage);          
          $sentenceSQL->execute();
          echo "Appuyé sur le bouton Ajouter";
          break;
        case "Modifier":
          echo "Appuyé sur le bouton Modifier";  
          break;
        case "Annuler":
          echo "Appuyé sur le bouton Annuler";
          break;          

}

?>
<div class="col-md-5">
  <div class="card">
    <div class="card-header">      
      Données de la formation
    </div>
    <div class="card-body">
      <form method="POST" enctype="multipart/form-data">

        <div class = "form-group">
        <label for="txtID">ID:</label>
        <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
        </div>

        <div class = "form-group">
        <label for="txtNom">Nom:</label>
        <input type="text" class="form-control" name="txtNom" id="txtNom" placeholder="Formation">
        </div>

        <div class = "form-group">
        <label for="txtImage">Image:</label>
        <input type="file" class="form-control" name="txtImage" id="txtImage" placeholder="Formation">
        </div>

        <div class="btn-group" role="group" aria-label="">
          <button type="submit" name="action" value="Ajouter" class="btn btn-success">Ajouter</button>
          <button type="submit" name="action" value="Modifier" class="btn btn-warning">Modifier</button>
          <button type="submit" name="action" value="Annuler" class="btn btn-info">Annuler</button>
        </div>

      </form>
    </div>
  </div>
</div>
<div class="col-md-7">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Image</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>2</td>
        <td>apprendre PHP</td>
        <td>image.jpg</td>
        <td>selectionner | effacer</td>
      </tr>
    </tbody>
  </table>
</div>
<?php include("../template/footer.php");?>  
