<?php
	
	session_start();

	$id = $_POST['CompetitionId'];
	
	$_SESSION['CompetitionId'] = $id;
	print_r($_SESSION);
	header("location: add-team.php");
	exit();
?>