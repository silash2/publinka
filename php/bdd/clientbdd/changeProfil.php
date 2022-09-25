<?php
$client = $bdd->prepare("SELECT * FROM inscription_members WHERE nomEtprenom = :nomEtprenom");
$client->execute([
    "nomEtprenom"=>$_SESSION['nom']
]);
$clientprofile = $client->fetchALL(PDO::FETCH_ASSOC);
foreach ($clientprofile as $key) {
    ?>
<center>
    <div class="bd2">
<h1 id="h1"> <span style="color:silver;text-shadow:0px 1px 2px black;font-family:verdana;">A propos de vous</span></h1>
<form action="" method="post">
    <h2 id="h2p">
    <?php echo $key['nomEtprenom'];?>
      <br>
     <p id="pO"> Vous ne pouvez pas modifier votre nom </p>
    </h2>
    <input type="text" name="dateDenaissance" placeholder="Votre date de naissance" id="inpt2" required value="<?php echo $key['dateDenaissance'];?>">
    <br>
    <input type="text" name="numero" id="inpt2" placeholder="Votre numero" required value="<?php echo $key['numero'];?>">
    <br>
    <input type="text" name="adressse" placeholder="Votre adresse" id="inpt2" required value="<?php echo $key['adressse'];?>">
    <br>
    <input type="email" name="email" placeholder="E-mail" id="inpt2" required value="<?php echo $key['email'];?>">
    <br>
    <input type="submit" name="changed" id="inptys" value="changer">
    </form>
    </div>
</center>

<?php
}
