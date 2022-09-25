


<?php
include "../../bdd/bdd.php";
$get = $bdd->prepare("UPDATE inscription_members SET verification = :verification WHERE id = :id ");
$get->execute([
 "verification"=>"ok",
 "id"=>$_POST['ids']
]);
header("location:../../accueil/accueil.php");
?>