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
	</table>
	
	<?php
		#変数を使ってみようか
		echo 'ｼﾝｸﾞﾙｸｫｰﾃｰｼｮﾝとﾀﾞﾌﾞﾙｸｫｰﾃｰｼｮﾝに注意が必要って感じなのね';
		echo '<br>';
					
		$name = "岩満";
					
		echo "私の名前は $name です(echoで表示)";
		echo '<br>';
		echo 'よろしくお願いします';
		echo '<br>';
		echo "ってか常にﾀﾞﾌﾞﾙｸｫｰﾃｰｼｮﾝ使っとけば問題ないんじゃない説";
					
	?>	
</body>
</html>
