<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styleCorp.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publinka</title>
</head>
<body>
    <nav class="navbar fixed-top">
        <strong id="image">PUBLINKA LOGO</strong>
        <ul>
          <li><a href="php/registre/index.php" id="a1" style="float:right">Registre</a></li>
          <li><a href="php/log/index.php" id="a2">Login</a></li>
        </ul>
    </nav>
<!-- logo -->
<div class="divC">
    <h1 id="text-L">Logo</h1>
    <?php include "php/bdd/pinkSelectImage.php";?>
</div>
<!-- spot -->
<div class="divC1">
    <h1 id="text-S"> spot Pub 2D</h1>
    <?php include "php/bdd/pinkSelectVideo.php";?>
</div>
<div class="divC">
    <h1 id="text-L">Affiche</h1>
    <?php include "php/bdd/pinkSelectImage1.php";?>
</div>
<div class="divC1">
    <h1 id="text-L"> Carte</h1>
    <?php include "php/bdd/pinkSelectImage2.php";?>
</div>
</table>
<script src="js/jquery.min.js"></script>
<script src="js/image.js"></script>
</body>
</html>
