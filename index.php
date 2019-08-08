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
			<h3>This HTML Form <mark>highlights</mark>:</h3>
				<ul>
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
				<img src="headshot.jpg" draggable="true" ondragstart="drag(event)" id="drag1" width="200" height="200" alt="photo">
			</div>
			<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
		</div>



		<h2>Lorem Ipsum</h2>
		<p class="p1" id="color">
			<mark>Lorem</mark>
			ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sapien condimentum, condimentum magna at,
			aliquam dolor. Cras consectetur nec sem quis pulvinar. Etiam bibendum dapibus lectus, accumsan dignissim arcu
			aliquet ac. In hac habitasse platea dictumst. Sed scelerisque magna orci, eget suscipit nunc bibendum ut.
			Vivamus eu eros fringilla, suscipit lorem at, venenatis sapien. Fusce at volutpat magna. Curabitur elementum
			nisi posuere lectus pretium fringilla. Nam viverra ultricies tempus. Cras vestibulum malesuada lacus, in
			ullamcorper quam dictum at.
		</p>
		<button type="button" onclick="changeColor()">Set text color</button>

		<p class="p2" id="font">
			<mark>Fusce luctus scelerisque nulla in gravida. Pellentesque eget eros at nibh mattis faucibus. Nulla
				facilisi. Vivamus auctor pretium nisi ac lacinia. In hac habitasse platea dictumst. Quisque vitae mattis
				tortor. Morbiin ullamcorper ante. Aenean tincidunt congue mattis. Nam a luctus mi, in placerat dolor.
				Maecenas lacinia esteu est mollis convallis. Mauris mi risus, tincidunt eget odio eu, sagittis luctus est.
			</mark>
		</p>
		<button type="button" onclick="changeFont()">Set font color</button>

		<section onscroll="scroll()" id="box">
			<p class="p3">Vivamus luctus nisi consequat leo gravida, in vehicula libero feugiat. Duis arcu ligula,
				convallis vitae ex sed, pulvinar accumsan sapien. Etiam facilisis diam nec nulla dapibus sollicitudin.
				Vestibulum at libero eunisl aliquam lacinia. Orci varius natoque penatibus et magnis dis parturient montes,
				nascetur ridiculus mus. Maecenas a tincidunt augue. Pellentesque euismod consequat orci et lobortis. Sed
				aliquet pulvinar sapien, nec tempus nunc egestas quis. Quisque finibus at lectus sit amet gravida.</p>
		</section>





		<script src="script.js"></script>
	</body>
</html>