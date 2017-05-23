<?php

	include_once('PlrBatScoreT20.php');
	include_once('PlrBallScoreT20.php');
	include_once('PlrFieldScoreT20.php');

	fieldingScore();
//	ballingScore();
//	battingScore();

//	print_r($match['data']['bowling']['1']['scores']['0']['Econ']);


	function fieldingScore(){
		$string = file_get_contents("mivspsg.json");
		$match=json_decode($string,true);
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
				
				try {
					$conn = new PDO("mysql:host=localhost;dbname=Fantasy", 'root', '');
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				    
				    $checkteam = "SELECT * from Player_Points where p_api_id=$plrId & match_date=CURDATE()"
				    $checkStmt = $conn->prepare($checkteam);
				    $checkStmt->execute();

				    wihle($row = $checkStmt->fetch(PDO::FETCH_ASSOC)) {
				    	echo $row['points'];
				    }
				    
//				    $team = "INSERT INTO Player_Points(p_api_id, match_date, points) 
//				    VALUES ('" . $plrId ."'," ." CURDATE(),'". $pointsGained ."')";
//				    $stmt = $conn->prepare($team);
//				    $stmt->execute();

				    //header("location: homepage.php"); // Redirecting To Other Page
				    //exit;
				} catch (PDOException $e) {
//					echo "Error: " . $e->getMessage();
				}
				finally{
					$conn->db = null;
				}
			}
		}
	}


	function ballingScore(){
		$string = file_get_contents("mivspsg.json");
		$match=json_decode($string,true);

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
				
				try {
					$conn = new PDO("mysql:host=localhost;dbname=Fantasy", 'root', '');
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				    $team = "INSERT INTO Player_Points(p_api_id, match_date, points) 
				    VALUES ('" . $plrId ."'," ." CURDATE(),'". $pointsGained ."')";
				    $stmt = $conn->prepare($team);
				    $stmt->execute();

//				    header("location: homepage.php"); // Redirecting To Other Page
//				    exit;
				} catch (PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
				finally{
					$conn->db = null;
				}
			}
		}
	}

	function battingScore(){
		$string = file_get_contents("mivspsg.json");
		$match=json_decode($string,true);
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

				$pointsGained = $cehckBatScore->allRunsBonus($plrRuns);
				$pointsGained += $cehckBatScore->runRatebonus($plrSRate);
				$pointsGained += $cehckBatScore->checkOutBallsFaced($plrRuns, $plrBalls);

				//echo  $plrId. ' ' . $plrName ." : " . $plrRuns . " " .$pointsGained . " balls " . $plrBalls;
				
				try {
					$conn = new PDO("mysql:host=localhost;dbname=Fantasy", 'root', '');
				    // set the PDO error mode to exception
				    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				    $team = "INSERT INTO Player_Points(p_api_id, match_date, points) 
				    VALUES ('" . $plrId ."'," ." CURDATE(),'". $pointsGained ."')";
				    $stmt = $conn->prepare($team);
				    $stmt->execute();

//				    header("location: homepage.php"); // Redirecting To Other Page
//				    exit;
				} catch (PDOException $e) {
					echo "Error: " . $e->getMessage();
				}
				finally{
					$conn->db = null;
				}
			}
		}
	}


	

?>