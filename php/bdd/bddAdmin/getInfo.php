<link rel="stylesheet" href="../../../css/bootstrap.css">
<link rel="stylesheet" href="../../../css/styleCorp.css">
<?php 
session_start();
include "../bdd.php";
include "../../chargement/index.php";
include "../../../html/adminHtml/inscription/connecter.html";

?>
<center>
<?php
if (isset($_POST['file'])) {
$_SESSION['file']=$_POST['file'];

$base = $bdd->prepare("SELECT * FROM savefile WHERE typeFile = :typeFile AND vue = :vue");
$base->execute([
    "typeFile"=>$_POST['file'],
    "vue"=>"none"
]);
$based = $base->fetchALL(PDO::FETCH_ASSOC);
foreach ($based as $key) {
    echo "<h4> Couleur preferer </h4><h5>".$key['couleur']."</h5>";
    echo "<br><h4> Poste de </h4><u style='text-transform:capitalize' id='ps'><strong>".$key['numero']."</stong></u>";
    if ($key['file_save']=="none.mp4" || $key['file_save']=="none.jpg") {
        echo "<h1 id='h1s'> Il n'y a pas de fichier pour cette poste..</h1>";
        echo "
        <h2 style='color:rgb(19, 112, 250);background:silver;border-radius:5px'>
        ".$key['commente'].
        "</h2>";
        echo '
        <form action="saveFileComment.php" method="post">
        <input type="text" name="identifiant" id="identifiant" value="'.$key["id"].'"><br>
        <input type="submit" class="inpts" name="va" value="valider le travail">
        </form>
        <br><br>';
    }else{
        $coupeVideo = explode(".",$key['file_save']);
        $videoAfterPoint = strtolower(end($coupeVideo));
        $extension = ["mp4","3gp","avi"];
        if(in_array($videoAfterPoint,$extension)){
            ?>
            <br>
    <video controls width="20%" height="20%">
        <source src="../../client/<?php echo $key['file_save'];?>" type="video/<?php echo $videoAfterPoint;?>">
    </video>
    <br>
    <h2 style='color:rgb(19, 112, 250);background:silver;border-radius:5px' >
        <?php echo $key['commente'];?>
    </h2>
        <br>
    <form action="saveFileComment.php" method="post">
        <input type="text" name="identifiant" id="identifiant" value="<?php echo$key["id"];?>"><br>
        <input type="submit" class="btn btn-outline-primary" name="va" value="valider le travail">
    
    <a href="../../client/<?php echo $key['file_save'];?>" class="btn btn-outline-secondary" download="../../client/<?php echo $key['file_save'];?>">
        Telecharger le fichier
    </a></form>
    <br>
    <br>
<?php
        }else{
?>
<img src="../../client/<?php echo $key['file_save'];?>" id="hey<?php echo $nombre;?>" width="150cm" height="230cm" style="margin-left:15px;border:2px solid silver;border-radius:8px 1px"
 onclick="window.open('../../client/<?php echo $key['file_save'];?>','','rezisabled')">
 <br>
 <h2 style='color:rgb(19, 112, 250);background:silver;border-radius:5px' ><?php echo $key['commente'];?></h2>
 <br>
 <form action="saveFileComment.php"  method="post">
        <input type="text" name="identifiant" id="identifiant" value="<?php echo$key["id"];?>"><br>
        <input type="submit" style="margin-left:2cm" class="btn btn-outline-primary" name="va" value="valider le travail">

 <a href="../../client/<?php echo $key['file_save'];?>" class="btn btn-outline-secondary" download="../../client/<?php echo $key['file_save'];?>">
 Telecharger
</a>
</form><br>
<?php
        }
    }
}
}?>

<div id="mens">
<a href="#">.</a>
<div>

</div>
    <a href="#" style="float:right;text-align:center;width:1.3cm" class="btn btn-danger"><big>
<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#AAA" d="M21.1 18.3c.8.8.8 2 0 2.8-.4.4-.9.6-1.4.6s-1-.2-1.4-.6L12 14.8l-6.3 6.3c-.4.4-.9.6-1.4.6s-1-.2-1.4-.6a2 2 0 0 1 0-2.8L9.2 12 2.9 5.7a2 2 0 0 1 0-2.8 2 2 0 0 1 2.8 0L12 9.2l6.3-6.3a2 2 0 0 1 2.8 0c.8.8.8 2 0 2.8L14.8 12l6.3 6.3z"/></svg>

    </big></a>
    <div style="float:right;position:fixed"></div>
    <a href="#" class="btn btn-primary" style="float:left;">

    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="#AAA" d="M2.6 17.5h18.8c.9 0 1.6.7 1.6 1.6v1.5c0 1-.7 1.6-1.6 1.6H2.6c-.9 0-1.6-.7-1.6-1.6v-1.5c0-.9.7-1.6 1.6-1.6zM1 11.2v1.6c0 .9.7 1.6 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6v-1.6c0-.8-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 11.2zm0-7.8v1.5a1.6 1.6 0 0 0 1.6 1.6h18.8c.9 0 1.6-.7 1.6-1.6V3.4c0-1-.7-1.6-1.6-1.6H2.6A1.6 1.6 0 0 0 1 3.4z"/></svg>

</a>
    <div id="vues" style="margin-top:2cm"></div>
    
</div>
</center>
<style>
    video:hover{
        box-shadow: 2px 3px 4px blue;
        cursor:pointer;
        margin-left:3cm;
    }
    video{
        border:2px solid rgb(19, 112, 250);
        border-radius:8px 1px;
        box-shadow: 2px 3px 4px;
    }
    img{
        box-shadow: 2px 3px 4px;
    }
    img:hover{
        cursor:pointer;
        box-shadow: 2px 3px 4px;
        transition:2s;
    }
    #notif{
        zoom:1.6;
        background-color:white;
        border-radius:10px;
    }
</style>
<script src="../../../js/jquery.min.js"></script>
<script src="../../../js/jquery-ui.min.js"></script>
<script src="../../../js/image.js"></script>
<script>
function lod(params) {
    $("#vues").load("vueObject.php");
}
setInterval(lod(),1000);
    
    $("#mens").accordion();
    var nombres = 0;
    var array = ['black','blue','red'];
    function gitch(){
        if (nombres < 3) {
            nombres++;
            if (nombres == 1) {
                var color = "blue";
            }else if(nombres == 2){
                var color = "red";
            }
            else if(nombres = 3){
                var color = "green";
            }
            
    
}if (nombres == 3) {
    nombres = 0;
}
    $("u[id='ps']").fadeOut("slow");
    $("u[id='ps']").fadeIn("slow").css("color",color);
    }
    setInterval("gitch()",5000);
</script>
<script>
$("input[type='text']").fadeOut();
</script>