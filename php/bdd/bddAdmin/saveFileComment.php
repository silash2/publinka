<link rel="stylesheet" href="../../../css/bootstrap.css">
<link rel="stylesheet" href="../../../css/styleCorp1.css">

<?php
session_start();
include "../../chargement/index.php";
include "../bdd.php";
$_SESSION['id'] = $_POST['identifiant'];
include "../../../html/adminHtml/inscription/connecter.html";

$base = $bdd->prepare("SELECT * FROM savefile WHERE id= :id");
$base->execute([
    'id'=>$_POST['identifiant']
]);
$file = $base->fetch();
echo "<center><h4 style='text-transform:capitalize'>".$file['numero']."</h4></center><br>";
if($file['file_save'] == "none.jpg" || $file['file_save'] == "none.png"|| $file['file_save'] == "none.gif"|| $file['file_save'] == "none.mp4"|| $file['file_save'] == "none.3gp"|| $file['file_save'] == "none.javi"){
    ?>
    <center>
    <h1 id="h1s" class="btn btn-dark">
        il n' y a pas d'objet pour son statut
    </h1>
    </center>
    <?php
        }else{
        $footeur = explode(".",$file['file_save']);
        $littlefoot = strtolower(end($footeur));
        $array = ["jpg","png","gif"];
        $array1 = ["mp4","3gp","avi"];
        if (in_array($littlefoot,$array)) {
           ?>
        <img src="../../client/<?php echo $file['file_save'];?>" alt="" width="20%" height="20%">
           <?php
        }
        elseif (in_array($littlefoot,$array1)) {
            ?>
   <center>
        <video controls width="20%" height="20%">
                <source src="../../client/<?php echo $file['file_save'];?>" type="video/<?php echo $littlefoot;?>">
        </video>
   </center>
            <?php
        }
    }
echo "<h1 style='text-align:center'>".$file['commente']."</h1>";
?>
<br>
<center>
<form action="recovery.php" method="post">
    <textarea required name="commentaire" id="txts"rows="2"placeholder="Votre Commentaire..."></textarea><br>
    <input type="submit" id="inpts1" value="confirmer">
     <a href="#">
        <button id="btns">
        <svg xmlns='http://www.w3.org/2000/svg'  width='30' height='30' viewBox='0 0 12 12'><path fill='white' id="chec" d='M12 3.1c0 .4-.1.8-.4 1.1L5.9 9.8c-.3.3-.6.4-1 .4s-.7-.1-1-.4L.4 6.3C.1 6 0 5.6 0 5.2c0-.4.2-.7.4-.9.2-.3.6-.4.9-.4.4 0 .8.1 1.1.4l2.5 2.5 4.7-4.7c.3-.3.7-.4 1-.4.4 0 .7.2.9.4.3.3.5.6.5 1z'/></svg>
        </button> 
        </a>
</form>
<style>
    #chec:hover{
        fill:black;
    }
</style>
<i id="validate">

</i>
</center>
<?php
?>
</center>
<script src="../../../js/jquery.min.js"></script>
<script>
    $("#btns").click(
        function (params) {
            $("#validate").load("clientVue.php");
        }
    )
    $(window).resize(
        $("#listed").css("margin-left","-1cm");
    )
</script>
<script src="../../../js/image.js"></script>