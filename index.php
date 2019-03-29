<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "php学習するよ"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
		</tr>
		<tr>
			<td>
				<p>現在
				<?php
					date_default_timezone_set('Asia/Tokyo');
					echo date("Y年m月d日H時i分s秒");
				?>
				です。</p>
			</td>
			<td><a href="apps/app-a/">Application A page.</a></td>
		</tr>
		<tr>
			<td>
				<?php
					#変数を使ってみようか
					echo 'シングルクォーテーションとダブルクォーテーションに注意が必要って感じなのね';
					
					$name = "岩満";
					
					echo "私の名前は$nameです(echoで表示)";
					echo '<br>';
					echo 'よろしくお願いします';
					echo '<br>';
					echo "ってか常にダブルクォーテーション使っとけば問題ないんじゃない説";
					
				?>
			</td>
		</tr>
	</table>
</body>
</html>
