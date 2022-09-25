


function aller(params) {
    $("#notif").load("../bdd/bddinscription/bddclient/selectioncmd.php").css("color","white");
        $("#list").load("../bdd/bddAdmin/partition.php");
        $("#list1").load("../bdd/bddAdmin/partition1.php");
        $("#list2").load("../bdd/bddAdmin/partition2.php");
        $("#list3").load("../bdd/bddAdmin/partition3.php");
}
setInterval("aller()", 1000);