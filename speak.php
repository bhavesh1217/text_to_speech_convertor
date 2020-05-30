<!DOCTYPE html>
<html>
<head>
	<title>Text to Speech Convertor</title>
</head>
<body>
<?php
if(isset($_POST['text'])){
	
    echo "<br>";
	$text=$_POST['text'];
	$text=htmlspecialchars($text);
	$text=rawurlencode($text);
	$html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$text.'&tl=en-IN');
	$speak="<audio controls='controls' autoplay><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
	echo 	$speak;
	}
?>
</body>
</html>
