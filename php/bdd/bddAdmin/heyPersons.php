<?php
session_start();
include "../bdd.php";
$based = $bdd->prepare('SELECT * FROM inscription_members WHERE nomEtprenom = :nomEtprenom');
$based->execute([
    "nomEtprenom"=>$_SESSION['name']
]);
$base = $based->fetch();
?>
<center>
<table style="text-align:center;box-shadow: 5px 0px 5px 0px;margin-top:2cm;border-top-right-radius: 50px;border-bottom-left-radius: 25px;font-size:1.5em">
<tr>
  <td>
  <strong style="margin-left: -3em;">
      <u>Nom et Prenom</u><br>
        <p style="margin-left: -6em;text-transform:capitalize"><?php echo "<em>".$base['nomEtprenom']."</em>";?></p>
  </strong>
  </td>
</tr>
<tr>
  <td>
<strong style="margin-left: -2.2em;">
    <u>Date de naissance</u><br>
      <p style="margin-left: -4.7em;"><?php echo "<em>".$base['dateDenaissance']."</em>";?></p>
</strong>
</td>
</tr>
<tr>
  <td>
<strong style="margin-left: -6em;">
    <u>Adresse</u>
      <p style="margin-left: -6.2em;"><?php echo "<em>".$base['adressse']."</em>";?></p>
</strong>
</td>
</tr>
<tr>
  <td>
<strong style="margin-left: -0.2em;">
    <u>Numero de telephone</u><br>
      <p style="margin-left: -4.2em;"><?php echo "<em>".$base['numero']."</em>";?></p>
</strong>
</td>
</tr>
<tr>
  <td>
<strong style="margin-left: -6.5em;">
    <u>E-mail</u><br>
      <p style="margin-left: -0.5em;"><?php echo "<em>".$base['email']."</em>";?></p>
</strong>
</td>
</tr>
<tr>
  <td>
<strong style="color:rgb(19, 112, 250);text-shadow: 0px 1px 1.5px rgb(51, 50, 50);">
    Le client est en ligne :  
      <?php if($base['likeCondition'] == "oui"){
        echo "<em style='color:green'>Oui</em>";
    }else{
        echo "<em style='color:red'>Non</em>";
    }
    
    ;?>
    <srong>
    </td>
</tr>
    </table>
  </center>