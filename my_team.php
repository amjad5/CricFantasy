<?php

	session_start();
	$user_id = (int)$_SESSION['user_id'];
	$reponse;
	$options = "";


    // Where $db is a instance of PDO
    $connection = mysql_connect("localhost", "root", "");

	// Selecting Database
	$db = mysql_select_db("Fantasy", $connection);

	
	// SQL query to fetch information of registerd competitions.
	$query = mysql_query("SELECT DISTINCT * FROM `Player_Points` AS p LEFT JOIN `Player` AS u ON p.p_api_id = u.p_api_id", $connection);

	while($row = mysql_fetch_assoc($query))
	{
		$api_id = $row['p_api_id'];
		//echo $api_id;

		$user_players = mysql_query("SELECT * FROM `User_Player` where `p_api_id`='$api_id}' LIMIT 1", $connection);

		while ($row1 = mysql_fetch_assoc($user_players)) {
			$options .= '<tr> <td>'. $row['p_name'] .'</td> <td>'. $row['points'] .'</td></tr>';	
		}
	}

	$response = array(
		'success' => TRUE,
		   'options' => $options
	    );

	header('Content-Type: application/json');
	echo json_encode($response);
	mysql_close($connection); // Closing Connection

?>