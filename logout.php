<?php
	session_start();

	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: signup.php"); // Redirecting To Home Page
		exit();
	}
?>