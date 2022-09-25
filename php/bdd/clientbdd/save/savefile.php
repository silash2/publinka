



<?php
include "../bdd/bdd.php";
$tmpName = $_FILES['fichier']['tmp_name'];
$name = $_FILES['fichier']['name'];
$fry = explode('.',$name);
$eft = strtolower(end($fry));
$ext = ['3gp','mp4','avi','jpg','gif','png','jpeg'];
if (!empty($tmpName)) {
    if (in_array($eft,$ext)) {
    $neim = uniqid('',true);
    $nom = $neim. '.' .$eft;
    move_uploaded_file($tmpName,$nom);
    $save = $bdd->prepare('INSERT INTO savefile (numero,file_save,commente,vue,commentaire,typeFile,correction,nombreCorrection,couleur)VALUES( :numero, :file_save, :commente, :vue, :commentaire, :typeFile, :correction, :nombreCorrection, :couleur)');
$save->execute([
    "numero"=>$_SESSION['nom'],
    "file_save"=>$nom,
    "commente"=>nl2br($_POST['texte']),
    "vue"=>"none",
    "commentaire"=>"none",
    "typeFile"=>$_SESSION['projet'],
    "correction"=>"none",
    "nombreCorrection"=>"2",
    "couleur"=>$_POST['couleur']
]);
}else{
    header("location:../../php/client/client.php");
}  
    }else{
         if ($_SESSION['projet']== "Logo" || $_SESSION['projet']== "Affiche" || $_SESSION['projet']== "Carte de visite") {
             $nom = "none.jpg";
         }
         else{
             $nom = "none.mp4";
         }
$save = $bdd->prepare('INSERT INTO savefile (numero,file_save,commente,vue,commentaire,typeFile,correction,nombreCorrection,couleur)VALUES( :numero, :file_save, :commente, :vue, :commentaire, :typeFile, :correction, :nombreCorrection, :couleur)');
$save->execute([
    "numero"=>$_SESSION['nom'],
    "file_save"=>$nom,
    "commente"=>nl2br($_POST['texte']),
    "vue"=>"none",
    "commentaire"=>"none",
    "typeFile"=>$_SESSION['projet'],
    "correction"=>"none",
    "nombreCorrection"=>"2",
    "couleur"=>$_POST['couleur']
]);
}
