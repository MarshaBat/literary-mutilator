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


function allowDrop(ev) {
	ev.preventDefault();
}

function drag(ev) {
	ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
	ev.preventDefault();
	var data = ev.dataTransfer.getData("text");
	ev.target.appendChild(document.getElementById(data));
}


//};