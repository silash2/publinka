

<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleMDP1.css">
<?php
include "../bdd/passe/lost.php";
include "../../html/htmlCorps/tete.html";
if ($_SESSION['numero'] == $based['numero'] || $_SESSION['numero'] == $based['email']) {
?>
<center>
    <h4>
        <center>
        <?php echo $based['nomEtprenom'];?>
        </center>
    </h4>
    <br>
<div id="corps" >
    
</div>
<a href="../log/index.php">
    Annuler
</a>
</center>
<?php
}else {
    header("location:index.php");
}

?>
<script src="../../js/jquery.min.js"></script>
    <script src="../../js/passe/passeLost.js"></script>
