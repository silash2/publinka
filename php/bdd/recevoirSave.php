<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleCorp1.css">
<?php 
session_start();
include "bdd.php";
include "../../html/connecter.html";
include "../chargement/index.php";
$base = $bdd->prepare('SELECT * FROM savefile WHERE numero = :numero AND vue = :vue');
$base->execute([
    "numero"=>$_SESSION['nom'],
    "vue"=>"none"
]);
$persons = $base->fetchALL(PDO::FETCH_ASSOC);
$getteur = 0;
foreach ($persons as $key) {
$getteur = $getteur+1;
// valide d'un logo
if (isset($_POST['logo'])) {
    if ($key['typeFile'] == "Logo") {
        
        # code... votre ancien poste
    
        if ($key['commentaire'] != "none") {
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            
if($key['file_save'] == "none.jpg" || $key['file_save'] == "none.png"|| $key['file_save'] == "none.gif"|| $key['file_save'] == "none.mp4"|| $key['file_save'] == "none.3gp"|| $key['file_save'] == "none.avi"){
    ?>
    <h1 id="h1s" class="btn btn-warning">
        il n' y a pas d'objet pour votre statut
    </h1>
    <?php
        }else{
        $footeur = explode(".",$key['file_save']);
        $littlefoot = strtolower(end($footeur));
        $array = ["jpg","png","gif"];
        $array1 = ["mp4","3gp","avi"];
        if (in_array($littlefoot,$array)) {
           ?>
        <img src="../client/<?php echo $key['file_save'];?>" alt="" width="20%" height="20%">
           <?php
        }
        elseif (in_array($littlefoot,$array1)) {
            ?>
   
        <video controls width="20%" height="20%">
                <source src="../client/<?php echo $file['file_save'];?>" type="video/<?php echo $littlefoot;?>">
        </video>
   
            <?php
        }
    }
            echo "<h2> <u> commentaire de l'admin </u><br>".$key['commentaire']."</h2>";
            if ($key['nombreCorrection'] > 0) {
                echo '
                    <form action="" method="post">
                    <input type="text" name="identique" value="'.$key['id'].'">
                        <input type="submit" name="correcte" value="correction">
                    </form>
                    ';
                }else{
                    echo "Nombre de correction atteinte";
                }
        }
        else{
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            if ($key['file_save'] == "none.jpg" || $key['file_save'] == "none.png"|| $key['file_save'] == "none.gif"|| $key['file_save'] == "none.mp4"|| $key['file_save'] == "none.3gp"|| $key['file_save'] == "none.avi") {
                # code...
           
            echo '<h1 id="h1s" class="btn btn-warning">
            il n\' y a pas d\'objet pour votre statut
        </h1>';
    }else{
        ?>
<img src="../client/<?php echo $key['file_save'];?>" alt="" width="20%" height="20%">
        <?php
    }
            echo "il n'a pas encore fait un remarque , ";
        }
        if ($key['vue']=="yes") {
            echo "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' viewBox='0 0 12 12'><path fill='#5E976E' d='M12 3.1c0 .4-.1.8-.4 1.1L5.9 9.8c-.3.3-.6.4-1 .4s-.7-.1-1-.4L.4 6.3C.1 6 0 5.6 0 5.2c0-.4.2-.7.4-.9.2-.3.6-.4.9-.4.4 0 .8.1 1.1.4l2.5 2.5 4.7-4.7c.3-.3.7-.4 1-.4.4 0 .7.2.9.4.3.3.5.6.5 1z'/></svg>";
        }
        else{
            echo " et pas encore vue aussi <br> ";
        }
        ?>
        <?php
    }
}
// valide d'un carte 
if (isset($_POST['carte'])) {
    
    if ($key['typeFile'] == "Carte de visite") {
        # code...
    
        if ($key['commentaire'] != "none") {
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            if($key['file_save'] == "none.jpg" || $key['file_save'] == "none.png"|| $key['file_save'] == "none.gif"|| $key['file_save'] == "none.mp4"|| $key['file_save'] == "none.3gp"|| $key['file_save'] == "none.avi"){
                ?>
                <h1 id="h1s1">
                    il n' y a pas d'objet pour votre statut
                </h1>
                <?php
                    }else{
                    $footeur = explode(".",$key['file_save']);
                    $littlefoot = strtolower(end($footeur));
                    $array = ["jpg","png","gif"];
                    $array1 = ["mp4","3gp","avi"];
                    if (in_array($littlefoot,$array)) {
                       ?>
                    <img src="../client/<?php echo $key['file_save'];?>" alt="" width="20%" height="20%">
                       <?php
                    }
                    elseif (in_array($littlefoot,$array1)) {
                        ?>
               
                    <video controls width="20%" height="20%">
                            <source src="../client/<?php echo $file['file_save'];?>" type="video/<?php echo $littlefoot;?>">
                    </video>
               
                        <?php
                    }
                }
            echo "<h2> <u> commentaire de l'admin </u><br>".$key['commentaire']."</h2>";
            if ($key['nombreCorrection'] > 0) {
                echo '
                    <form action="" method="post">
                    <input type="text" name="identique" value="'.$key['id'].'">
                        <input type="submit" name="correcte" value="correction">
                    </form>
                    ';
                }else{
                    echo "Nombre de correction atteinte";
                }
        }
        else{
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            echo "il n'a pas encore fait un remarque , ";
        }
        if ($key['vue']=="yes") {
            echo "<svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' viewBox='0 0 12 12'><path fill='#5E976E' d='M12 3.1c0 .4-.1.8-.4 1.1L5.9 9.8c-.3.3-.6.4-1 .4s-.7-.1-1-.4L.4 6.3C.1 6 0 5.6 0 5.2c0-.4.2-.7.4-.9.2-.3.6-.4.9-.4.4 0 .8.1 1.1.4l2.5 2.5 4.7-4.7c.3-.3.7-.4 1-.4.4 0 .7.2.9.4.3.3.5.6.5 1z'/></svg>";
        }
        else{
            echo " et pas encore vue aussi <br> ";
        }
        ?>
        <?php
    }
}
// valide d'un affiche 
if (isset($_POST['affiche'])) {
    
    if ($key['typeFile'] == "Affiche") {
        # code...
    
        if ($key['commentaire'] != "none"  ) {
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            if($key['file_save'] == "none.jpg" || $key['file_save'] == "none.png"|| $key['file_save'] == "none.gif"|| $key['file_save'] == "none.mp4"|| $key['file_save'] == "none.3gp"|| $key['file_save'] == "none.avi"){
                ?>
                <h1 id="h1s1">
                    il n' y a pas d'objet pour votre statut
                </h1>
                <?php
                    }else{
                    $footeur = explode(".",$key['file_save']);
                    $littlefoot = strtolower(end($footeur));
                    $array = ["jpg","png","gif"];
                    $array1 = ["mp4","3gp","avi"];
                    if (in_array($littlefoot,$array)) {
                       ?>
                    <img src="../client/<?php echo $key['file_save'];?>" alt="" width="20%" height="20%">
                       <?php
                    }
                    elseif (in_array($littlefoot,$array1)) {
                        ?>
               
                    <video controls width="20%" height="20%">
                            <source src="../client/<?php echo $file['file_save'];?>" type="video/<?php echo $littlefoot;?>">
                    </video>
               
                        <?php
                    }
                }
            echo "<h2> <u> commentaire de l'admin </u><br>".$key['commentaire']."</h2>";
            if ($key['nombreCorrection'] > 0) {
            echo '
                <form action="" method="post">
                <input type="text" name="identique" value="'.$key['id'].'">
                    <input type="submit" name="correcte" value="correction">
                </form>
                ';
            }else{
                echo "Nombre de correction atteinte";
            }
        }
        else{
            echo "<h1>
            <u>
                Votre description
            </u> <br> "
            .$key['commente'].
                 "</h1>";
            echo "il n'a pas encore fait un remarque , ";
        }
        if ($key['vue']=="yes") {
            echo "<br>";
        }
        else{
            echo " et pas encore vue aussi <br> ";
        }
        ?>
        <?php
    }
}
// spot publicitaire 
if (isset($_POST['spot'])) {
   
    if ($key['typeFile'] == "Spot Pub(2D)") {
        if ($key['commentaire'] != "none") {
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            if($key['file_save'] == "none.mp4"|| $key['file_save'] == "none.3gp"|| $key['file_save'] == "none.avi"){
                ?>
                <h1 id="h1s" class="btn btn-warning">
                    il n' y a pas d'objet pour votre statut
                </h1>
                <?php
                    }else{
                    $footeur = explode(".",$key['file_save']);
                    $littlefoot = strtolower(end($footeur));
                    $array = ["mp4","3gp","avi"];
                if (in_array($littlefoot,$array)) {
                    # code...
                ?>
                    <video controls width="20%" height="20%">
                            <source src="../client/<?php echo $key['file_save'];?>" type="video/<?php echo $littlefoot;?>">
                    </video>
               
                        <?php
                    }
                }
            echo "<h2> <u> commentaire de l'admin </u><br>".$key['commentaire']."</h2>";
            if ($key['nombreCorrection'] > 0) {
                # code...
            
            echo '
                <form action="" method="post">
                <input type="text" name="identique" value="'.$key['id'].'">
                    <input type="submit" name="correcte" value="correction">
                </form>
                ';
            }else{
                echo "Nombre de correction atteinte";
            }
        }
        else{
            ?>
            <?php
            
            echo "<h1><u> Votre description </u> <br> ".$key['commente']."</h1>";
            
            echo ' <h1 id="h1s" class="btn btn-warning">
            il n\' y a pas d\'objet pour votre statut
        </h1><br>';
            echo "il n'a pas encore fait un remarque , ";
        }
        if ($key['vue']=="yes") {
            echo "
            <svg xmlns='http://www.w3.org/2000/svg' width='28' height='28' viewBox='0 0 12 12'><path fill='#5E976E' d='M12 3.1c0 .4-.1.8-.4 1.1L5.9 9.8c-.3.3-.6.4-1 .4s-.7-.1-1-.4L.4 6.3C.1 6 0 5.6 0 5.2c0-.4.2-.7.4-.9.2-.3.6-.4.9-.4.4 0 .8.1 1.1.4l2.5 2.5 4.7-4.7c.3-.3.7-.4 1-.4.4 0 .7.2.9.4.3.3.5.6.5 1z'/></svg>
            ";
        }
        else{
            echo " et pas encore vue aussi <br> ";
        }
   
    ?>
    <?php }
}

}
if (isset($_POST['logo']) ||isset($_POST['spot']) ||isset($_POST['affiche']) ||isset($_POST['carte'])) {
   if (isset($_POST['logo'])) {
    $_SESSION['file']=$_POST['logo'];
   }elseif (isset($_POST['spot'])) {
    $_SESSION['file']=$_POST['spot'];
   }elseif (isset($_POST['affiche'])) {
    $_SESSION['file']=$_POST['affiche'];
   }elseif (isset($_POST['carte'])) {
    $_SESSION['file']=$_POST['carte'];
   }
    ?>
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
    <?php
}
?>


<?php
// si le clien click sur correction
if (isset($_POST['correcte'])) {
    $base = $bdd->prepare('SELECT * FROM savefile WHERE id = :id');
    $base ->execute([
        "id"=>$_POST['identique']
    ]);
    $_SESSION['identique']=$_POST['identique'];
   $based = $base->fetch();
    echo "<center><h1> Votre anncien poste </h1><b style='background-color:gray; box-shadow: 1px 10px 5px black'>";
    echo $based['commente']."</b><br>";
    if($based['file_save'] == "none.jpg" || $based['file_save'] == "none.png"|| $based['file_save'] == "none.gif"|| $based['file_save'] == "none.mp4"|| $based['file_save'] == "none.3gp"|| $based['file_save'] == "none.avi"){
        ?>
        <h1 id="h1s">
            il n' y a pas d'objet pour votre statut
        </h1>
        <?php
            }else{
            $footeur = explode(".",$based['file_save']);
            $littlefoot = strtolower(end($footeur));
            $array = ["jpg","png","gif"];
            $array1 = ["mp4","3gp","avi"];
            if (in_array($littlefoot,$array)) {
               ?>
            <img src="../client/<?php echo $based['file_save'];?>" alt="" width="20%" height="20%">
               <?php
            }
            elseif (in_array($littlefoot,$array1)) {
                ?>
       
            <video controls width="20%" height="20%">
                    <source src="../client/<?php echo $based['file_save'];?>" type="video/<?php echo $littlefoot;?>">
            </video>
       
                <?php
            }
        }
    ?>
    <fieldset>
        <h2>
            commentaire de l'admin
        </h2>
        <big>
            <?php echo $based['commentaire'];?>
        </big>
    </fieldset>
<?php  if ($based['nombreCorrection'] > 0) {
    ?>

<form action="" style="margin-top:2cm" method="post">
        <textarea name="texte" style="box-shadow:1px 1px 10px black;" placeholder="Entrer votre mot ici..." id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="correction" value="valider">
</form>
</center>
    <?php }else{
        echo "Nombre de correction atteinte";
    }

}
// si le clien valide la correction 
if (isset($_POST['correction'])) {
    $select = $bdd->prepare('SELECT * FROM savefile WHERE id = :id');
    $select->execute([
        "id"=>$_SESSION['identique']
    ]);
    $selected = $select->fetch();
    $based = $bdd->prepare('UPDATE savefile SET commente = :commente,commentaire = :commentaire,vue = :vue,nombreCorrection = :nombreCorrection WHERE id = :id');
    $based->execute([
        "commente"=>nl2br($_POST['texte']),
        "commentaire"=>"none",
        "vue"=>"none",
        "id"=>$_SESSION['identique'],
        "nombreCorrection" => ($selected['nombreCorrection']-1)
    ]);
}
?>

<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery-ui.min.js"></script>
<script src="../../js/image.js"></script>
<script src="../../js/publink.js"></script>
<script src="../../js/resize.js"></script>
<script>
$("input[type='text']").fadeOut();
</script>
<script>
function lod(params) {
    $("#vues").load("bddAdmin/vueObject1.php");
}
setInterval(lod(),1);
$("#mens").accordion();
</script>