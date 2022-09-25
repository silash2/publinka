<?php
include "../bdd/bdd.php";
$pinkse = $bdd->prepare('SELECT * FROM pink');
$pinkse->execute();
$comptage = 0;
$pinse = $pinkse->fetchALL(PDO::FETCH_ASSOC);
foreach($pinse as $key){
$video = explode(".",$key['image']);
$videoAfterPoint = strtolower(end($video));
$ext = ['mp4','avi','3gp','wmv'];

if (in_array($videoAfterPoint,$ext)) {
    $comptage = $comptage+1;
?>
<video   width="150cm" id="video<?php echo $comptage;?>" height="200cm" controls>
    <source src="../../php/admin/insertionObjet/<?php echo $key['image'];?>" type="video/<?php echo $videoAfterPoint;?>">
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
}
if ($comptage == 0) {
    echo "<br><h4 id='spots'> il n' y pas de fichier </h4>";
} ?>
<div class="col-1" style="margin-left:1cm">
<button id="preves" style="" ></button>
<br>
<b id="comptes"></b>
<b id="bara"></b>
<b id="resultats"></b>
<br>
<button id="suivants" style="margin-top:-0.1cm" ></button>
</div>
<script src="js/jquery.min.js"></script>
<script>
    var lit = 0;
setInterval(function () {
    if (lit < 3) {
    lit++;
    if (lit == 1) {
        $("#spots").css("color","red"); 
    }else if (lit == 2){
        $("#spots").css("color","black"); 
        lit = 0;
        }
    }
}
    , 1000);
</script>
<?php
if ($comptage > 1) {
    ?>
    
    <script>
      var nombrers = 2;
        var nombree = 1;
        var nombrest = 2;
        var nombrePremiers = 0;
        var nombreRebootr = 1;
        var nombre_compte = 0;
        var nombre_resultat = 1;
        while (nombree <= <?php echo $comptage;?>) {
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
            if (nombrest >= <?php echo $nombre;?>) {
            
            $("#video"+nombrest).show("slow"); 
            $("#video"+(nombrers-1)).fadeOut("slow");
            $("#preves").show("slow");
            nombre_resultat++;
            $("#comptes").text(nombre_resultat);
                nombrest++;
                nombrers++;
                nombrePremiers++;
                nombreRebootr++;  
                if(nombre_resultat == nombre_compte){
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