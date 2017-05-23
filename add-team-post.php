<?php
	session_start();
	//print_r($_POST);
	$user_id = (int)$_SESSION['user_id'];
	$comp_id = (int)$_SESSION['CompetitionId'];

	if (isset($_POST['Opener1']))
	{
		$team_name = $_POST['team_name'];
		$bat1 =(int) explode("_",$_POST['Opener1'][0]);
		$bat1Api =(int) explode("_",$_POST['Opener1'])[1];

		$bat2 = (int) explode("_", $_POST['Opener2'])[0];
		$bat2Api = (int) explode("_", $_POST['Opener2'])[1];

		$bat3 = (int) explode("_", $_POST['Opener3'])[0];
		$bat3Api = (int) explode("_", $_POST['Opener3'])[1];

		$wk = (int) explode("_", $_POST['wk'])[0];
		$wkApi = (int) explode("_", $_POST['wk'])[1];
		
		$bowl1 = (int) explode("_", $_POST['bowler1'])[0];
		$bowl1Api = (int) explode("_", $_POST['bowler1'])[1];

		$bowl2 = (int) explode("_", $_POST['bowler2'])[0];
		$bowl2Api = (int) explode("_", $_POST['bowler2'])[1];

		$bowl3 = (int) explode("_", $_POST['bowler3'])[0];
		$bowl3Api = (int) explode("_", $_POST['bowler3'])[1];

		$mix1 = (int) explode("_", $_POST['allr1'])[0];
		$mix1Api = (int) explode("_", $_POST['allr1'])[1];

		$mix2 = (int) explode("_", $_POST['allr2'])[0];
		$mix2Api = (int) explode("_", $_POST['allr2'])[1];

		$mix3 = (int) explode("_", $_POST['allr3'])[0];
		$mix3Api = (int) explode("_", $_POST['allr3'])[1];

		$mix4 = (int) explode("_", $_POST['allr3'])[0];
		$mix4Api = (int) explode("_", $_POST['allr3'])[1];
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

	    $sql = "INSERT INTO User_Player(user_id, p_id, team_id, p_api_id) 
	    VALUES ('" . $user_id ."','". $bat1 ."','". $team_id ."','". $bat1Api ."'), ('" . $user_id ."','". $bat2 ."','". $team_id ."','". $bat2Api ."'),('" . $user_id ."','". $bat3 ."','". $team_id  ."','". $bat3Api ."' ),('" . $user_id ."','". $wk ."','". $team_id ."','". $wkApi ."' ),('" . $user_id ."','". $bowl1 ."','". $team_id ."','". $bowl1Api ."' ),('" . $user_id ."','". $bowl2 ."','". $team_id ."','". $bowl2Api ."' ),('" . $user_id ."','". $bowl3 ."','". $team_id ."','". $bowl3Api ."' ),('" . $user_id ."','". $mix1 ."','". $team_id ."','". $mix1Api ."' ),('" . $user_id ."','". $mix2 ."','". $team_id ."','". $mix2Api ."' ),('" . $user_id ."','". $mix3 ."','". $team_id ."','". $mix3Api ."' ),('" . $user_id ."','". $mix4 ."','". $team_id ."','". $mix4Api ."')";
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