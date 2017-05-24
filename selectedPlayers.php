<?php

	session_start();
	$user_id = intval($_SESSION['user_id']);
	$reponse;
	$options = "";


    // Where $db is a instance of PDO
    $connection = mysql_connect("localhost", "root", "");

	// Selecting Database
	$db = mysql_select_db("Fantasy", $connection);

	// SQL query to fetch information of registerd competitions.

	$user_players = mysql_query("SELECT DISTINCT * FROM User_Player where user_id=$user_id", $connection);

	while ($row = mysql_fetch_assoc($user_players)) {
		//echo ' id ' . $row['p_id'] . ' u_id ' . $user_id;
		$plrId = intval($row['p_id']);
		$plrApiId = intval($row['p_api_id']);

		$player = mysql_query("SELECT DISTINCT * FROM Player where p_id=$plrId limit 1", $connection);
		$options .= '<tr>';
		while ($plrRow = mysql_fetch_assoc($player)){
			//echo ' name ' . $plrRow['p_name'];
			$options .= '<td>'.$plrRow['p_name'].'</td>';
		}

		$points = mysql_query("SELECT DISTINCT * FROM Player_Points where p_api_id=$plrApiId limit 1", $connection);

		while ($pointRow = mysql_fetch_assoc($points)){
				$options .= '<td>'. $pointRow['points'].'</td> ';
			}

			$options .= '</tr>';
		}

//	$options .= '<tr> <td>Total</td> <td>'. $grandTotal .'</td></tr>';	

	$response = array(
		'success' => TRUE,
		   'options' => $options
	    );

	header('Content-Type: application/json');
	echo json_encode($response);
	mysql_close($connection); // Closing Connection

?>