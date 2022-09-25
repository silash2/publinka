<?php 
session_start();
 include "bdd.php";
$notif = $bdd->prepare("SELECT * FROM savefile WHERE numero = :numero ");
$notif->execute([
    "numero"=>$_SESSION['nom'],
]);
$notification = $notif->fetchALL(PDO::FETCH_ASSOC);
$nombre = 0;
$nombre1 = 0;
$nombreTarget = 0;
$nomkbreTargetVideo = 0;
foreach ($notification as $key ) {
    $image = explode(".",$key['file_save']);
    $imageAfterPoint = strtolower(end($image));
    $ext = ['jpg','png','gif','jpeg','3gp','mp4','avi'];
    if (in_array($imageAfterPoint,$ext)) {
        $nombreTarget = $nombreTarget+1;
        
    }else{
        $nomkbreTargetVideo = $nomkbreTargetVideo+1;
    }
    if ($key['vue'] == "none") {
        $nombre = $nombre+1;
    }
    else{
        $nombre1 = $nombre1+1;
    }
}

echo "<b style='color:red;background-color:white;border-radius:10px;margin-top:0.05cm;float:right;'> ".$nombre."<b><br>";
echo "<b style='color:red;float:right;background-color:white;border-radius:10px;margin-top:0.5cm;'>".$nombre1."</b>";
?>
<style>
    b{
        zoom:1px;
    }
</style>