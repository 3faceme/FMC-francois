
function toCelsius(f) {


document.getElementById("demo").innerHTML = "77 Farenheit is in Celcius: " + toCelsius(77);

    return (5/9) * (f-32);

}


function toCelsius2(f) {
    return (5/9) * (f-32);
}
document.getElementById("demo2").innerHTML = toCelsius;


document.getElementById("demo3").innerHTML =
"The temperature is " + toCelsius3(77) + " Celsius";

function toCelsius3(fahrenheit) {
    return (5/9) * (fahrenheit-32);
} 