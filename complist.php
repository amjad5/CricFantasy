<?php

	$reponse;
	$options = "";
    // Where $db is a instance of PDO
    $connection = mysql_connect("localhost", "root", "");

	// Selecting Database
	$db = mysql_select_db("Fantasy", $connection);

	// SQL query to fetch information of registerd competitions.
	$query = mysql_query("select * from Competition", $connection);

	while($row = mysql_fetch_assoc($query))
	{
		$options .= '<option value="'. $row['comp_id'] .'">'. $row['comp_name'] .'</option>';
	}

	$response = array(
	        'success' => TRUE,
	        'options' => $options
	    );

	header('Content-Type: application/json');
	echo json_encode($response);
	mysql_close($connection); // Closing Connection
?>