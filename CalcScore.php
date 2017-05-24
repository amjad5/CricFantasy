<?php

	include_once('PlrBatScoreT20.php');
	include_once('PlrBallScoreT20.php');
	include_once('PlrFieldScoreT20.php');

	//$string = file_get_contents("mivspsg.json");
	// Match data for IPL matches in an array 
	$pastMatches = ['mivspsg.json', 'kkrvsrcb.json']; 
	$matchFile = file_get_contents($pastMatches[0]);  //Kolkatta Knight Riders vs Royal Challengers Bangalore
	
	fieldingScore($matchFile);
	ballingScore($matchFile);
	battingScore($matchFile);

	// Calculate fielding scores for a match
	function fieldingScore($matchFile){
		

		$match=json_decode($matchFile,true);
		//$runs = (int) $match['data']['batting']['1']['scores']['0']['R'];
		$inings = count($match['data']['fielding']);
		for ($i=0; $i < $inings; $i++) {
			$teamScore = $match['data']['fielding'][$i]['scores'];
			$strValI = (string) $i;

			//getting individual scores
			$totalPlayers = (count($match['data']['fielding'][$strValI]['scores']) -2);
				
			for ($k=0; $k < $totalPlayers; $k++) {
				$strValK = (string) $k;
				$plrId = $match['data']['fielding'][$strValI]['scores'][$strValK]['pid'];
				$plrName = $match['data']['fielding'][$strValI]['scores'][$strValK]['name'];
				$plrCatches = $match['data']['fielding'][$strValI]['scores'][$strValK]['catch'];
				$plrStumps = $match['data']['fielding'][$strValI]['scores'][$strValK]['stumped'];

				//$plrBalls = $match['data']['fielding'][$strValI]['scores'][$strValK]['B'];

				$cehckFieldScore = new PlrFieldScoreT20();
				$pointsGained = 0;

				$pointsGained += $cehckFieldScore->checkCathesFielder($plrCatches);
				$pointsGained = $cehckFieldScore->checkStumpsWK($plrStumps);

				//echo  $plrId. ' ' . $plrName ." : " . $plrRuns . " " .$pointsGained . " balls " . $plrBalls;
				$conn = mysql_connect("localhost", "root", "");
			    // set the PDO error mode to exception
			    $db = mysql_select_db("Fantasy", $conn);
			    
			    $checkteam = mysql_query("SELECT * from Player_Points where p_api_id=$plrId and match_date=CURDATE()", $conn);

				if($row = mysql_fetch_assoc($checkteam))
				{
					$newPlrPoints = 0;
					$newPlrPoints = intval($row['points']) + $pointsGained;
					$updatePlrQuery = mysql_query("Update Player_Points set points=$newPlrPoints where p_api_id=$plrId and match_date=CURDATE()", $conn);
					echo "updated ". $row['p_api_id'] . " points from " . $row['points'] . " to " .$newPlrPoints ;
					echo "<br>";
			    }else{
			    	$team = mysql_query("INSERT INTO Player_Points(p_api_id, match_date, points) 
			    		VALUES ($plrId ,CURDATE(),$pointsGained)", $conn);
			    }
			}
		}
		mysql_close($conn);
	}

	// Calculate bowling scores for a match
	function ballingScore($matchFile){
		//decode json match data
		$match=json_decode($matchFile,true);

		$inings = count($match['data']['bowling']);
		for ($i=0; $i < $inings; $i++) { 
			$teamScore = $match['data']['bowling'][$i]['scores'];
			$strValI = (string) $i;

			//getting individual scores
			$totalPlayers = (count($match['data']['bowling'][$strValI]['scores']) -2);
				
			for ($k=0; $k < $totalPlayers; $k++) {
				$strValK = (string) $k;
				$plrId = $match['data']['bowling'][$strValI]['scores'][$strValK]['pid'];
				$plrName = $match['data']['bowling'][$strValI]['scores'][$strValK]['bowler'];
				$plrRuns = $match['data']['bowling'][$strValI]['scores'][$strValK]['R'];
				$plrEcoRate = $match['data']['bowling'][$strValI]['scores'][$strValK]['Econ'];
				$plrWickets = $match['data']['bowling'][$strValI]['scores'][$strValK]['W'];
				$plrMaidens = $match['data']['bowling'][$strValI]['scores'][$strValK]['M'];
				$plrOvers = $match['data']['bowling'][$strValI]['scores'][$strValK]['O'];

				//$plrBalls = $match['data']['fielding'][$strValI]['scores'][$strValK]['B'];

				$cehckBallScore = new PlrBallScoreT20();
				$pointsGained = 0;
				$pointsGained += $cehckBallScore->checkMaidenOvers($plrMaidens);
				$pointsGained = $cehckBallScore->runRatePerOver($plrEcoRate);
				$pointsGained += $cehckBallScore->checkWicketTaken($plrWickets);
				$pointsGained += $cehckBallScore->checkWicketHaul($plrWickets);

				//echo  $plrId. ' ' . $plrName ." : " . $plrRuns . " " .$pointsGained . " balls " . $plrBalls;
					$conn = mysql_connect("localhost", "root", "");
				    // set the PDO error mode to exception
				    $db = mysql_select_db("Fantasy", $conn);
				    
				    $checkteam = mysql_query("SELECT * from Player_Points where p_api_id=$plrId and match_date=CURDATE()", $conn);

					if($row = mysql_fetch_assoc($checkteam))
					{
						$newPlrPoints = 0;
						$newPlrPoints = intval($row['points']) + $pointsGained;
						$updatePlrQuery = mysql_query("Update Player_Points set points=$newPlrPoints where p_api_id=$plrId and match_date=CURDATE()", $conn);
						echo "updated ". $row['p_api_id'] . " points from " . $row['points'] . " to " .$newPlrPoints ;
						echo "<br>";
				    }else{
				    	$team = mysql_query("INSERT INTO Player_Points(p_api_id, match_date, points) 
				    		VALUES ($plrId ,CURDATE(),$pointsGained)", $conn);
				    }
			}
		}
		mysql_close($conn);
	}

	// Calculate batting scores for a match
	function battingScore($matchFile){
		$match=json_decode($matchFile,true);
		$inings = count($match['data']['batting']);
		for ($i=0; $i < $inings; $i++) { 
			$teamScore = $match['data']['batting'][$i]['scores'];
			$strValI = (string) $i;

			//getting individual scores
			$totalPlayers = (count($match['data']['batting'][$strValI]['scores']) -2);
				
			for ($k=0; $k < $totalPlayers; $k++) {
				$strValK = (string) $k;
				$plrId = $match['data']['batting'][$strValI]['scores'][$strValK]['pid'];
				$plrName = $match['data']['batting'][$strValI]['scores'][$strValK]['batsman'];
				$plrRuns = $match['data']['batting'][$strValI]['scores'][$strValK]['R'];
				$plrSRate = $match['data']['batting'][$strValI]['scores'][$strValK]['SR'];
				$plrBalls = $match['data']['batting'][$strValI]['scores'][$strValK]['B'];
				//$plrBalls = $match['data']['fielding'][$strValI]['scores'][$strValK]['B'];

				$cehckBatScore = new PlrBatScoreT20();
				$pointsGained = 0;
				$pointsGained = $cehckBatScore->allRunsBonus($plrRuns);
				$pointsGained += $cehckBatScore->runRatebonus($plrSRate);
				$pointsGained += $cehckBatScore->checkOutBallsFaced($plrRuns, $plrBalls);

				//echo  $plrId. ' ' . $plrName ." : " . $plrRuns . " " .$pointsGained . " balls " . $plrBalls;
				$conn = mysql_connect("localhost", "root", "");
			    // set the PDO error mode to exception
			    $db = mysql_select_db("Fantasy", $conn);
			    
			    $checkteam = mysql_query("SELECT * from Player_Points where p_api_id=$plrId and match_date=CURDATE()", $conn);

				if($row = mysql_fetch_assoc($checkteam))
				{
					$newPlrPoints = 0;
					$newPlrPoints = intval($row['points']) + $pointsGained;
					$updatePlrQuery = mysql_query("Update Player_Points set points=$newPlrPoints where p_api_id=$plrId and match_date=CURDATE()", $conn);
			    }else{
			    	$team = mysql_query("INSERT INTO Player_Points(p_api_id, match_date, points) 
			    		VALUES ($plrId ,CURDATE(),$pointsGained)", $conn);
			    }
			}
		}
		mysql_close($conn); // close connection in last
	}

?>