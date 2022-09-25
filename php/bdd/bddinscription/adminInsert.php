


<?php
    $base = $bdd->prepare('INSERT INTO inscription_admin(nomEtprenom,numero,dateDenaissance,adressse,email,pswrd,confpswrd,likeCondition)VALUES( :nomEtprenom, :numero, :dateDenaissance, :adressse, :email, :pswrd, :confpswrd, :likeCondition)');
    $base->execute([
        "nomEtprenom"=>$_POST['nomEtprenom'],
        "numero"=>$_POST['numero'],
        "dateDenaissance"=>$_POST['dateDenaissance'],
        "adressse"=>$_POST['adresse'],
        "email"=>$_POST['email'],
        "pswrd"=>password_hash($_POST['motDepasse'],1),
        "confpswrd"=>password_hash($_POST['confmotDepasse'],1),
        "likeCondition"=>$_POST['accepter']
    ]);
?>