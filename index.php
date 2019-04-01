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
				です。(ページを表示したときのサーバーの時間っす)
				</p>
				
				<p id="Clock1" style="display: inline"></p>
				
				
				<script type="text/javascript">
				setInterval('showClock1()',1000);
				function showClock1() {
				var DWs = new Array('Sun.','Mon.','Tue.','Wed.','Thu.','Fri.','Sat.');
				var Now = new Date();
				var YY = Now.getYear();
				if (YY < 2000) { YY += 1900; }
				var MM = set0( Now.getMonth() + 1 );
				var DD = set0( Now.getDate() );
				var DW = DWs[ Now.getDay() ];
				var hh = set0( Now.getHours() );
				var mm = set0( Now.getMinutes() );
				var ss = set0( Now.getSeconds() );
				var RTime1 = ' ' + YY + '.' + MM + '.' + DD + ' ' + DW + ' ' + hh + ':' + mm + ':' + ss + ' ';
				document.getElementById("Clock1").innerHTML = RTime1;
				}
				
				function set0(num) {
				var ret;
				if( num < 10 ) { ret = "0" + num; }
				else { ret = num; }
				return ret;
				}
				</script>
				
				
				
			</td>
			<td><a href="apps/app-a/">Application A page.</a></td>
		</tr>
	</table>
	
	
	<table>
		<tr>
			<td>
				<?php
					#----- 変数を使ってみようか -----
					echo '--- 名前の部分だけ変数を使って表示 ---';
					echo '<br>';
					
					#初期化
					$name = "";
					$name = "岩満";
								
					echo "私の名前は $name です(echoで表示)";
					echo '<br>';
					echo 'よろしくお願いします';
					echo '<br>';
					echo 'ｼﾝｸﾞﾙｸｫｰﾃｰｼｮﾝとﾀﾞﾌﾞﾙｸｫｰﾃｰｼｮﾝに注意が必要って感じなのね';
					echo '<br>';
					echo "ってか常にﾀﾞﾌﾞﾙｸｫｰﾃｰｼｮﾝ使っとけば問題ないんじゃない説";
					echo '<br>';
					
					
					#----- 演算子 -----
					echo '--- 演算子 ---';
					echo '<br>';
					
					#初期化
					$int = 0;
					$int = 123 + 123;
					
					echo "123 + 123 = $int\n";
					echo '<br>';
					echo "変数と改行コードの間には半角スペースいらないのね…きになる";
					echo '<br>';
					
					#----- if文 while文 -----
					echo '--- if文 while文を使って ---';
					echo '<br>';
					echo "また今度";
					echo '<br>';
					
					
					
				?>			
			</td>
		</tr>
	</table>
</body>
</html>
