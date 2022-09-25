<link rel="stylesheet" href="../../../css/bootstrap.css">
<link rel="stylesheet" href="../../../css/styleCorp.css">
<?php 
session_start();
    if ($_POST['name']== "No client") {
include "../../chargement/index.php";
include "../../../html/adminHtml/inscription/connecter.html";
        echo "<h4> No client ... </h4>";
    }else{
$_SESSION['name']=$_POST['name'];
include "../../chargement/index.php";
include "../../../html/adminHtml/inscription/connecter.html";
?>
<strong id="hey">
    
</strong>
</div>
</fieldset>
<?php
  
}
?>
</center>
<script src="../../../js/jquery.min.js"></script>
<script src="../../../js/image.js"></script>
<script src="../../../js/personsHey.js"></script>
<script>
    
    $(window).resize(function() {
        $("#reception").css("float","right");
        $("#commande").css("float","right");
        $("#listed").css("margin-left","-1cm");
});
$("input[type='text']").fadeOut();
</script>
<style>
    sup{
        background-color:white;
        color:red;
        zoom:1.5;
        border-radius:10px
    }
</style>