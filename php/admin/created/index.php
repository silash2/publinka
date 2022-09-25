



<?php 
include "../../bdd/bdd.php";
if ($_POST['motDepasse']==$_POST['confmotDepasse']) {
    include "../../bdd/bddinscription/adminInsert.php";
    echo "<br>";
    include "../connected/inscription/index.php";
}
else{
    include "../../registre/index.php";
    echo "<style>#motDepasse,#confmotDepasse{border-color:red;}</style>";
}

?>
