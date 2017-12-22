

function create_car()
{
var car = {type:"Fiat", model:"500", color:"white"};
 document.getElementById("demo").innerHTML = car.type + " and the color is: " + car.color;

}

create_car();


function locate()
{
var str = "Please relocate where 'locate' occurs!";
var pos = str.indexOf("locate");
document.getElementById("demo3").innerHTML = pos;
}

locate();

function replacestring() {
    var str = document.getElementById("demo4").innerHTML; 
    var txt = str.replace("Microsoft","Linux");
    document.getElementById("demo4").innerHTML = txt;
}
