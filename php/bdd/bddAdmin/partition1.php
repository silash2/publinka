<?php
 session_start();
 include "../bdd.php";
$notifs = $bdd->prepare("SELECT * FROM savefile WHERE  vue = :vue AND typeFile = :typeFile");
$notifs->execute([
    "vue"=> "none",
    "typeFile"=> "Logo"
]);
$notifications = $notifs->fetchALL(PDO::FETCH_ASSOC);
$nombreTarget0 = 0;
foreach ($notifications as $key ){
    $vidoe = explode(".",$key['file_save']);
    $videoAfterPoint = strtolower(end($vidoe));
    $ext = ['jpg','png','gif','jpeg'];
    if (in_array($videoAfterPoint,$ext)) {
        $nombreTarget0 = $nombreTarget0+1;
    }
}
if ( $nombreTarget0 == 0 ) {

}
else{
    echo "
    <form action='../../../bdd/bddAdmin/getInfo.php' method='post'>
        <input type='submit' name='file' id='getlogo' value='Logo'>
        <label for='getlogo'><strong style='color:white'><big>    
    ".$nombreTarget0."</big></strong></lable>
    </form>
    ";
}
?>