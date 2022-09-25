<?php
include "../../bdd/bdd.php";
if ($_POST['motDepasse']==$_POST['confmotDepasse']) {
    include "../../bdd/bddinscription/base.php";
    $_SESSION['nom'] = $_POST['nomEtprenom'];
    echo "<br>";
    include "../index.php";
}
else{
    include "../../registre/index.php";
    echo "<style>#motDepasse,#confmotDepasse{border-color:red;}</style>";
}

?>
