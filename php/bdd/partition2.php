<?php
 session_start();
 include "bdd.php";
$notifcation = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND typeFile = :typeFile");
$notifcation->execute([
    "numero"=>$_SESSION['nom'],
    "typeFile"=> "affiche"
]);
$notificationne = $notifcation->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget3 = 0;
$gret = 0;
$grets = 0;
$vueAffiche = 0;
foreach ($notificationne as $affiche ){
    $videos = explode(".",$affiche['file_save']);
    $videoAfterPointe = strtolower(end($videos));
    $ext4 = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPointe,$ext4)) {
        $nombreTarget3 = $nombreTarget3+1;
    }
    if ($affiche['commentaire'] != "none") {
        $gret = $gret + 1;
    }
    if ($affiche['nombreCorrection'] > 0) {
        $grets = $grets + 1;
    }
    if ($affiche['vue'] == "none") {
        $vueAffiche = $vueAffiche+1;
    }
}
if ( $nombreTarget3 == 0 ) {

}
else{
    echo "<div style='color:gray'>
    <form action='../bdd/recevoirSave.php' method='post'>
    <input type='submit' name='affiche' value='Affiche' ><sup style='color:white;background-color:red'>".$vueAffiche."</sup>";
    echo "<br>Vue et livrer : ".$gret ; 
    echo "<br> vue : ".($nombreTarget3 - $gret);
    echo "<br> Non vue : ".$vueAffiche;
    echo "<br> Correction : ".$grets."/".($nombreTarget3 * 2)."
    </form>
    </div>";
}
?>