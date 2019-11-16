

function dategenerator(a,b){
    if(a==""){
        var dd=new Date().getDate();
        var mm=new Date().getMonth()+1;
        var yyyy=new Date().getFullYear();
    }
    else{
        var date = new Date(a);
        date.setDate(date.getDate() + b);
        var dd=date.getDate();
        var mm=date.getMonth()+1;
        var yyyy=date.getFullYear();
    }
    var str_dd=dd.toString();
    var str_mm=mm.toString();
    var str_yyyy=yyyy.toString();
    if(str_dd.length==1){
        str_dd="0"+str_dd;
    }
    if(str_mm.length==1){
        str_mm="0"+str_mm;
    }
    var generated_date=str_yyyy + "-" + str_mm + "-" + str_dd;
    return generated_date;
}
document.getElementById("setTodaysDate1").value = '';
current_date=dategenerator("",0);
max_date=dategenerator(current_date,90);
document.getElementsByName("setTodaysDate1")[0].setAttribute('min', current_date);
document.getElementsByName("setTodaysDate1")[0].setAttribute('max', max_date);
document.getElementById("setTodaysDate2").disabled = true;

function setdate(){
    document.getElementById("setTodaysDate2").value = '';
    var range1=document.getElementById("setTodaysDate1").value;
    var range1_dd=range1.substr(8,2); var range1_mm=range1.substr(5,2); var range1_yyyy=range1.substr(0,4);
    var range1_date=range1_yyyy + "-" + range1_mm + "-" + range1_dd;
    var next_date=dategenerator(range1_date,1);
    document.getElementsByName("setTodaysDate2")[0].setAttribute('min',next_date);
    document.getElementsByName("setTodaysDate2")[0].setAttribute('max', max_date);
    document.getElementById("setTodaysDate2").disabled = false;
}
function validate(){
    if(document.getElementById("setTodaysDate1").value==""){
        alert("Please select range1");
        return false;
    }
}