


<?php
    $base = $bdd->prepare('INSERT INTO inscription_members(nomEtprenom,numero,dateDenaissance,adressse,email,pswrd,confpswrd,likeCondition,verification)VALUES( :nomEtprenom, :numero, :dateDenaissance, :adressse, :email, :pswrd, :confpswrd, :likeCondition, :verification)');
    $base->execute([
        "nomEtprenom"=>$_POST['nomEtprenom'],
        "numero"=>$_POST['numero'],
        "dateDenaissance"=>$_POST['jours']." / ".$_POST['mois']." / ".$_POST['annee'],
        "adressse"=>$_POST['adresse'],
        "email"=>$_POST['email'],
        "pswrd"=>password_hash($_POST['motDepasse'],1),
        "confpswrd"=>password_hash($_POST['confmotDepasse'],1),
        "likeCondition"=>$_POST['accepter'],
        "verification"=>"none"
    ]);
?>