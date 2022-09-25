<?php
include "../bdd/bdd.php";
$based = $bdd->prepare('SELECT * FROM accueil');
$based->execute();
$get = $based->fetchALL(PDO::FETCH_ASSOC);
foreach ($get as $key ) {
    echo "<h1>Annonce Le ".$key['date']."</h1><br>";
    echo $key['texte']."<br>";
}