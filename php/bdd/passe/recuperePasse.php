<?php 

if ($_POST['passe']==$_POST['confpasse']) {
    session_start();
$base = $bdd->prepare("UPDATE inscription_members SET pswrd = :pswrd ,confpswrd = :confpswrd WHERE numero = :numero OR email = :email");
$base ->execute([
    "pswrd"=>password_hash($_POST['passe'],1),
    "confpswrd"=>password_hash($_POST['confpasse'],1),
    "numero"=>$_SESSION['numero'],
    "email"=>$_SESSION['numero']

]);
echo "<script>alert('mot de passe bien modifier');</script>";
include "../log/index.php";
}else{
    include "../lost/index.php";
    echo "</br><style>#numero{border-color:red;}</style>";
    echo '<br><script src="../../js/passe/error.js"></script>';
}
?>
