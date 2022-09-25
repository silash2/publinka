<link rel="stylesheet" href="../../../css/bootstrap.css">
<link rel="stylesheet" href="../../../css/styleCorp1.css">

<?php
session_start();
include "../bdd.php";
include "../../../html/adminHtml/inscription/connecter.html";
include "../../chargement/index.php";
$base = $bdd->prepare('UPDATE savefile SET commentaire = :commentaire,vue = :vue WHERE id =:id');
$base->execute([
    "commentaire"=>$_POST['commentaire'],
    "vue"=>"yes",
    "id"=>$_SESSION['id']
]);
$selectUpdate = $bdd->prepare('SELECT * FROM savefile WHERE id = :id');
$selectUpdate->execute([
    "id"=>$_SESSION['id']
]);
$selectSave = $selectUpdate->fetch();
?>
<center>
<h1 style="text-transform:capitalize;font-family: 'Times New Roman', Times, serif,capitalize;
    color: rgb(19, 112, 250);
    font-size: 35px;">
    <?php echo $selectSave['numero'];?>
</h1>
<h2 style="">
<u>Poste:</u>
</h2>
<strong style="font-family: 'Times New Roman', Times, serif;
    color: #7c7c81;
    font-weight: lighter;
    font-size: 3em;">
    <?php echo $selectSave['commente'];?>
</strong>
<?php if($selectSave['file_save'] == "none.jpg" || $selectSave['file_save'] == "none.png"|| $selectSave['file_save'] == "none.gif"|| $selectSave['file_save'] == "none.mp4"|| $selectSave['file_save'] == "none.3gp"|| $selectSave['file_save'] == "none.javi"){
?>
<h1 style="font-family: 'Times New Roman', Times, serif;">
    il n' y a pas d'objet pour son statut
</h1>
<?php
    }else{
    $footeur = explode(".",$selectSave['file_save']);
    $littlefoot = strtolower(end($footeur));
    $array = ["jpg","png","gif"];
    $array1 = ["mp4","3gp","avi"];
    if (in_array($littlefoot,$array)) {
       ?>
       <br>
    <img id="b1" src="../../client/<?php echo $selectSave['file_save'];?>" alt="" width="20%" height="20%">
       <?php
    }
    elseif (in_array($littlefoot,$array1)) {
        ?>
<center>
    <video controls width="20%" height="20%">
            <source src="../../client/<?php echo $selectSave['file_save'];?>" type="video/<?php echo $littlefoot;?>">
    </video>
</center>
        <?php
    }
}
    ?>


<h2>
   <u> Votre reponse:</u>
</h2>
<strong style="font-family: 'Times New Roman', Times, serif;
    color: green;
    font-weight: lighter;
    font-size: 3em;">
<?php echo $selectSave['commentaire'];?>
</strong>
</center>
<script src="../../../js/jquery.min.js"></script>
<script>
    $("#vu").click(
        function (params) {
            $("#validate").load("clientVue.php");
        }
    )
</script>
<script src="../../../js/image.js"></script>