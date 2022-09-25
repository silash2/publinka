<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/styleCorp1.css">
<?php session_start();
    if (isset($_POST['connexion'])) {
        $_SESSION['connexion']=$_POST['connexion'];
        include "../bdd/bdd.php";
        include "../chargement/index.php";
        include "../bdd/bddinscription/selectbase.php";
        if (password_verify($_POST['motDepasse'],$numero['pswrd'])) {
            if ($numero['verification'] != "ok") {
            $_SESSION['nom'] = $numero['nomEtprenom'];
            $_SESSION['numeroEtemail'] = $_POST['numeroEtemail'];
            $based = $bdd->prepare('UPDATE inscription_members SET likeCondition = :likeCondition WHERE numero = :numero OR email = :email');
            $based->execute([
                'likeCondition'=>"oui",
                'numero'=>$_POST['numeroEtemail'],
                'email'=>$_POST['numeroEtemail']
            ]);
               ?>
               <center>
                <h1>
                    Vous devez encore attendre la confirmation de l'admin
                </h1>
                <a href="../../deconnexion.php">Me deconnecter</a>
            </center>
               <?php
            }else{
            $based = $bdd->prepare('UPDATE inscription_members SET likeCondition = :likeCondition WHERE numero = :numero OR email = :email');
            $based->execute([
                'likeCondition'=>"oui",
                'numero'=>$_POST['numeroEtemail'],
                'email'=>$_POST['numeroEtemail']
            ]);
            include "../../html/connecter.html";
            $_SESSION['nom'] = $numero['nomEtprenom'];
            $_SESSION['numeroEtemail'] = $_POST['numeroEtemail'];
            include "../accueilClient/accueil.php";
            }
        }else{
            header("location:../log/index.php");
            ?>
<style>
    #numeroEtemail{
        border-color:red;
    }
    #motDepasse{
        border-color:red;
    }
</style>
            <?php
        }
       echo "
       <script src='../../js/jquery.min.js'></script>
       <script src='../../js/jquery-ui.min.js'></script>
       <script src='../../js/publink.js'></script>
       <script src='../../js/nav.js'></script>
       <script src='../../js/image.js'></script>
       ";
    }
   else if (isset($_POST['valider'])) {
    include "../../bdd/bdd.php";
    $verification = $bdd->prepare("SELECT * FROM inscription_members WHERE nomEtprenom = :nomEtprenom");
    $verification->execute([
        "nomEtprenom"=>$_POST['nomEtprenom']
    ]);
    $valid = $verification->fetch();
    $_SESSION['nom'] = $_POST['nomEtprenom'];
    echo '
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/styleCorp1.css">
    ';
    if ($valid['verification'] != "ok") {
            ?>
            <center>
                <h4>
                    Vous etes bien inscrit <br>
                     veillez juste attendre la confirmation...
                </h4>
                <em id="chg" style="border:5;border-color:black;border-style:dotted;width:2cm;height:1cm;border-radius:50px;font-size:5em">
                    &nbsp &nbsp &nbsp
                </em>
                <br>
                <a href="../../../deconnexion.php">Deconnexion</a>
            </center>
            <?php
    }
    ?>
    <script src='../../../js/jquery.min.js'></script>
    <script src='../../../js/jquery-ui.min.js'></script>
    <script src='../../../js/publink.js'></script>
    <script>
        var lecture = 0
        var nombret = 0;
       setInterval(
        function letsgose(params) {
            ;
            lecture++;
            nombret++;
            if (lecture == 1) {
                
                $("#chg").css("border-left-color","blue");
                $("#chg").css("border-top-color","red");
            }
            else if(lecture == 2){
                $("#chg").css("border-bottom-color","blue");
                $("#chg").css("border-left-color","red");
            }
            else if(lecture == 3){
                
                $("#chg").css("border-right-color","blue");
                $("#chg").css("border-bottom-color","red");
            }
            else if(lecture == 4){
                $("#chg").css("border-top-color","blue"); 
                $("#chg").css("border-right-color","red");
                lecture=lecture-4;
            }
    }, 100);
    </script>
    <style>
        em:hover{
            cursor:wait;
        }
    </style>
   <?php
}
?>
