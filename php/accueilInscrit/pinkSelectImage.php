<?php
include "../../bdd/bdd.php";
$pink = $bdd->prepare('SELECT * FROM pink');
$pink->execute();
$nombre = 0;
?>

<?php
while ($pin = $pink->fetch()) {
$image = explode(".",$pin['image']);
$imageAfterPoint = strtolower(end($image));
$ext = ['jpg','png','gif','jpeg'];

if (in_array($imageAfterPoint,$ext)) {
    $nombre = $nombre +1;
?>

      
<img src="../../admin/insertionObjet/<?php echo $pin['image'];?>" id="hey<?php echo $nombre;?>" class="slide-img" width="150cm" height="230cm" style="margin: 6.5em -5em 1em;border:2px solid silver;border-radius:8px 1px"
 onclick="window.open('../../admin/insertionObjet/<?php echo $pin['image'];?>','','rezisabled')">
    

<style>
    img{
        box-shadow: 2px 3px 4px;
    }
    img:hover{
        cursor:pointer;
        box-shadow: 2px 3px 4px;
        transition:2s;
    }
    
</style>
<?php
    }
}
?>
<div class="col-1" style="margin-left:1cm">
<button id="preve" style="" class="btn btn-primary"></button>
<br>
<b id="resultat"></b> 
<b id="bar"></b>
<b id="compte"></b>
<br>
<button id="suivant" style="margin-top:-0.1cm" ></button>
</div>
<?php
if ($nombre > 1) {
    ?>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/image.js"></script>
    <script>
        var nombrer = 2;
        var nombre = 1;
        var nombres = 2;
        var nombrePremier = 0;
        var nombreReboot = 1;
        var nombreCompte = 0;
        var nombreComptes = 1;
        while (nombre <= <?php echo $nombre;?>) {
            nombre++;
            nombreCompte++;
            $("#hey"+nombre).hide();
        }
$("#resultat").text(nombreComptes);
$("#compte").text(nombreCompte);
$("#suivant").text(">");
$("#preve").text("<");
$("#preve").hide();
$("#bar").text("/");
$("#suivant").click(
    function aller(params) {
            if (nombres <= <?php echo $nombre;?>) {
                
            $("#hey"+nombres).show("slow"); 
            $("#hey"+(nombrer-1)).fadeOut("slow");
            $("#preve").show("slow");
            nombreCompte--;
            nombreComptes++;
            $("#resultat").text(nombreComptes);
                nombres++;
                nombrer++;
                nombrePremier++;
                nombreReboot++;          
        }
    }
);
$("#preve").click(
    function (params) {
        nombres--;
        nombrer--;
        nombreComptes--;
        $("#resultat").text(nombreComptes);
        $("#hey"+nombres).fadeOut("slow");
        $("#hey"+(nombrer-1)).show("slow"); 
            if (nombres <= 2) {
                $("#preve").fadeOut();
            }  
    }

    
)
        
    </script>
    
    <?php
}else{
    
}

?>