<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/styleImage.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Publinka</title>
</head>
<body>
<?php echo include "../chargement/index.php";?>
<form action="../connected/index.php" method="post">
<center>
    <table style="text-align: center;box-shadow: 5px 0px 5px 0px;margin-top:-1cm;border-top-right-radius: 50px;border-bottom-right-radius: 50px;border-color: rgb(6, 100, 241);" cellpadding="20%">
      <center>
      <tr >
        <td style="border-color: rgb(6, 100, 241);">
          <h1 id="h1"> <span style="color:silver;text-shadow:0px 1px 2px black;font-family:verdana;">Publinka</span>
            <span style="color:rgb(6, 100, 241);text-shadow:0px 1px 2px black">Login</span></h1>
        </td>
      </tr>
      <tr style="border-color: transparent;">
        <td>
          <label for="numeroEtemail"><p id="p1"> Numero ou Email</p></label>
          <br>
          <input type="text" name="numeroEtemail" class="" id="numeroEtemail" placeholder="" autocomplete="off" required id="np"><br>
        </td>
      </tr>
      <tr style="border-color: transparent;">
      
        
        <td> 
          <label for="motDepasse"><p id="p2">Mot de passe</p></label>
          <br>
        <input type="password" name="motDepasse" class="" id="motDepasse" placeholder="" autocomplete="off" required id="np">
      </td>
      </tr>
      </center>
      </center>
      <tr>
        <td>
          <br>
       <center>
          <input type="submit" name="connexion" value="connexion" id="btn">
  
        </center>
        <a href="../lost/index.php">Mot de passe oublier?</a>
        <br>
        <p id="p3"> Pour s'inscrire ? <a href="../registre/index.php">Cliquez ici </a></p>
        <a href="../../index.php" class="btn btn-primary"><</a>
      </td>
      </tr>
    
      </table>
    </center>
  </form>
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/image.js"></script>
</body>
</html>