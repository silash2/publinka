<?php
if ($_SESSION['nom']) {
    $change = $bdd->prepare('UPDATE inscription_members SET numero = :numero,dateDenaissance =:dateDenaissance,adressse = :adressse,email= :email WHERE nomEtprenom = :nomEtprenom');
    $change->execute([
        "numero"=>$_POST['numero'],
        "dateDenaissance"=>$_POST['dateDenaissance'],
        "adressse"=>$_POST['adressse'],
        "email"=>$_POST['email'],
        "nomEtprenom"=>$_SESSION['nom'],
    ]);
}
?>
<big>
    <center>
        <strong>
            Modification de votre profil fait...
        </strong>
    </center>
</big>
<?php
include "clientProfil.php";