<?php
session_start();
include "php/bdd/bdd.php";
$deconnexion = $bdd->prepare('UPDATE inscription_members SET likeCondition = :likeCondition WHERE nomEtprenom = :nomEtprenom');
$deconnexion->execute([
    "likeCondition"=>"no",
    'nomEtprenom'=>$_SESSION['nom']
]);
$_SESSION = array();
session_destroy();
header('location:php/log/index.php');
exit;
?>