<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleCorp.css">

<?php session_start();
include "../chargement/index.php";
if (isset($_POST['spot'])) {
    include "../../html/connecter.html";
    echo "<center><h1 id='cmd1'> Commander un ".$_POST['spot']."</h1></center>";
    include "../../html/client/postSpot.html";
}
if (isset($_POST['logo'])) {
    include "../../html/connecter.html";
    echo "<center><h1 id='cmd1'> Commander un ".$_POST['logo']."</h1></center>";
    include "../../html/client/postLogo.html";
}
if (isset($_POST['affiche'])) {
    include "../../html/connecter.html";
    echo "<center><h1 id='cmd1'> Commander une ".$_POST['affiche']."</h1></center>";
    include "../../html/client/postAffiche.html";
}
if (isset($_POST['carte'])) {
    include "../../html/connecter.html";
    echo "<center><h1 id='cmd1'> Commander une ".$_POST['carte']."</h1></center>";
    include "../../html/client/posteCarte.html";
}
?>
       <script src='../../js/jquery.min.js'></script>
       <script src='../../js/jquery-ui.min.js'></script>
       <script src='../../js/publink.js'></script>
       <script src='../../js/nav.js'></script>
       <script src='../../js/image.js'></script>
      