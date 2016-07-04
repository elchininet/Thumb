<?php

	include_once('classes/Thumb.php');

?>

<!DOCTYPE html">
<html>
	<head>
		
		<title>PHP Thumb Example</title>
		<meta charset="UTF-8" />
		<link type="text/css" rel="stylesheet" href="styles/thumbs.css">
		<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

	</head>

	<body>

		<div class="thumb-container">

			<div class="original">

				<img src="images/image.jpg" width="386" height="525" />

			</div>

			<div class="reduced">

				<div class="block block1">					

					<div class="image">

						<?php

							$thumb = new Thumb();
							$thumb->loadImage('images/image.jpg');
							$thumb->resize(100, 'width');

						?>

						<img src="<? echo $thumb->show(false, true); ?>" />

					</div>

					<div class="code">

<pre class="prettyprint">
$thumb = new Thumb();
$thumb->loadImage('images/image.jpg');
$thumb->resize(100, 'width');
</pre>

					</div>

				</div>

				<div class="block block2">					

					<div class="image">

						<?php

							$thumb = new Thumb();
							$thumb->loadImage('images/image.jpg');
							$thumb->crop(150, 150, 'center');

						?>

						<img src="<? echo $thumb->show(false, true); ?>" />

					</div>

					<div class="code">

<pre class="prettyprint">
$thumb = new Thumb();
$thumb->loadImage('images/image.jpg');
$thumb->crop(150, 150, 'center');
</pre>
					</div>

				</div>


				<div class="block block3">					

					<div class="image">

						<?php

							$thumb = new Thumb();
							$thumb->loadImage('images/image.jpg');
							$thumb->crop(200, 215, 'top');

						?>

						<img src="<? echo $thumb->show(false, true); ?>" />

					</div>

					<div class="code">

<pre class="prettyprint">
$thumb = new Thumb();
$thumb->loadImage('images/image.jpg');
$thumb->crop(200, 215, 'top');
</pre>
					</div>

				</div>

			</div>

		</div>

	</body>
</html>