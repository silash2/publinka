$("#chargement").fadeOut(1000);
         
var lecture = 0
var nombret = 0;
setInterval(
function letsgose(params) {
    ;
    lecture++;
    nombret++;
    if (lecture == 1) {
        
        $("#chg").css("border-left-color","blue");
        $("#chg").css("border-top-color","red");
    }
    else if(lecture == 2){
        $("#chg").css("border-bottom-color","blue");
        $("#chg").css("border-left-color","red");
    }
    else if(lecture == 3){
        
        $("#chg").css("border-right-color","blue");
        $("#chg").css("border-bottom-color","red");
    }
    else if(lecture == 4){
        $("#chg").css("border-top-color","blue"); 
        $("#chg").css("border-right-color","red");
        lecture=lecture-4;
    }
}, 100);