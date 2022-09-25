<?php 
include "../../bdd.php";
session_start();
$notif = $bdd->prepare("SELECT * FROM savefile WHERE vue = :vue");
$notif->execute([
    "vue"=> "none",
]);
$notification = $notif->fetchALL(PDO::FETCH_ASSOC);
$nombre = 0;
$nombreTarget = 0;
$nomkbreTargetVideo = 0;
foreach ($notification as $key ) {
    $nombre = $nombre +1;
    $image = explode(".",$key['file_save']);
    $imageAfterPoint = strtolower(end($image));
    $ext = ['jpg','png','gif','jpeg','3gp','mp4','avi'];
    if (in_array($imageAfterPoint,$ext)) {
        $nombreTarget = $nombreTarget+1;
        
    }else{
        $nomkbreTargetVideo = $nomkbreTargetVideo+1;
    }
}
if ($nombre == 0) {

}
else{
    echo $nombre;
    
}
?>