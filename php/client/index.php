<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleCorp1.css">
<?php session_start();

include "../chargement/index.php";
if (isset($_POST['profile'])) {
    include "../bdd/bdd.php";
    include "../../html/connecter.html";
    include "../bdd/clientbdd/clientProfil.php";
    echo "
    <style>
    #notif{
        background-color:white;
    }
    .ple{
        margin-left:-2cm;
    }
    
</style>
    ";
}
if (isset($_POST['commande'])) {
    include "../bdd/bdd.php";
    include "../../html/connecter.html";
    include "../bdd/clientbdd/partition.php";
    include "../bdd/clientbdd/partition1.php";
    include "../bdd/clientbdd/partition2.php";
    include "../bdd/clientbdd/partition3.php";
}
if (isset($_POST['change'])) {
    include "../bdd/bdd.php";
    include "../../html/connecter.html";
    include "../bdd/clientbdd/changeProfil.php";
}
if (isset($_POST['changed'])) {
    include "../bdd/bdd.php";
    include "../../html/connecter.html";
    include "../bdd/clientbdd/changeSaveProfil.php";
}
?>
    <script src='../../js/jquery.min.js'></script>
    <script src='../../js/jquery-ui.min.js'></script>
    <script>
    $(window).resize(function() {
        $("#reception").css("float","right");
        $("#commande").css("float","right");
        $("#listed").css("margin-left","4cm");
});
</script>

    <script src='../../js/publink.js'></script>
    <script src='../../js/nav.js'></script>
    <script src='../../js/image.js'></script>