




$(document).ready(
    function (params) {
        $("#accepte").fadeOut("slow");
        $("#label").fadeOut("slow");
        $("#ecriture").hide("slow");
        var pswrd = $("#motDepasse");
        var confpswrd = $("#confmotDepasse");
        $(confpswrd).on("input",function(){
            $("#ecriture").show("slow");
           setInterval(() => {
            if (pswrd.val() != confpswrd.val()) {
                $("#ecriture").text("Mot de passe non identique");
                $("#accepte").fadeOut("slow").val("non");
            }else{
                $("#ecriture").text("Mot de passe  identique");
                $("#accepte").fadeIn("slow").val("oui");
                $("#label").fadeIn("slow");
            }
           }, 10); 
        }),
        $(pswrd).on("input",function(){
            $("#ecriture").show("slow");
           setInterval(() => {
               if (confpswrd.val().length > 0) {
                if (pswrd.val() != confpswrd.val()) {
                    $("#ecriture").text("Mot de passe non identique");
                    $("#accepte").fadeOut("slow").val("non");
                }else{
                    $("#ecriture").text("Mot de passe  identique");
                    $("#accepte").fadeIn("slow").val("oui");
                    $("#label").fadeIn("slow");
                }
            }
               }, 10);
        }),
        $("#accepte").click(function (params) {
            $("#ecriture").hide("slow");
        })
        
    }
)