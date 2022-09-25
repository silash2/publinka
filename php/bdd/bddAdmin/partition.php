<?php
include "../bdd.php";
 session_start();
$notifs = $bdd->prepare("SELECT * FROM savefile WHERE vue = :vue AND typeFile = :typeFile");
$notifs->execute([
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
    echo "
    <form action='../../../bdd/bddAdmin/getInfo.php' method='post'>
        <input type='submit' name='file' id='getspot' value='Spot Pub(2D)'>
        <label for='getspot'><strong style='color:red'><big>    
    ".$nombreTarget1."</big></strong></lable>
    </form>
    ";
}
?>