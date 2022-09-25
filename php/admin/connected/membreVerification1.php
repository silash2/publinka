

    <?php 
    include "../../bdd/bdd.php";
    $verificationMembres = $bdd->prepare("SELECT * FROM inscription_members WHERE verification = :verification");
    $verificationMembres->execute([
        "verification"=> "none"
    ]);
    $nombrew = 0;
    while($vRMembres = $verificationMembres->fetch()){
        $nombrew = $nombrew+1;
        ?>
            <form action="../admin/connected/verificationOk.php" method="post">
                    <input type="text" name="ids" id="text" value="<?php echo $vRMembres['id'];?>">
                            <?php echo $vRMembres['nomEtprenom'];?>
                    <input type="submit" name="go" value="accepter">
            </form>
        <?php
    }?>
<?php
 if(isset($_POST['go'])){
     
     include "verificationOk.php";
   
}?>
<script src="../../js/jquery.min.js"></script>
<script>
$("input[type='text']").hide();
$("#fiche").load("");
</script>
