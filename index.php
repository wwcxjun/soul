<?php
$file = 'soul.json';
$soul = json_decode(file_get_contents($file), true);
$count = count($soul);
$rand = rand(0, $count);
$content = $soul[$rand]['content'];
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $content;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, user-scalable=no">
	<style type="text/css">
		.content{
			margin-top: 23%;
			font-size: 25px;
			text-align: center;
			padding-left: 35px;
			padding-right: 35px;
		}
		.footer{
			position: absolute;
			bottom: 60px;
			text-align: center;
			width: 100%;
		}
		#reload{
			background: #1aaf5d;
			border: none;
			color: #fff;
			padding-left: 15px;
			padding-right: 15px;
			padding-top: 10px;
			padding-bottom: 10px;
			border-radius: 35px;
			outline: none;
			cursor: pointer;
			transition: all 0.5s;
			box-shadow: 2px 2px 2px #999;
		}
		#reload:hover{
		    background: #218838;
		}
		.copyright{
			font-size: 12px;
			margin-top: 20px;
		}
		.copyright a{
			color: red;
		}
      
        @media only screen and (max-width: 800px) {
          	.content{
          		margin-top: 66%;
          	}
  		}

	</style>
</head>
<body>
	<p class="content"><?php echo $content;?></p>

	<div class="footer">
		<button id="reload">再 来 一 碗</button>
      	<p class="copyright">鸡汤数据：<a target="_blank" href="https://github.com/wwcxjun/soul">https://github.com/wwcxjun/soul</a></p>
	</div>
	
	<script type="text/javascript">
		onload = function(){
			document.getElementById('reload').onclick = function(){
				window.location.reload();
			}
		}
	</script>
</body>
</html>