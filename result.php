<?php
if (isset($_POST['Qradio1'])&&
   (isset($_POST['Qradio2'])&&
   (isset($_POST['Qradio3'])&&
   (isset($_POST['Qradio4'])&&
   (isset($_POST['Qradio5'])&&
   (isset($_POST['Qradio6'])&&
   (isset($_POST['Qradio7'])&&
   (isset($_POST['Qradio8'])&&
   (isset($_POST['Qradio9'])&&
   (isset($_POST['Qradio10']))))))))))){
		$array = array();
		array_push($array, $_POST['Qradio1']);
		array_push($array, $_POST['Qradio2']);
		array_push($array, $_POST['Qradio3']);
		array_push($array, $_POST['Qradio4']);
		array_push($array, $_POST['Qradio5']);
		array_push($array, $_POST['Qradio6']);
		array_push($array, $_POST['Qradio7']);
		array_push($array, $_POST['Qradio8']);
		array_push($array, $_POST['Qradio9']);
		array_push($array, $_POST['Qradio10']);

		$result = (count(array_keys($array, "positive")) / count($array)) * 100;
}
else {
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/poll/poll.php?error=1');
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ROE Assessment</title>
	<meta name="description" content="ROE Assessment">
	<meta name="author" content="Mojo Media Labs">
	<link href="stylesheets/reset.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="stylesheets/poll.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="javascripts/kinetic2d-v1.0.0.js" type="application/javascript"></script>


	<!--set the variable $result in PHP to result in JS-->
    <script>
	var result = <?php echo $result; ?>;
	</script>
	<script>
		var kin;
		var myRectangle;

		function Rectangle(x, y, width, height, borderWidth){
			this.x = x;
			this.y = y;
			this.width = width;
			this.height = height;
			this.borderWidth = borderWidth;
		}

		function updateStage(){
			var linearSpeed = 100; // pixels / second
			var linearDistEachFrame = linearSpeed *
			kin.getTimeInterval() /
			1000;

			var currentX = myRectangle.x;

			var maxX = kin.getCanvas().width - myRectangle.width - myRectangle.borderWidth / 2;

			//the result should be the $result
			var result = <?php echo $result ?>;

			var percent = result / 100;

			var endX = (kin.getCanvas().width * percent) - 3;

			if (endX > maxX) {
				endX = maxX;
			}


			if (currentX < endX) {
				var newX = currentX + linearDistEachFrame;

				myRectangle.x = newX;
			}
		}

		window.onload = function(){
			// instantiate new animation object
			kin = new Kinetic_2d("myCanvas");
			myRectangle = new Rectangle(0, 25, 3, 150, 3);

			// set drawStage method
			kin.setDrawStage(function(){
				updateStage();
				kin.clear();
				var context = kin.getContext();

				context.beginPath();
				context.rect(myRectangle.x, myRectangle.y, myRectangle.width, myRectangle.height);

				context.fillStyle = "#8ED6FF";
				context.fill();
				context.lineWidth = myRectangle.borderWidth;
				context.strokeStyle = "black";
				context.stroke();
			});

			kin.startAnimation();
		};
	</script>
</head>
<body>
	<div id="container" class="center-align">
		<h1>You scored a <?php echo $result ?>%</h1>
		<h2>
			<?php
				if ($result > 0 && $result <= 33)
					echo "You are in Class C";
				elseif ($result >33 && $result <= 66)
					echo "You are in Class B";
				else
					echo "You are in Class A";
			?>
		</h2>
		<canvas id="myCanvas" width="500" height="200" style="background: url('images/gauge.png');"></canvas>
		<p class="center-align"><img src="images/roe.png" /></p>
	</div>
</body>
</html>
