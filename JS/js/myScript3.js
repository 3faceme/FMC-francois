

function basicarray()
{
var cars = ["Saab","Volvo","BMW"];

document.getElementById("demo").innerHTML = cars[0];

}

basicarray();


function associative_array() {

 var person = {
 	firstName:"John", 
 	lastName:"Doe", 
 	age:50, 
 	eyeColor:"blue"};

document.getElementById("demo").innerHTML =
person.firstName + " is " + person.age + " years old.";

}

associative_array();

function null_undefined() {

document.getElementById("demo2").innerHTML = "<p>Undefined and null are equal in value but different in type:</p>" +
typeof undefined + "<br>" +
typeof null + "<br><br>" +
(null === undefined) + "<br>" +
(null == undefined);
}

null_undefined();

function object(){
document.getElementById("demo4").innerHTML = 
typeof {name:'john', age:34} + "<br>" +
typeof [1,2,3,4] + "<br>" +
typeof null + "<br>" +
typeof function myFunc(){};
}

object();

