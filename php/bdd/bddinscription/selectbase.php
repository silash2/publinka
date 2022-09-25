<?php
$base = $bdd->prepare('SELECT * FROM inscription_members WHERE numero = :numero OR email = :email');
$base->execute([
    "numero"=>$_POST['numeroEtemail'],
    "email"=>$_POST['numeroEtemail']
]);
$numero = $base->fetch();

$noms = explode(" ",$numero['nomEtprenom']);
$value = strtoupper(end($noms));
$tete = str_replace("-",'/',$numero['dateDenaissance']);