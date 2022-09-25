<?php
include "bdd.php";
$pinkt = $bdd->prepare('SELECT * FROM pink WHERE typeFile = :typeFile');
$pinkt->execute([
    "typeFile"=>"carte"
]);
$nombrert = 0;
?>
<?php
while ($pini = $pinkt->fetch()) {
$imagy = explode(".",$pini['image']);
$pimageAfterPoint = strtolower(end($imagy));
$exte = ['jpg','png','gif','jpeg'];

if (in_array($pimageAfterPoint,$exte)) {
    $nombrert = $nombrert +1;
?>

      
<img src="../../php/admin/insertionObjet/<?php echo $pini['image'];?>" id="lImage<?php echo $nombrert;?>" class="slide-img" width="150cm" height="230cm" style="margin: 6.5em -5em 1em;border:2px solid silver;border-radius:8px 1px"
 onclick="window.open('../../php/admin/insertionObjet/<?php echo $pini['image'];?>','','rezisabled')">
    

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
<button id="preva" style="" class="btn btn-primary"></button>
<br>
<b id="resultata"></b> 
<b id="bares"></b>
<b id="compta"></b>
<br>
<button id="suivanta" style="margin-top:-0.1cm" ></button>
</div>
<?php
if ($nombrert > 1) {
    ?>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/image.js"></script>
    <script>
        var nombreret = 2;
        var nombreet = 1;
        var nombreset = 2;
        var nombrePremieret = 0;
        var nombreRebootet = 1;
        var nombreCompteet = 0;
        var nombreCompteset = 1;
        while (nombreet <= <?php echo $nombrert;?>) {
            nombreet++;
            nombreCompteet++;
            $("#lImage"+nombreet).hide();
        }
$("#resultata").text(nombreCompteset);
$("#compta").text(nombreCompteet);
$("#suivanta").text(">");
$("#preva").text("<");
$("#preva").hide();
$("#bares").text("/");
$("#suivanta").click(
    function aller(params) {
            if (nombreset <= <?php echo $nombrert;?>) {
                
            $("#lImage"+nombreset).show("slow"); 
            $("#lImage"+(nombreret-1)).fadeOut("slow");
            $("#preva").show("slow");
            nombreCompteet--;
            nombreCompteset++;
            $("#resultata").text(nombreCompteset);
                nombreset++;
                nombreret++;
                nombrePremieret++;
                nombreRebootet++;    
                if(nombreCompteset == nombreCompteet){
                    $("#suivanta").hide("slow");
                }       
        }
    }
);
$("#preva").click(
    function (params) {
        nombreset--;
        nombreret--;
        nombreCompteset--;
        $("#resultata").text(nombreCompteset);
        $("#lImage"+nombreset).fadeOut("slow");
        $("#lImage"+(nombreret-1)).show("slow"); 
            if (nombreCompteset <= 1) {
                $("#preva").fadeOut();
            }  
    }

    
)
        
    </script>
    
    <?php
}else{
    
}

?>