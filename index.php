<?php $bios = file('bios.txt', FILE_IGNORE_NEW_LINES); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>Bio Me</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,900">
	</head>

	<body>
		<div class="row row-expanded">
			<div class="container">
				<h1>Got no Life</h1>
				<blockquote id="bio">Hit reload to generate a great new life for your bio.</blockquote>
				<button id="reload" class="reload">Reload</button>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<div class="share">
					<a href="https://twitter.com/home?status=http://katieball.me/no-life"><img src="images/twitter.svg" alt=""></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://katieball.me/no-life"><img src="images/facebook.svg" alt=""></a>
					<a href="https://plus.google.com/share?url=http://katieball.me/no-life"><img src="images/googleplus.svg" alt=""></a>
				</div>

				<p class="colophon">Revamped with ❤️ <a href="http://katieball.com/">Katie Ball</a>Forked from <a href="http://github/everybioever">every bio ever</a></p>
			</div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script>
			$(function() {
				function pickBio() {
					$('#bio').text(bios[Math.floor(Math.random() * bios.length)]);
				};

				pickBio();

				$('#reload').click(function() {
					pickBio();
				});

			});

			var bios = [<?php
				$counter = 1;

				foreach ($bios as $bio) {
					if ($counter != 1) echo ', ';

					echo '"' . $bio . '"';

					$counter++;
				}
			?>]
		</script>
	</body>
</html>
