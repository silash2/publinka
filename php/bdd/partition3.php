<?php
 session_start();
 include "bdd.php";
$notife = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND typeFile = :typeFile");
$notife->execute([
    "numero"=>$_SESSION['nom'],
    "typeFile"=> "Carte de visite"
]);
$notificatione = $notife->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget2 = 0;
$grete = 0;
$gretes = 0;
$seen= 0;
foreach ($notificatione as $carte ){
    $vidoes = explode(".",$carte['file_save']);
    $videoAfterPoints = strtolower(end($vidoes));
    $ext3 = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPoints,$ext3)) {
        $nombreTarget2 = $nombreTarget2+1;
    }
    if ($carte['commentaire'] != "none") {
        $grete = $grete +1;
    }
    if ($carte['nombreCorrection'] > 1) {
        $gretes = $gretes +1;
    }
    if ($carte['vue']=="none") {
        $seen = $seen +1;
    }
}
if ( $nombreTarget2 == 0 ) {

}
else{
    echo "<div style='color:skyblue'>
    <form action='../bdd/recevoirSave.php' method='post'>
    <input type='submit' name='carte' value='Carte de visite' ><sup style='color:white;background-color:red'>".$seen."</sup>";
    echo "<br>Vue et livrer : ".$grete ; 
    echo "<br> vue : ".($nombreTarget2 - $grete);
    echo "<br> Non vue : ".$seen;
    echo "<br> Correction : ".$gretes."/".$nombreTarget2 ."
    </form>
    </div><br>";
}
?>