<?php
$host="localhost";
$bd="ecfecoit";
$user="root";
$password="";

try {
  $connexion=new PDO("mysql:host=$host;dbname=$bd",$user,$password);
  if($connexion){ echo "connecté au système";}
} catch ( Exception $ex) {
  echo $ex->getMessage();  
}
?>