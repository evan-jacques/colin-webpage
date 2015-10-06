<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
?>

<!DOCTYPE html>
<html>

	<head>
	  <title>Colin Jacques - Bio</title>
	  <link href="site.css" rel="stylesheet">
	</head>

	<nav id="nav01"></nav>

	<body>
		<div class="slideshow">
			<span class="helper"></span>
			<img class="resize_fit_center" src="https://i.imgur.com/SmO3nnQ.jpg" name="slideshow">
		</div>
		<div id="scroll">
			<table>
				<tr class="navigate">
					<td align="left"><a href="" onclick="return change_image(-1)"><</td>
					<td align="right"><a href="" onclick="return change_image(1)">></a></td>
				</tr>
			</table>
		</div>
		<div class="main">
			<?=$miniblog_posts?>
		</div>


	</body>
	<script src="script.js"></script>
</html>