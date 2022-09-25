<?php
 
$notife = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero AND vue = :vue AND typeFile = :typeFile");
$notife->execute([
    "numero"=>$_SESSION['nom'],
    "vue"=> "none",
    "typeFile"=> "Carte de visite"
]);
$notificatione = $notife->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget2 = 0;
foreach ($notificatione as $carte ){
    $vidoes = explode(".",$carte['file_save']);
    $videoAfterPoints = strtolower(end($vidoes));
    $ext3 = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPoints,$ext3)) {
        $nombreTarget2 = $nombreTarget2+1;
    }
}
if ( $nombreTarget2 == 0 ) {

}
else{
    if ($nombreTarget2 == 1) {
        echo "<h1><u> carte de visite </u> : ".$nombreTarget2." resultat</h1>";
       
    }else{
        echo "<h1><u> carte de visite </u> : ".$nombreTarget2." resultats</h1>";   }
    
}
?>