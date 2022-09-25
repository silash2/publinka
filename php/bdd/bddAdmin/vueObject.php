<br>
<br>
<?php session_start();
include "../bdd.php";
$base = $bdd->prepare("SELECT * FROM savefile WHERE typeFile = :typeFile AND vue = :vue");
$base->execute([
    "typeFile"=>$_SESSION['file'],
    "vue"=>"yes"
]);
$based = $base->fetchALL(PDO::FETCH_ASSOC);
foreach ($based as $key) {
    if ($key['file_save']=="none.mp4" || $key['file_save']=="none.jpg") {
        echo "<h1 id='h1s'> Il n'y a pas de fichier pour cette poste..</h1>";
        echo "
        <h2 style='color:rgb(19, 112, 250);background:silver;border-radius:5px'>
        ".$key['commente'].
        "</h2>";
        echo '
        <form action="saveFileComment.php" method="post">
        <input type="text" name="identifiant" id="identifiant" value="'.$key["id"].'"><br>
        <input type="submit" value="correction">
        </form>
        <br><br>';
    }else{
        $coupeVideo = explode(".",$key['file_save']);
        $videoAfterPoint = strtolower(end($coupeVideo));
        $extension = ["mp4","3gp","avi"];
        if(in_array($videoAfterPoint,$extension)){
            ?>
    <video controls width="25%" style="height:50%">
        <source src="../../client/<?php echo $key['file_save'];?>" type="video/<?php echo $videoAfterPoint;?>">
    </video>
    <h2 style='color:rgb(19, 112, 250);background:silver;border-radius:5px' >
        <?php echo $key['commente'];?>
    </h2>
        <br>
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
 <br>
<?php
        }
    }
}
?>
<script>
$("input[type='text']").fadeOut();
</script>