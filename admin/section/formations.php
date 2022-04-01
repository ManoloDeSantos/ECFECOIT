<?php include("../template/header.php")?>

<div class="col-md-5">
  <div class="card">
    <div class="card-header">      
      Différentes formations
    </div>
    <div class="card-body">
      <form method="post" enctype="multipart/form-data">

      <div class = "form-group">
      <label for="txtID">ID:</label>
      <input type="text" class="form-control" name="txtID" id="txtid" placeholder="ID">
      </div>
      <div class = "form-group">
      <label for="txtNombre">Formation:</label>
      <input type="text" class="form-control" name="txtNom" id="txNom" placeholder="Formation">
      </div>
      <div class = "form-group">
      <label for="txtNombre">Image:</label>
      <input type="file" class="form-control" name="txtNom" id="txNom" placeholder="Formation">
      </div>

    <div class="btn-group" role="group" aria-label="">
      <button type="button" class="btn btn-success">Ajouter</button>
      <button type="button" class="btn btn-warning">Modifier</button>
      <button type="button" class="btn btn-info">Annuler</button>
    </div>
  
  </form>

    </div>

  </div>


  
  
</div>
  tabla mostrar libros
<?php include("../template/footer.php")?>  
