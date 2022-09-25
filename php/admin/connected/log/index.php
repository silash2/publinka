<link rel="stylesheet" href="../../../../css/bootstrap.css">
<link rel="stylesheet" href="../../../../css/styleCorp1.css">
<?php
include "../../../bdd/bdd.php";
include "../../../chargement/index.php";
$select = $bdd->prepare('SELECT * FROM inscription_admin WHERE numero = :numero || email = :email');
$select->execute([
    "numero"=>$_POST['numeroEtemail'],
    "email"=>$_POST['numeroEtemail']
]);
$selection = $select->fetch();
if (password_verify($_POST['motDepasse'],$selection['pswrd'])) {
    $_SESSION['nom']=$selection['nomEtprenom'];
    header("location:../../../accueil/accueil.php");
}
else{
    header("location:../../../../html/adminHtml/index.html");
}
?>
<script src="../../../../js/jquery.min.js"></script>
<script src="../../../../js/admineur.js"></script>
<script>
    $(window).resize(function() {
        $("#reception").css("float","right");
        $("#commande").css("float","right");
        $("#listed").css("margin-left","4cm");
});
</script>
<script src="../../../../js/publink.js"></script>
<script src="../../../../js/nav1.js"></script>
<script src="../../../../js/nav4.js"></script>
<script src="../../../../js/image.js"></script>