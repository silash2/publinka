<?php 
session_start();
include "../bdd/bdd.php";
$base = $bdd->prepare("SELECT * FROM inscription_members WHERE numero = :numero OR email = :email");
$base->execute([
    "numero"=>$_POST['numero'],
    "email"=>$_POST['numero']
]);
$_SESSION['numero']=$_POST['numero'];
$based = $base->fetch();
?>

