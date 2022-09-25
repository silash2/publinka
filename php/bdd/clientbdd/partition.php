<?php
$notifs = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND vue = :vue AND typeFile = :typeFile");
$notifs->execute([
    "numero"=>$_SESSION['nom'],
    "vue"=> "none",
    "typeFile"=> "Spot Pub(2D)"
]);
$notifications = $notifs->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget1 = 0;
foreach ($notifications as $key ){
    $vidoe = explode(".",$key['file_save']);
    $videoAfterPoint = strtolower(end($vidoe));
    $ext = ['3gp','mp4','avi'];
    if (in_array($videoAfterPoint,$ext)) {
        $nombreTarget1 = $nombreTarget1+1;
    }
}
if ( $nombreTarget1 == 0 ) {

}
else{
    if ($nombreTarget1 == 1) {
        echo "<h1><u> Spot Publicitaire 2D </u> : ".$nombreTarget1." resultat</h1>";
    }else{
        echo "<h1><u> Spot Publicitaire 2D </u> : ".$nombreTarget1." resultats</h1>";
    }
    
}
?>