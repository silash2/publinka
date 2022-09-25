<?php
include "bdd.php";
$pink = $bdd->prepare('SELECT * FROM pink WHERE typeFile = :typeFile');
$pink->execute([
    "typeFile"=>"affiche"
]);
$nombres = 0;
?>

<?php
while ($pin = $pink->fetch()) {
$image = explode(".",$pin['image']);
$imageAfterPoint = strtolower(end($image));
$ext = ['jpg','png','gif','jpeg'];

if (in_array($imageAfterPoint,$ext)) {
    $nombres = $nombres +1;
?>

      
<img src="../../php/admin/insertionObjet/<?php echo $pin['image'];?>" id="image<?php echo $nombres;?>" class="slide-img" width="150cm" height="230cm" style="margin: 6.5em -5em 1em;border:2px solid silver;border-radius:8px 1px"
 onclick="window.open('../../php/admin/insertionObjet/<?php echo $pin['image'];?>','','rezisabled')">
    

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
<button id="prevs" style="" class="btn btn-primary"></button>
<br>
<b id="resultatse"></b> 
<b id="bare"></b>
<b id="comptese"></b>
<br>
<button id="suivanter" style="margin-top:-0.1cm" ></button>
</div>
<?php
if ($nombres > 1) {
    ?>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/image.js"></script>
    <script>
        var nombrerle = 2;
        var nombrele = 1;
        var nombresle = 2;
        var nombrePremierle = 0;
        var nombreRebootle = 1;
        var nombreComptele = 0;
        var nombreComptesle = 1;
        while (nombrele <= <?php echo $nombres;?>) {
            nombrele++;
            nombreComptele++;
            $("#image"+nombrele).hide();
        }
$("#resultatse").text(nombreComptesle);
$("#comptese").text(nombreComptele);
$("#suivanter").text(">");
$("#prevs").text("<");
$("#prevs").hide();
$("#bare").text("/");
$("#suivanter").click(
    function aller(params) {
            if (nombresle <= <?php echo $nombres;?>) {
                
            $("#image"+nombresle).show("slow"); 
            $("#image"+(nombrerle-1)).fadeOut("slow");
            $("#prevs").show("slow");
            nombreComptele--;
            nombreComptesle++;
            $("#resultat").text(nombreComptesle);
                nombresle++;
                nombrerle++;
                nombrePremierle++;
                nombreRebootle++;          
        }
    }
);
$("#prevs").click(
    function (params) {
        nombresle--;
        nombrerle--;
        nombreComptesle--;
        $("#resultatse").text(nombreComptesle);
        $("#image"+nombresle).fadeOut("slow");
        $("#image"+(nombrerle-1)).show("slow"); 
            if (nombresle <= 2) {
                $("#prevs").fadeOut();
            }  
    }

    
)
        
    </script>
    
    <?php
}else{
    
}

?>