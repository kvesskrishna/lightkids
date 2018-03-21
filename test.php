<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<img src="images/innerpics/1.JPG" id="myimg">
	<button id="hideimg">click</button>
<script src="assets/js/vendor/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
	$('#hideimg').click(function(){
		$('#myimg').hide();
	})
</script>
</body>
</html>