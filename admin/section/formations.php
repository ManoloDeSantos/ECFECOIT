<?php include("../template/header.php");?>
<?php
print_r($_POST);
print_r($_FILES);
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
