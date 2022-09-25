<?php
if ($_POST['typeDefichier'] == "logo" || $_POST['typeDefichier'] == "carte" || $_POST['typeDefichier'] == "affiche" ) {
    $tmpName = $_FILES['photo']['tmp_name'];
    $name = $_FILES['photo']['name'];
    $fry = explode('.',$name);
    $eft = strtolower(end($fry));
    $ext = ['jpg','png', 'gif','jpeg'];
    if (in_array($eft,$ext)) {
        $neim = uniqid('',true);
        $nom = $neim. '.' .$eft;
        move_uploaded_file($tmpName,$nom);
    include "../../bdd/insertpink.php";
}
}else {
    $tmpName = $_FILES['photo']['tmp_name'];
    $name = $_FILES['photo']['name'];
    $fry = explode('.',$name);
    $eft = strtolower(end($fry));
    $ext = ['3gp','mp4','avi'];
    if (in_array($eft,$ext)) {
        $neim = uniqid('',true);
        $nom = $neim. '.' .$eft;
        move_uploaded_file($tmpName,$nom);
    include "../../bdd/insertpink.php";
}
}
header("location:../../../html/adminHtml/administrateur.html");
?>