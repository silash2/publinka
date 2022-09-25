<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/styleInput.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre | Publinka</title>
</head>
<body>
      <center>
         <table style="text-align: center;box-shadow: 5px 0px 5px 0px;margin-top:2cm;border-top-left-radius: 50px;border-bottom-right-radius: 50px;border-color: rgb(6, 100, 241);">
    <form action="../created/index.php" method="post" >
       <tr>
      <td>
     <h1 id="h1S"> <span style="color:silver;text-shadow:0px 1px 2px black;font-family:verdana;">Publinka</span> <span style="color:rgb(6, 100, 241);text-shadow:0px 1px 2px black">SignUP</span></h1>
     </td>
      </tr>
       <tr>
      <td>
     <label for="np"><p style="margin: 20px 11.5em 0em 0em"> Nom de la societe</p></label><br>
       <input  type="text" autocomplete="off" name="nomEtprenom" placeholder="" required id="np"><br>
       </td>
      </tr>
       <tr>
      <td>
    <label for="numero"><p style="margin: 16px 15em 0em 0em">Numero</p></label><br>
       <input  type="text" autocomplete="off" name="numero" placeholder="" required id="numero"><br>
       </td>
      </tr>
       <tr>
      <td>
    <label for="dtn"><p style="margin: 16px 10em 0em 0em">Date du debut de votre projet</p></label><br>
       <input  type="date" name="dateDenaissance"required id="dtn"><br>
       </td>
      </tr>
       <tr>
      <td>
         <label for="adresse"><p style="margin: 16px 15em 0em 0em">Adresse de votre centre</p></label><br>
         <input  type="text" autocomplete="off" placeholder="" name="adresse" required id="adresse"><br>
      </td>
      </tr>
       <tr>
         <td>
            <label for="email"><p style="margin: 16px 16em 0em 0em">Email</p></label><br>
            <input  type="email" name="email"required id="email"><br>
         </td>
      </tr>
       <tr>
         <td>
            <label for="motDepasse"><p style="margin: 16px 12em 0em 0em">Mot de passe</p></label><br>
            <input  type="password" placeholder="" name="motDepasse" required id="motDepasse"><br>
         </td> 
      </tr>
       <tr>
      <td>
         <label for="confmotDepasse"><p style="margin: 16px 7em 0em 0em">Confirme mot de passe</p></label><br>
         <input  type="password" name="confmotDepasse" placeholder="" required id="confmotDepasse"><br>
      </td> 
      </tr>
       <i id="ecriture">

       </i>
       <tr>
         <td>
            <input type="checkbox" required name="accepter" id="accepte" value="oui">
            <br>
            <label for="accepte">J'accepte les termes et les conditions</label>
         </td>
       </tr>
   <tr>
      <td>
       <input type="submit" name="valider" value="Valider" id="btn1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="reset" value="Effacer" id="btn2">
       </td>
    </form>
    </tr>
    
<tr>
   <td>
         <a href="../../../html/adminHtml/index.html" class="btn btn-outline-dark">Retour</a>
   </td>
</tr>
    </table>
   </center>
    
     <script src="../../../js/jquery.min.js"></script>
     <script src="../../../js/jquery-ui.min.js"></script>
</body>
</html>