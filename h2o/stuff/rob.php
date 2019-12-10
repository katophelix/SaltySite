
<!DOCTYPE html>
<html>
<head>
	<title>Live From Calibogue</title>
	<meta name="generator" content="BBEdit 9.6" />
	
	
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="REFRESH" CONTENT="60;URL=http://www.saltydog.com/h2o/index.php">
    
    
    
    
</head>


<body bgcolor="#CCFFFF">




<div id="wind-speed" data="use-for-display" style="display:none;"></div>
<div id="table" style="display:none;"></div>
<script   src="https://code.jquery.com/jquery-1.12.4.min.js"   integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="   crossorigin="anonymous"></script>
<script>
jQuery(document).ready(function($){
	$.ajax({
		url:'data.php',
		success: function(d){
		$('#wind-speed').text(d);
		}
	})
})
</script>


</body>
</html>
