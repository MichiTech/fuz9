<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
	<head>
		<title>
			Hi User
		</title>
	</head>
	<body>
		<?php
		
		$userName = filter_input(INPUT_GET, "userName");
		$action = filter_input(INPUT_GET, "action");
		$userPlans = filter_input(INPUT_GET, "userPlans");
		
			print "<h3>Hi $userName, how are you doing this $action? 
Hope you have a wonderful time $userPlans. </h3> "; 
		?>
	</body>
</html>




 