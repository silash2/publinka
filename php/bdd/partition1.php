<?php
 session_start();
 include "bdd.php";
$notifs = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND typeFile = :typeFile");
$notifs->execute([
    "numero"=>$_SESSION['nom'],
    "typeFile"=> "Logo"
]);
$notifications = $notifs->fetchALL(PDO::FETCH_ASSOC);
$nombreTargets1 = 0;
$get = 0;
$get1 = 0;
$vueLogo = 0;
foreach ($notifications as $key ){
    $vidoe = explode(".",$key['file_save']);
    $videoAfterPoint = strtolower(end($vidoe));
    $ext = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPoint,$ext)) {
        $nombreTargets1 = $nombreTargets1+1;
    }
    if ($key['commentaire'] != "none") {
        $get = $get + 1;
        
    }
    if ($key['vue'] == "none") {
        $vueLogo = $vueLogo +1;
    }
    if ($key['nombreCorrection'] > 0) {
        $get = $get + 1;
    }
}
if ( $nombreTargets1 == 0 ) {

}
else{
    echo "<div style='color:white'>
    <form action='../bdd/recevoirSave.php' method='post'>
    <input type='submit' name='logo' value='Logo' ><sup style='color:white;background-color:red'>".$vueLogo."</sup>";
    echo "<br>Vue et livrer : ".$nombreTargets1 ; 
    echo "<br> vue : ".($nombreTargets1);
    echo "<br> Non vue : ".$vueLogo;
    echo "<br> Correction : ".$key['nombreCorrection']."/".$nombreTargets1."</form></div>";
    
}
?>