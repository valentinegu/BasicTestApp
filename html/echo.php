<!DOCTYPE html>
<html>
	<head>
		<title>Web Info</title>
	</head>
	<body>
		<img src="./logo.jpg" width="150" height="40">
		<br><br>
		<?php 
			echo ( "Your Messege was: <br><br><textarea style='width:400px; height:400px;' > " . $_POST['Msg'] ."</textarea><br>\n"); 
		?>
		<a href="/index.html"> Go Back! </a>
	</body>
</html>
