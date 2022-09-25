<?php 
include "../../bdd/bdd.php";
$verificationMembre = $bdd->prepare("SELECT * FROM inscription_members WHERE verification = :verification");
$verificationMembre->execute([
    "verification"=> "none"
]);
$nombre = 0;
$vRMembre = $verificationMembre->fetchALL(PDO::FETCH_ASSOC);
foreach ($vRMembre as $key ) {
    $nombre = $nombre+1;
}
echo $nombre;
?>