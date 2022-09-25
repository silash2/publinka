



function enligne(params) {
    $("#persons").load('../persons/personsActive.php');
}
setInterval("enligne()",1000);