<?php
session_start();
include "../bdd.php";
$based = $bdd->prepare('UPDATE savefile SET vue = :vue WHERE id = :id');
$based ->execute([
    "vue"=>"yes",
    "id"=>$_SESSION['id']
]);
?>
<script>
    alert('le client est vue');
</script>