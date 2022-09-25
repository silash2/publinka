<?php
$client = $bdd->prepare("SELECT * FROM inscription_members WHERE nomEtprenom = :nomEtprenom");
$client->execute([
    "nomEtprenom"=>$_SESSION['nom']
]);
$clientprofile = $client->fetchALL(PDO::FETCH_ASSOC);
foreach ($clientprofile as $key) {
    ?>
<center>
    <div class="bd1">
<h1 id="h1">
     <span style="color:silver;text-shadow:0px 1px 2px black;font-family:verdana;">A propos de vous</span></h1>
    <h2 id="h2p">
        <?php echo $key['nomEtprenom'];?>
    </h2>
    
    <strong >Date de naissance </strong>
    <br>
     <?php echo $key['dateDenaissance'];?>
    <br>
    <strong >Numero de telephone </strong>
    <br> 
    <?php echo $key['numero'];?>
    <br>
    <strong >Adresse </strong>
    <br> 
    <?php echo $key['adressse'];?>
    <br>
    <strong >E-mail </strong><br> <?php echo $key['email'];?>
    <form action="" method="post">
        <input type="submit" name="change" id="inpty" value="Modifier le profile">
    </form>
    </div>
</center>
<style>
    strong{
        text-align:center;
        margin-left:2cm;
    }
</style>
<?php
}
