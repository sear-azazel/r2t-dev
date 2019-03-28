<!DOCTYPE html>
<html>
<head>
	<title>Application A page.</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<p>
	<?php
		if (isset($_SERVER['HTTP_REFERER'])) {
			$x = htmlspecialchars($_SERVER['HTTP_REFERER']);
			echo "あなたは $x のリンクをたどって来ましたね";
		} else {
			echo "あなたはリンクをたどらずにこのページに来ましたね";
		}
	?>
	</p>
</body>
</html>
