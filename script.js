//window.onload = function() {

function changeColor() {
	document.getElementById("color").style.color = "magenta";
}

function changeFont() {
	document.getElementById("font").style.fontFamily = "Arial Black";

}

var x = 0;
function scroll() {
	document.getElementById("box").innerHTML = x += 1;
}


//};