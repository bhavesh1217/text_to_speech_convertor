<html>
<head>
<title>TEXT TO SPEECH CONVERTOR APPLICATION</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<div class = "container"">
<form method="post">
<br>
<div class= "panel panel-default">
<div class="panel-heading">TEXT TO SPEECH CONVERTOR APPLICATION</div>
</div>
	<textarea rows="" class="form-control" id="text" name="text" cols=""></textarea>	<br>
	<button type="button" class= "btn btn-success btn-lg " name="submit"  onclick="play()"/>Play</button>

<br><br>

<div class= "panel panel-default">
<div class = "panel-heading"><h4>Type in textarea and then hit the button name play and audio player will displayer here :</h4> 
<div id="speak"></div>
</div>
</div>
	
	
	</form>
	
		
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
function play(){
	var text=jQuery('#text').val()
	jQuery.ajax({
		url:'speak.php',
		type:'post',
		data:'text='+text,
		success:function(result){
			jQuery('#speak').html(result);
		}
	});
}
</script>
