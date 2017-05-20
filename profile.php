<?php
include('login.php');
	if(!isset($_SESSION['login_user']) && empty($_SESSION['CompetitionId'])){
		header("Location: signup.php"); // Redirecting To SignUp Page
		exit();
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Your Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="profile">
			<b id="welcome">Welcome : <i><?php echo $_SESSION['login_user']; ?></i></b>
			<b id="logout"><a href="logout.php">Log Out</a></b>
		</div>
	</body>
</html>