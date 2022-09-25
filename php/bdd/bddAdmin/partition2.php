<?php
 session_start();
 include "../bdd.php";
$notifcation = $bdd->prepare("SELECT * FROM savefile WHERE  vue = :vue AND typeFile = :typeFile");
$notifcation->execute([
    "vue"=> "none",
    "typeFile"=> "affiche"
]);
$notificationne = $notifcation->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget3 = 0;
foreach ($notificationne as $affiche ){
    $videos = explode(".",$affiche['file_save']);
    $videoAfterPointe = strtolower(end($videos));
    $ext4 = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPointe,$ext4)) {
        $nombreTarget3 = $nombreTarget3+1;
    }
}
if ( $nombreTarget3 == 0 ) {

}
else{
    echo "
    <form action='../../../bdd/bddAdmin/getInfo.php' method='post'>
        <input type='submit' name='file' id='affiche' value='affiche'>
        <label for='affiche'><strong style='color:white'><big>    
    ".$nombreTarget3."</big></strong></lable>
    </form>
    ";
}
?>