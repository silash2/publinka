<?php session_start();
include "../bdd.php";
$base = $bdd->prepare("SELECT * FROM savefile WHERE typeFile = :typeFile AND vue = :vue AND numero = :numero");
$base->execute([
    "typeFile"=>$_SESSION['file'],
    "vue"=>"yes",
    "numero"=>$_SESSION['nom']
]);
$git = 0;
$based = $base->fetchALL(PDO::FETCH_ASSOC);
foreach ($based as $key) {
    $git = $git +1;
    if ($key['file_save']=="none.mp4"|| $key['file_save']=="none.jpg" || $key['file_save']=="none.gif" || $key['file_save']=="none.avi" || $key['file_save']=="none.3gp") {
        
        echo "
        <hr>
        <center>
        <h2 >
        <h4  style='width:12cm;border-radius:10px; background: linear-gradient(30deg,rgb(19, 112, 250)8%,silver,rgb(19, 112, 250)30%,silver 80%,rgb(19, 112, 250)90%);' class='col'><big style='color:green'>Moi </big><br> ".$key['commente'].
        "</h4>
        </h2>
        <br>
        <h1 class='btn btn-warning navbar col' style='width:10cm;border-radius:10px'> Il n'y a pas de fichier pour cette poste..</h1>
        <br>
        <h2 >
        <h4  style='width:12cm;border-radius:10px; background: linear-gradient(30deg,rgb(19, 112, 250)8%,silver,rgb(19, 112, 250)30%,silver 80%,rgb(19, 112, 250)90%);' class='col'><big style='color:white'> Admin </big> <br>
        ".$key['commentaire'].
        " </h4></h2><br>";
        if ($key['nombreCorrection']>0) {
            echo '
            <form action="recevoirSave.php" method="post">
        <input type="text" name="identique" id="identifiant" value="'.$key["id"].'"><br>
        <input type="submit" name="correcte" value="correction">
        </form>
            </center>';
        }
    }else{
        $coupeVideo = explode(".",$key['file_save']);
        $videoAfterPoint = strtolower(end($coupeVideo));
        $extension = ["mp4","3gp","avi"];
        if(in_array($videoAfterPoint,$extension)){
            ?>
            <hr>
       <h4 style='width:10cm;border-radius:10px; background: linear-gradient(30deg,rgb(19, 112, 250)8%,silver,rgb(19, 112, 250)30%,silver 80%,rgb(19, 112, 250)90%);' class="col"> <big style='color:green'>Moi</big>
        <br>  <?php echo $key['commente'];?>
        </h4>
        <br>
          votre video  <video controls style="width:5cm;height:5cm">
                <source src="../client/<?php echo $key['file_save'];?>" type="video/<?php echo $videoAfterPoint;?>">
            </video>
            <br>
    <h4 class='col' style='width:12cm;border-radius:10px; background: linear-gradient(30deg,rgb(19, 112, 250)8%,silver,rgb(19, 112, 250)30%,silver 80%,rgb(19, 112, 250)90%);'>
               <big style="color:white"> Admin </big>
                <br>
            <?php echo $key['commentaire'];?>
    </h4>
        <br>
        <?php
        if ($key['nombreCorrection'] > 0) {
            echo '
        <form action="recevoirSave.php" method="post">
                <input type="text" name="identique" id="identifiant" value="'.$key["id"].'"><br>
                <input type="submit" name="correcte" value="correction">
        </form>
            ';
        }
        ?>
        </center>
    <br>
    <br>
<?php
        }else{
?>
<hr>
 <h2 style='color:rgb(19, 112, 250);background:silver;border-radius:5px' ><?php echo $key['commente'];?></h2>
 <img src="../client/<?php echo $key['file_save'];?>" id="hey<?php echo $nombre;?>" width="150cm" height="230cm" style="margin-left:15px;border:2px solid silver;border-radius:8px 1px"
 onclick="window.open('../client/<?php echo $key['file_save'];?>','','rezisabled')">  
    <br>
    <?php
        if ($key['nombreCorrection']>0) {
            echo '
        <form action="recevoirSave.php" method="post">
            <input type="text" name="identique" id="identifiant" value="'.$key["id"].'"><br>
            <input type="submit" name="correcte" value="correction">
        </form>
            ';
        }
        ?>
<?php
        }
    }
}if ($git == 0) {
    ?>
<center>
<h1>
Il n'y a pas encore d'objet dans votre boite de memoire...
</h1>
</center>
    <?php
}
?>
<script>
$("input[type='text']").fadeOut();
</script>