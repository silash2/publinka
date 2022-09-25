<?php
session_start();
include "../../../bdd/bdd.php";
$base = $bdd->prepare('SELECT * FROM inscription_members ');
$base->execute();
$based = $base->fetchALL(PDO::FETCH_ASSOC);
$limite = 0;
foreach ($based as $key ) {
    $limite = $limite +1;
    if ($key['likeCondition'] == "oui") {
        ?>
<b style="background-color:green;height:20%;width:500%">.</b>
        <?php
    }
    else{
?>
<b style="background-color:gray;height:20%;width:500%">.</b>
<?php
    }
    echo "<option>".strtoupper($key['nomEtprenom'])."</option>";
}if ($limite == 0) {
    echo "<option>No client</option>";
}
?>