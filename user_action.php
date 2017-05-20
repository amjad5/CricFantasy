<?php

	if (isset($_POST['fname']) )
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['user_username'];
		$gender = $_POST['gender'];
		$pass = $_POST['user_pass'];
		$group = (int) $_POST['AgeGroupIDAuto'];
		$occu = $_POST['OccupationIdAuto'];
		$email = $_POST['email'];
		$country = (int) $_POST['CountryIdAuto'];
		$team = (int) $_POST['user_testteam'];
		$feedback = $_POST['user_feedback'];
	}

	$conn;
	try {
		$conn = new PDO("mysql:host=localhost;dbname=Fantasy", 'root', '');
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $sql = "INSERT INTO User(user_fname,user_lname,user_username,user_pass,user_occu,user_agroup,user_email,user_country,	user_testteam,user_feedback) 
	    VALUES ('" . $fname ."','". $lname . "','" . $username . "','" . $pass . "','" . $group . "'," . 
	    $occu . ",'" . $email . "'," . $country . "," . $team . ",'" . $feedback . "' )";
	    // use exec() because no results are returned
	    $conn->exec($sql);

	    if(isset($_SERVER['HTTP_REFERER'])){
		    header("Location: " . $_SERVER['HTTP_REFERER']);
		    echo '<script type="text/javascript"> myScript.showAlert(); </script>';
		} else {
		    echo "An Error";
		}
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	finally{
		$conn->db = null;
	}

	

?>