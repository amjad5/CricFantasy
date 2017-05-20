<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
		if (empty($_POST['uname']) || empty($_POST['psw'])) {
			$error = "Username or Password is invalid";
		}
		else
		{
			// Define $username and $password
			$username=$_POST['uname'];
			$password=$_POST['psw'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysql_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysql_real_escape_string($username);
			$password = mysql_real_escape_string($password);
			// Selecting Database
			$db = mysql_select_db("Fantasy", $connection);
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysql_query("select * from User where user_pass='$password' AND user_username='$username'", $connection);

			$rows = mysql_num_rows($query);
			if ($rows == 1) {
				$row = mysql_fetch_assoc($query);
				$userid = $row['user_id'];
				$_SESSION['user_id'] = $userid;
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: chose_comp.php"); // Redirecting To Other Page
				exit;
			} else {
				$error = "Username or Password is invalid";
			}
			mysql_close($connection); // Closing Connection
		}
?>