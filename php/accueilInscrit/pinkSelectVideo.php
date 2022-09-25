<?php
include "../../bdd/bdd.php";
$pinks = $bdd->prepare('SELECT * FROM pink');
$pinks->execute();
$nombres = 0;
$pins = $pinks->fetchALL(PDO::FETCH_ASSOC);
foreach($pins as $key){
$video = explode(".",$key['image']);
$videoAfterPoint = strtolower(end($video));
$ext = ['mp4','avi','3gp','wmv'];

if (in_array($videoAfterPoint,$ext)) {
    $nombres = $nombres+1;
?>
<video   width="150cm" id="video<?php echo $nombres;?>" height="200cm" controls>
    <source src="../../admin/insertionObjet/<?php echo $key['image'];?>" type="video/<?php echo $videoAfterPoint;?>">
</video>
<style>
    video:hover{
        box-shadow: 2px 3px 4px blue;
        cursor:pointer;
    }
    video{
        margin: 6.5em -20em 1em;
        border:2px solid rgb(19, 112, 250);
        border-radius:8px 1px;
        box-shadow: 2px 3px 4px;
    }
</style>
<?php
    }
} ?>
<div class="col-1" style="margin-left:1cm">
<button id="preves" style="" class="btn btn-dark"></button>
<br>
<b id="comptes"></b>
<b id="bara"></b>
<b id="resultats"></b>
<br>
<button id="suivants" style="margin-top:-0.1cm" class="btn btn-dark"></button>
</div>
<?php
if ($nombres > 1) {
    ?>
    <script src="js/jquery.min.js"></script>
    <script>
      var nombrers = 2;
        var nombree = 1;
        var nombrest = 2;
        var nombrePremiers = 0;
        var nombreRebootr = 1;
        var nombre_compte = 0;
        var nombre_resultat = 1;
        while (nombree <= <?php echo $nombres;?>) {
            nombree++;
            nombre_compte++;
            $("#video"+nombree).hide();
        }
$("#resultats").text(nombre_compte);
$("#comptes").text(nombre_resultat);
$("#suivants").text(">");
$("#preves").text("<");
$("#preves").hide();
$("#bara").text("/");
$("#suivants").click(
    function aller(params) {
            if (nombrest <= <?php echo $nombre;?>) {
            
            $("#video"+nombrest).show("slow"); 
            $("#video"+(nombrers-1)).fadeOut("slow");
            $("#preves").show("slow");
            nombre_resultat++;
            $("#comptes").text(nombre_resultat);
                nombrest++;
                nombrers++;
                nombrePremiers++;
                nombreRebootr++;  
                if(nombre_compte == nombre_resultat){
                    $("#suivants").hide("slow");
                }     
        }
    }
);
$("#preves").click(
    function (params) {
        nombrest--;
        nombrers--;
        nombre_resultat--;
        $("#comptes").text(nombre_resultat);
        $("#video"+nombrest).fadeOut("slow");
        $("#video"+(nombrers-1)).show("slow"); 
            if (nombrers <= 2) {
                $("#preves").fadeOut();
            }  
            if(nombre_compte >= nombre_resultat){
                    $("#suivants").show("slow");
                } 
    }   
)
    </script>
    
    <?php
}


?>