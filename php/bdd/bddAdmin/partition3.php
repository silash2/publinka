<?php
 session_start();
 include "../bdd.php";
$notife = $bdd->prepare("SELECT * FROM savefile WHERE  vue = :vue AND typeFile = :typeFile");
$notife->execute([
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
    echo "
    <form action='../../../bdd/bddAdmin/getInfo.php' method='post'>
        <input type='submit' name='file' id='getspots' value='carte de visite'>
        <label for='getspots'><strong style='color:white'><big>    
    ".$nombreTarget2."</big></strong></lable>
    </form>
    ";
}
?>