<?php session_start();?>
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleCorp1.css">
<link rel="stylesheet" href="../../css/styleCorp.css">
<?php
include "../chargement/index.php";
require "../../html/accueil/connecter.html";
require "../../html/accueil/accueil.html";

?>
<body onscroll="left()" onwaiting="right()">
<br>
<!-- logo -->
<div class="divC">
    <h1 id="text-L">Logo</h1>
    <?php include "pinkSelectImage.php";?>
</div>
<!-- spot -->
<div class="divC1">
    <h1 id="text-S"> spot Pub 2D</h1>
    <?php include "pinkSelectVideo.php";?>
</div>
<div class="divC">
    <h1 id="text-L"> Affiche</h1>
    <?php include "pinkSelectImage1.php";?>
</div>

<div class="divC1">
    <h1 id="text-S"> Carte</h1>
    <?php include "pinkSelectImage2.php";?>
</div>
<?php
if (isset($_POST['validate'])) {
   include "../bdd/bdd.php";
   $valide = $bdd->prepare('INSERT INTO accueil (texte,date)VALUE ( :texte, :date)');
   $valide ->execute([
       "texte"=>$_POST['texte'],
       "date"=>date('l d M Y')
   ]);
echo "<script>confirm('Annonce envoyer');</script>";
}
?>
<script src="../../js/jquery.min.js"></script>

<script src="../../js/accueil/admineur.js"></script>
<script src="../../js/publink.js"></script>
<script src="../../js/accueil/nav1.js"></script>
<script src="../../js/accueil/nav4.js"></script>
<script src="../../js/image.js"></script>