<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/styleInput.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre | Publinka</title>
</head>
<body>
<?php echo include "../chargement/index.php";?>
  
      <center>
    <form action="../connected/created/" method="post" >
     <h1 id="h1S"> <span style="color:silver;text-shadow:0px 1px 2px black;font-family:verdana;">Publinka</span> <span style="color:rgb(6, 100, 241);text-shadow:0px 1px 2px black">SignUP</span></h1>
    <label for="np"><p style="margin: 20px 11.5em 0em 0em"> Nom et Prenom</p></label><br>
       <input  type="text" autocomplete="off" name="nomEtprenom" style="padding-left: 5px;" required id="np"><br>
    <label for="numero"><p style="margin: 16px 15em 0em 0em">Numero</p></label><br>
       <input  type="text" autocomplete="off" name="numero" style="padding-left: 5px;" required id="numero"><br>
    <label for="dtn"><p style="margin: 16px 10em 0em 0em">Date de naissance</p></label><br>
    <select name="mois" id="">
       <option value="">mois</option>
    <?php
      $mois = 0;
      while ($mois < 13) {
         $mois = $mois +1;
         echo "<option value='".$mois."'>".$mois."</option>";
      }
    ?>
    </select>
    <select name="jours" id="">
       <option value="">jours</option>
    <?php
      
      $array = ['janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre'];
      $array1 = [4,6,9,11];
      $array2 = [3,5,7,8,10,12];
      $array3 = 2;
      $chiffre = 0;
      while ($chiffre < 31 ) {
         $chiffre = $chiffre +1;
         echo "<option value='".$chiffre."'>".$chiffre."</option>";
      }
    ?>
    </select>
    <select name="annee" id="">
       <option value="">annee</option>
    <?php
      $annee = 2002;
      while ($annee > 1949) {
         $annee = $annee -1;
         echo "<option value='".$annee."'>".$annee."</option>";
      }
    ?>
    </select>
    <br>
    <label for="adresse"><p style="margin: 16px 15em 0em 0em">Adresse</p></label><br>
       <input  type="text" autocomplete="off" style="padding-left: 5px;" name="adresse" required id="adresse"><br>
    <label for="email"><p style="margin: 16px 16em 0em 0em">Email</p></label><br>
       <input  type="email" name="email"required id="email"><br>
    <label for="motDepasse"><p style="margin: 16px 12em 0em 0em">Mot de passe</p></label><br>
       <input  type="password" style="padding-left: 5px;" name="motDepasse" required id="motDepasse"><br>
    <label for="confmotDepasse"><p style="margin: 16px 7em 0em 0em">Confirme mot de passe</p></label><br>
       <input  type="password" name="confmotDepasse" style="padding-left: 15px;" required id="confmotDepasse"><br>
    <i id="ecriture">

       </i>
       <input type="checkbox" required name="accepter" id="accepte" value="oui">
       <label for="accepte" id="label">J'accepte les termes et les conditions</label>
       <br>
       <input type="submit" name="valider" value="Valider" id="btn1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="reset" value="Effacer" id="btn2">
    </form>
    <a href="../../index.php" class="btn btn-outline-dark">Retour</a>
    </center>
    
     <script src="../../js/jquery.min.js"></script>
     <script src="../../js/jquery-ui.min.js"></script>
     <script src="../../js/index.js"></script>
     <script src="../../js/image.js"></script>
</body>
</html>