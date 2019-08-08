<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Literary-Mutilator (Javascript Challenge)</title>
		<link rel="stylesheet" href="style.css"/>


		<!-- Assignment at this link: https://bootcamp-coders.cnm.edu/class-materials/javascript/events/assignment.php -->

	</head>
	<body>
		<h2>Literary Mutilator - Javascript Challenge - Marsha Battee</h2>
		<div>
			<h3>This section
				<mark>highlights</mark>
				:
			</h3>
			<ul>
				<li>An optional HTML form</li>
				<li>2 options from Tier I (changing font and text color)</li>
				<li>1 option from Tier II (highlighting 1 word)</li>
			</ul>
		</div>

		<div>
			<form action="#" method="post">
				<div>
					<label for="name" id="color">Name:</label>
					<input type="text" id="name" name="user_name">
				</div>
				<div>
					<label for="mail">E-mail:</label>
					<input type="email" id="mail" name="user_mail">
				</div>
				<div>
					<label for="msg" id="font">Message:</label>
					<textarea id="msg" name="user_message"></textarea>
				</div>
				<div class="button">
					<button type="submit">Send your message</button>
					<button type="button" onclick="changeFont()">Change font of "message"</button>
					<button type="button" onclick="changeColor()">Change color of "name"</button>
				</div>
			</form>
		</div>

		<div>
			<h3>This section highlights: </h3>
			<ul>
				<li>1 option from Tier III (drag and drop image)</li>
			</ul>
			<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
				<img src="headshot.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="200" height="200"
					  alt="photo">
			</div>
			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
		</div>

		<script src="script.js"></script>
	</body>
</html>