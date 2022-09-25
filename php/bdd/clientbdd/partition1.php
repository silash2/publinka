<?php
$notifs = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND vue = :vue AND typeFile = :typeFile");
$notifs->execute([
    "numero"=>$_SESSION['nom'],
    "vue"=> "none",
    "typeFile"=> "Logo"
]);
$notifications = $notifs->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget1 = 0;
foreach ($notifications as $key ){
    $vidoe = explode(".",$key['file_save']);
    $videoAfterPoint = strtolower(end($vidoe));
    $ext = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPoint,$ext)) {
        $nombreTarget1 = $nombreTarget1+1;
    }
}
if ( $nombreTarget1 == 0 ) {

}
else{
    if ($nombreTarget1 == 1) {
        echo "<h1><u> Logo(s) </u> : ".$nombreTarget1." resultat</h1>";
    }else{
        echo "<h1><u> Logo(s) </u> : ".$nombreTarget1." resultats</h1>";
    }
}
?>