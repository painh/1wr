<?php

$time = time();
echo <<< EOF

<!DOCTYPE html>
<html>
	<head profile="http://www.w3.org/2005/10/profile">
	<link rel="icon" 
	      type="image/png" 
		        href="img/57x57.png">
		<title>1 way rpg</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<link rel="apple-touch-icon-precomposed" href="img/57x57.png"/>
		<link href="style.css" rel="stylesheet" type="text/css"/>
	</head>

	<body bgcolor="#000000">
		<div id="divInstallGuide" style='display:none;text-align:center'>
			사파리에서는 사운드 재생을 할 수 없습니다.</br></br> 
			<img src='img/webapp.png'/>을 눌러 설치하여 주세요.</br></br> 
			아이패드는 상단에, 아이폰은 하단에서 찾을 수 있습니다.  
		</div>
		<div id="game">
		</div>
		<div>
		thanks : http://www.freesfx.co.uk/
		</div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="entry.js?{$time}"></script>
	</body>
</html>
EOF;
