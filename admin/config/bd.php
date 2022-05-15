<?php
$host="localhost";
$bd="ecoit";
$user="root";
$password="";

try {
  $connexion=new PDO("mysql:host=$host;dbname=$bd",$user,$password);

} catch ( Exception $ex) {
  echo $ex->getMessage();  
}
?>