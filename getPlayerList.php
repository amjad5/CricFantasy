<?php
	$response;

    $connection = mysql_connect("localhost", "root", "");

	// Selecting Database
	$db = mysql_select_db("Fantasy", $connection);

	// SQL query to fetch information of registerd competitions.

	$teams = mysql_query('select * from Player', $connection);
	/*
	$gujrat = mysql_query("select * from Player where p_team=Gujarat Lions", $connection);
	$delhi = mysql_query("select * from Player where p_team=Delhi Daredevils", $connection);
	$hyder = mysql_query("select * from Player where p_team=Sunrisers Hyderabad", $connection);
	$bang = mysql_query("select * from Player where p_team=Royal Challengers Bangalore", $connection);
	$punjab = mysql_query("select * from Player where p_team=Kings XI Punjab", $connection);
	$kolkata = mysql_query("select * from Player where p_team=Kolkata Knight Riders", $connection);
	$mumbai = mysql_query("select * from Player where p_team=Mumbai Indians", $connection);
	$pune = mysql_query("select * from Player where p_team=Rising Pune Supergiants", $connection);
	*/

	$json = array();

	while($row = mysql_fetch_assoc($teams))
	{
		$json['p_id'] = $row['p_id'];
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