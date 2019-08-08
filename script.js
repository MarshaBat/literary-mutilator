//This changes the color of the "name" text by clicking on the button in the form
function changeColor() {
	document.getElementById("color").style.color = "magenta";
}

//This changes the font of the "message" text by clicking on the button in the form
function changeFont() {
	document.getElementById("font").style.fontFamily = "Arial Black";
}

var x = 0;
function scroll() {
	document.getElementById("box").innerHTML = x += 1;
}

//This is the drag and drop image section
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
