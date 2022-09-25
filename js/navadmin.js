
    
    

    function notif(params) {
        $("#list").load("../bdd/partition.php");
        $("#list1").load("../bdd/partition1.php");
        $("#list2").load("../bdd/partition2.php");
        $("#list3").load("../bdd/partition3.php");
    }
setInterval(notif(),1);