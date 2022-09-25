<div id="chargement">
    <h1>
    <p> 
    Chargement
        <i id="p1">.</i><i id="p2">.</i><i id="p3">.</i>
    </p>
        <b id="images">
        </b>
    </h1>
    <br>
</div>
<style>
    #chargement{
        position: fixed;
        z-index:9999;
        background-color:skyblue;
        top:0px;
        left:0px;
        height:100%;
        width:100%;
        cursor: wait;
        text-align:center;
    }
</style>
<script src="../../js/jquery.min.js"></script>
<script>
    $("#images").load("image.php");
</script>
<script src="../../js/image.js"></script>