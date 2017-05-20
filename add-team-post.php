<?php
	session_start();
	//print_r($_POST);
	$user_id = (int)$_SESSION['user_id'];
	$comp_id = (int)$_SESSION['CompetitionId'];

	if (isset($_POST['Opener1']))
	{
		$team_name = $_POST['team_name'];
		$bat1 =(int) $_POST['Opener1'];
		$bat2 = (int) $_POST['Opener2'];
		$bat3 = (int) $_POST['Opener3'];
		$wk = (int) $_POST['wk'];
		$bowl1 = (int) $_POST['bowler1'];
		$bowl2 = (int) $_POST['bowler2'];
		$bowl3 = (int) $_POST['bowler3'];
		$mix1 = (int) $_POST['allr1'];
		$mix2 = (int) $_POST['allr2'];
		$mix3 = (int) $_POST['allr3'];
		$mix4 = (int) $_POST['allr3'];
	}

	$conn;
	try {
		$conn = new PDO("mysql:host=localhost;dbname=Fantasy", 'root', '');
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $team = "INSERT INTO User_Team(team_name, comp_id) 
	    VALUES ('" . $team_name ."','". $comp_id . "' )";
	    $stmt = $conn->prepare($team);
	    $stmt->execute();
	    $team_id = $conn->lastInsertId();

	    //$conn->exec($team);

	    $sql = "INSERT INTO User_Player(user_id, p_id, team_id) 
	    VALUES ('" . $user_id ."','". $bat1 ."','". $team_id . "' ), ('" . $user_id ."','". $bat2 ."' ,'". $team_id . "'),('" . $user_id ."','". $bat3 ."','". $team_id . "'),('" . $user_id ."','". $wk ."','". $team_id . "'),('" . $user_id ."','". $bowl1 ."','". $team_id . "'),('" . $user_id ."','". $bowl2 ."','". $team_id . "'),('" . $user_id ."','". $bowl3 ."','". $team_id . "'),('" . $user_id ."','". $mix1 ."','". $team_id . "'),('" . $user_id ."','". $mix2 ."','". $team_id . "' ),('" . $user_id ."','". $mix3 ."','". $team_id . "'),('" . $user_id ."','". $mix4 ."','". $team_id . "')";
	    // use exec() because no results are returned
	    $conn->exec($sql);

	    header("location: homepage.php"); // Redirecting To Other Page
	    exit;
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	finally{
		$conn->db = null;
	}
?>