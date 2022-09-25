
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleCorp1.css">
<?php
session_start();

include "../../html/connecter.html";
include "../bdd/clientbdd/save/savefile.php";
include "../chargement/index.php";
?>
<center>
    <h1>
        Votre demande sur le projet <br>
        <?php echo $_SESSION['projet'];?> a ete bien envoyer merci...
    </h1>
</center>
        <script src='../../js/jquery.min.js'></script>
        <script src='../../js/jquery-ui.min.js'></script>
        <script src='../../js/publink.js'></script>
        <script src='../../js/image.js'></script>
        <script src='../../js/nav.js'></script>