<?php include "bdd.php";
$base = $bdd->prepare('INSERT INTO pink (image,typeFile) VALUES( :image, :typeFile)');
$base->execute([
    "image"=>$nom,
    "typeFile"=>$_POST['typeDefichier']
]);
?>