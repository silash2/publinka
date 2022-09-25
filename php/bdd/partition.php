<?php
 session_start();
 include "bdd.php";
$notifs = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND typeFile = :typeFile");
$notifs->execute([
    "numero"=>$_SESSION['nom'],
    "typeFile"=> "Spot Pub(2D)"
]);
$notifications = $notifs->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget1 = 0;
$gets = 0;
$gets1 = 0;
$vue = 0;
foreach ($notifications as $key ){
    $vidoe = explode(".",$key['file_save']);
    $videoAfterPoint = strtolower(end($vidoe));
    $ext = ['3gp','mp4','avi'];
    if (in_array($videoAfterPoint,$ext)) {
        $nombreTarget1 = $nombreTarget1+1;
    }
    if ($key['commentaire'] != "none") {
        $gets = $gets + 1;
    }
    if ($key['vue'] == "none") {
        $vue = $vue + 1;
    }
    if ($key['nombreCorrection'] > 0) {
        $gets1 = $gets1 + 1;
    }
}
if ( $nombreTarget1 == 0 ) {

}
else{
    
    echo "<div style='color:red'>
    <form action='../bdd/recevoirSave.php' method='post'>
    <input type='submit' name='spot' value='Spot Pub(2D)' >
    <sup style='color:white;background-color:red'>".$vue."</sup>
    
    ";
    echo "<br>Vue et livrer : ".$gets ; 
    echo "<br> vue : ".($nombreTarget1 - $gets);
    echo "<br> non vue : ".$vue;
    echo "<br> Correction : ".$key['nombreCorrection']."/".$nombreTarget1 ."</form></div>";
}
?>