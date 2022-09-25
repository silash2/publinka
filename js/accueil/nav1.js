



function enligne(params) {
    $("#persons").load('../admin/connected/persons/personsActive.php');
}
setInterval("enligne()",1000);