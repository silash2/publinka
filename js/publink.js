$(document).ready(
    function (params) {
        $("#noms").hide();
        $("#menu").hide();
        $("#select").hide("slow");
        $("#list").hide("slow");
        $("#list1").hide("slow");
        $("#list2").hide("slow");
        $("#list3").hide("slow");
        $("#list2").hide("slow");
        $("#list3").hide("slow");
        $("#class").hide().css("color","white");
        $("#class1").hide().css("color","white");
        $("#class2").hide().css("color","white");
        $("#class3").hide().css("color","white");
        $("#class4").hide().css("color","white");
        $("#pub").on("click",function (params) {
            $("#link").fadeIn("slow").text("Link@").css("color","silver");
            $("#menu").fadeIn("slow").addClass("me col-2 navbar-brand");
            $("#class").fadeIn("slow").css("color","white");
            $("#class1").fadeIn("slow").css("color","white");
            $("#class2").fadeIn("slow").css("color","white");
            $("#class3").fadeIn("slow").css("color","white");
            $("#class4").fadeIn("slow").css("color","white");
            $("#select").hide("slow");
            $("#list").hide("slow");
            $("#list1").hide("slow");
            $("#list2").hide("slow");
            $("#list3").hide("slow");
            $("#link").hide("slow").text();
            $("#fermer2").text("X").css("background-color","red");
            $("#fermer1").text("").css("background-color","transparent");
        });
    /*$("body").on("mouseout",function (params) {
        $("#link").hide("slow").text();
        $("#menu").hide("slow");
        $("#class").hide("slow");
        $("#contenue").removeClass(" col-2");
        $("#list").hide("slow");
        $("#list1").hide("slow");
        $("#list2").hide("slow");
        $("#list3").hide("slow");
    });*/
        $("#nom").text($("#noms").val());
        $("#commande").click(function (params) {
            $("#select").fadeIn("slow");
            $("#list").hide("slow");
            $("#list1").hide("slow");
            $("#list2").hide("slow");
            $("#list3").hide("slow");
            $("#link").hide("slow").text();
            $("#class").fadeOut("slow");
            $("#class1").fadeOut("slow");
            $("#class4").fadeOut("slow");
            $("#menu").hide("slow");
            $("#fermer").text("X").css("background-color","red");
            $("#fermer1").text("").css("background-color","transparent");
        });
        $("#reception").click(function (params) {
            $("#select").hide("slow");
            $("#list").fadeIn("slow");
            $("#list1").fadeIn("slow");
            $("#list2").fadeIn("slow");
            $("#list3").fadeIn("slow");
            $("#link").hide("slow").text();
            $("#class").fadeOut("slow");
            $("#class1").fadeOut("slow");
            $("#class4").fadeOut("slow");
            $("#menu").hide("slow");
            $("#fermer1").text("X").css("background-color","red");
            
        });
        $("#fermer").click(function (params) {
            $("#select").fadeOut("slow");
            $("#fermer").text("").css("background-color","transparent");
        });
        $("#fermer1").click(function (params) {
            $("#list").fadeOut("slow");
            $("#list1").fadeOut("slow");
            $("#list2").fadeOut("slow");
            $("#list3").fadeOut("slow");
            $("#fermer1").text("").css("background-color","transparent");
        });
        $("#fermer2").click(function (params) {
            $("#class").fadeOut("slow");
            $("#class1").fadeOut("slow");
            $("#class2").fadeOut("slow");
            $("#class4").fadeOut("slow");
            $("#fermer2").text("").css("background-color","transparent");
            $("#menu").hide("slow");
        })
}
)