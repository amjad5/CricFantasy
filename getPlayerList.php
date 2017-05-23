<?php
	$response;

    $connection = mysql_connect("localhost", "root", "");

	// Selecting Database
	$db = mysql_select_db("Fantasy", $connection);

	// SQL query to fetch information of registerd competitions.

	$teams = mysql_query('select * from Player', $connection);
	
	$json = array();

	while($row = mysql_fetch_assoc($teams))
	{
		$json['p_id'] = $row['p_id'] . "_" . $row['p_api_id'];;
		$json['p_name'] = $row['p_name'];
		$json['p_spec'] = $row['p_spec'];
		$json['p_team'] = $row['p_team'];
		$data[] = json_encode($json);
	}
	
	$newdata = json_encode($data);

	$response = array(
		'success' => TRUE,
        'options' => $newdata
    );

	header('Content-Type: application/json');
	echo json_encode($response);
	mysql_close($connection); // Closing Connection
?>