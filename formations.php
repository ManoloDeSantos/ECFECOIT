<?php include ("template/header.php"); ?>

<?php 

include ("admin/config/bd.php");
$sentenceSQL= $connexion->prepare("SELECT * FROM formations");
$sentenceSQL->execute();
$listeFormations=$sentenceSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listeFormations as $formation ) { ?>
  
<div class="col-md-4">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $formation['image']; ?>" alt="">
<div class="card-body">
    <h2 class="card-title"><?php echo $formation['nom']; ?></h2>
    <a name="" id="" class="btn btn-primary" href="ToutFormations.php" role="button"> Toutes les formations </a>
</div>
</div>
</div>

<?php } 

?>

<?php include ("template/footer.php");?>
