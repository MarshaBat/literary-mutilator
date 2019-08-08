<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Literary-Mutilator (Javascript Challenge)</title>
		<script src="script.js"></script>
		<style>
			div {
				border: 1px solid black;
				width: 500px;
				height: 100px;
				overflow: scroll;
			}
		</style>

		<!-- Assignment at this link: https://bootcamp-coders.cnm.edu/class-materials/javascript/events/assignment.php -->

	</head>
	<body>
		<h2>Lorem Ipsum</h2>
		<p class="p1" id="color"><mark>Lorem</mark> ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sapien condimentum, condimentum magna at,
			aliquam dolor. Cras consectetur nec sem quis pulvinar. Etiam bibendum dapibus lectus, accumsan dignissim arcu
			aliquet ac. In hac habitasse platea dictumst. Sed scelerisque magna orci, eget suscipit nunc bibendum ut.
			Vivamus eu eros fringilla, suscipit lorem at, venenatis sapien. Fusce at volutpat magna. Curabitur elementum
			nisi posuere lectus pretium fringilla. Nam viverra ultricies tempus. Cras vestibulum malesuada lacus, in
			ullamcorper quam dictum at.</p>
		<button type="button" onclick="changeColor()">Set text color</button>

		<p class="p2" id="font"><mark>Fusce luctus scelerisque nulla in gravida. Pellentesque eget eros at nibh mattis faucibus. Nulla facilisi.
			Vivamus auctor pretium nisi ac lacinia. In hac habitasse platea dictumst. Quisque vitae mattis tortor. Morbi in
			ullamcorper ante. Aenean tincidunt congue mattis. Nam a luctus mi, in placerat dolor. Maecenas lacinia est eu
			est mollis convallis. Mauris mi risus, tincidunt eget odio eu, sagittis luctus est.</p></mark>
		<button type="button" onclick="changeFont()">Set font color</button>

	<div onscroll="scroll()" id="box">
		<p class="p3">Vivamus luctus nisi consequat leo gravida, in vehicula libero feugiat. Duis arcu ligula, convallis vitae ex
			sed, pulvinar accumsan sapien. Etiam facilisis diam nec nulla dapibus sollicitudin. Vestibulum at libero eu
			nisl aliquam lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			Maecenas a tincidunt augue. Pellentesque euismod consequat orci et lobortis. Sed aliquet pulvinar sapien, nec
			tempus nunc egestas quis. Quisque finibus at lectus sit amet gravida.</p>
	</div>

		<p class="p4">Vivamus luctus nisi consequat leo gravida, in vehicula libero feugiat. Duis arcu ligula, convallis vitae ex
			sed, pulvinar accumsan sapien. Etiam facilisis diam nec nulla dapibus sollicitudin. Vestibulum at libero eu
			nisl aliquam lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			Maecenas a tincidunt augue. Pellentesque euismod consequat orci et lobortis. Sed aliquet pulvinar sapien, nec
			tempus nunc egestas quis. Quisque finibus at lectus sit amet gravida.</p>

		<p class="p5">Vivamus luctus nisi consequat leo gravida, in vehicula libero feugiat. Duis arcu ligula, convallis vitae ex
			sed, pulvinar accumsan sapien. Etiam facilisis diam nec nulla dapibus sollicitudin. Vestibulum at libero eu
			nisl aliquam lacinia. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
			Maecenas a tincidunt augue. Pellentesque euismod consequat orci et lobortis. Sed aliquet pulvinar sapien, nec
			tempus nunc egestas quis. Quisque finibus at lectus sit amet gravida.</p>




	</body>
</html>