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

          $date= new DateTime();          
          $nomFichier=($txtImage!="")?$date->getTimestamp()."_".$_FILES["txtImage"]["name"]:"image.jpg";

          $tmpImage=$_FILES["txtImage"]["tmp_name"];

          if($tmpImage!=""){
            move_uploaded_file($tmpImage,"../../img/".$nomFichier);
          }
          $sentenceSQL->bindParam(':image',$nomFichier);          
          $sentenceSQL->execute();
          
          header("Location:formations.php");
          break;
        case "Modifier":
          $sentenceSQL= $connexion->prepare("UPDATE formations SET nom=:nom WHERE id=:id");
          $sentenceSQL->bindParam(':nom',$txtNom);          
          $sentenceSQL->bindParam(':id',$txtID);
          $sentenceSQL->execute();

          if ($txtImage!=""){

          $date= new DateTime();
          $nomFichier=($txtImage!="")?$date->getTimestamp()."_".$_FILES["txtImage"]["name"]:"image.jpg";
          $tmpImage=$_FILES["txtImage"]["tmp_name"];

          move_uploaded_file($tmpImage,"../../img/".$nomFichier);

          $sentenceSQL= $connexion->prepare("SELECT image FROM formations WHERE id=:id");
          $sentenceSQL->bindParam(':id',$txtID);
          $sentenceSQL->execute();
          $formation=$sentenceSQL->fetch(PDO::FETCH_LAZY);
          if( isset($formation["image"]) && ($formation["image"]!="image.jpg") ) {
                if(file_exists("../../img/".$formation["image"])){
                    unlink("../../img/".$formation["image"]);
                }            
          }

          $sentenceSQL= $connexion->prepare("UPDATE formations SET image=:image WHERE id=:id");
          $sentenceSQL->bindParam(':image',$nomFichier);          
          $sentenceSQL->bindParam(':id',$txtID);
          $sentenceSQL->execute();
          }
          header("Location:formations.php");
          break;
        case "Annuler":
          header("Location:formations.php");
          break;          
        case "selectionner":
          $sentenceSQL= $connexion->prepare("SELECT * FROM formations WHERE id=:id");
          $sentenceSQL->bindParam(':id',$txtID);
          $sentenceSQL->execute();
          $formation=$sentenceSQL->fetch(PDO::FETCH_LAZY);
          $txtNom=$formation['nom'];
          $txtImage=$formation['image'];
          //echo "Appuyé sur le bouton selectionner";
          break;  
          $txtNom=$formation['nom'];
          $txtImage=$formation['image'];
        case "Effacer":
          $sentenceSQL= $connexion->prepare("SELECT image FROM formations WHERE id=:id");
          $sentenceSQL->bindParam(':id',$txtID);
          $sentenceSQL->execute();
          $formation=$sentenceSQL->fetch(PDO::FETCH_LAZY);
          if( isset($formation["image"]) && ($formation["image"]!="image.jpg") ) {
                if(file_exists("../../img/".$formation["image"])){
                    unlink("../../img/".$formation["image"]);
                }            
          }
          
          $sentenceSQL= $connexion->prepare("DELETE FROM formations WHERE id=:id");
          $sentenceSQL->bindParam(':id',$txtID);
          $sentenceSQL->execute();
          header("Location:formations.php");
          break;  
}
$sentenceSQL= $connexion->prepare("SELECT * FROM formations");
$sentenceSQL->execute();
$listeFormations=$sentenceSQL->fetchAll(PDO::FETCH_ASSOC);
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
        <input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
        </div>
        <div class = "form-group">
        <label for="txtNom">Nom:</label>
        <input type="text" required class="form-control" value="<?php echo $txtNom; ?>" name="txtNom" id="txtNom" placeholder="Nom Formation">
        </div>
        <div class = "form-group">
        <label for="txtImage">Image:</label>
        <br/>
        <?php if($txtImage!=""){ ?>
          <img class="img-thumbnail rounded" src="../../img/<?PHP echo $txtImage;?>" width="50" alt="" srcset="">
        <?php } ?>
        <input type="file"  class="form-control" name="txtImage" id="txtImage" placeholder="Nom Image">
        </div>
        <div class="btn-group" role="group" aria-label="">
          <button type="submit" name="action" <?php echo ($action=="selectionner")?"disabled":""; ?> value="Ajouter" class="btn btn-success">Ajouter</button>
          <button type="submit" name="action" <?php echo ($action!="selectionner")?"disabled":""; ?> value="Modifier" class="btn btn-warning">Modifier</button>
          <button type="submit" name="action" <?php echo ($action!="selectionner")?"disabled":""; ?> value="Annuler" class="btn btn-info">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="col-md-7">
  <table class="table table-bordered" id="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Image</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($listeFormations as $formation) { ?>    
      <tr>
        <td><?php echo $formation['id']; ?></td>
        <td><?php echo $formation['nom']; ?></td>
        <td>
          <img class="img-thumbnail rounded" src="../../img/<?php echo $formation['image']; ?>" width="50" alt="" srcset="">
        </td>
        <td>
        <form method="post">
          <input type="hidden" name="txtID" id="txtID" value="<?php echo $formation['id']; ?>"/>
          <input type="submit" name="action" value="selectionner" class="btn btn-primary"/>
          <input type="submit" name="action" value="Effacer" class="btn btn-danger"/>
        </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<script>
    var table = document.querySelector("#table");

    var dataTable = new DataTable(table, {
      perPage: 3,
      perPageSelect: [5, 10, 15, 20],
    });
</script>


<?php include("../template/footer.php");?>  
