<?php
 
$notifcation = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND vue = :vue AND typeFile = :typeFile");
$notifcation->execute([
    "numero"=>$_SESSION['nom'],
    "vue"=> "none",
    "typeFile"=> "Affiche"
]);
$notificationne = $notifcation->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget3 = 0;
foreach ($notificationne as $affiche ){
    $videos = explode(".",$affiche['file_save']);
    $videoAfterPointe = strtolower(end($videos));
    $ext4 = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPointe,$ext4)) {
        $nombreTarget3 = $nombreTarget3+1;
    }
}
if ( $nombreTarget3 == 0 ) {

}
else{
    if ($nombreTarget3 == 1) {
        echo "<h1><u> Affiche(s) </u> : ".$nombreTarget3." resultat</h1>";
    }else{
        echo "<h1><u> Affiche(s) </u> : ".$nombreTarget3." resultats</h1>";
    }
}
?>