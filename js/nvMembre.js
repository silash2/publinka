
function news(params) {
    $("#nvMembre").load("../../php/admin/connected/membreVerification.php");
}
setInterval("news()", 1000);