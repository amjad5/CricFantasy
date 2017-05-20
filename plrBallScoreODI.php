<?php 

	public class PlrBallScoreODI
	{
		
	public function checkMaidenOvers($overs){
		return $overs * 5; 
	}

	public function runRatePerOver($runrate){
		if($runrate <= 3.50){
			return 30;
		}elseif ($runrate <= 4.50 && $runrate >= 3.51) {
			return 20;
		}elseif ($runrate <= 5.0 && $runrate >= 4.51) {
			return 10;
		}elseif ($runrate <= 6.99 && $runrate >= 6.0) {
			return -10;
		}elseif ($runrate <= 9.99 && $runrate >= 7.00) {
			return -15;
		}elseif ($runrate >= 10.00) {
			return -20;
		}
	}

	public function allRunsBonus($runs){
		return $runs * 1;
	}

	public function checkWicketHaul($wickets){
		if($wickets == 4){
			return 40;
		}elseif($wickets == 5){
			return 50;
		}elseif($wickets == 6){
			return 60;
		}elseif($wickets >= 7){
			return 80;
		}
	}

	}
?>