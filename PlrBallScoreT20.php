<?php 

	public class PlrBallScoreT20
	{
		public function checkMaidenOvers($overs){
			return $overs * 10; 
		}

		public function runRatePerOver($runrate){
			if($runrate <= 3.0){
				return 40;
			}elseif ($runrate <= 4.00 && $runrate >= 3.01) {
				return 30;
			}elseif ($runrate <= 5.0 && $runrate >= 4.01) {
				return 25;
			}elseif ($runrate <= 6.00 && $runrate >= 5.01) {
				return 15;
			}elseif ($runrate <= 7.00 && $runrate >= 6.01) {
				return -10;
			}elseif ($runrate <= 9.00 && $runrate >=8.01) {
				return -15;
			}elseif ($runrate <= 12.00 && $runrate >=10.01) {
				return -20;
			}elseif ($runrate <= 14.00 && $runrate >=12.01) {
				return -25;
			}else{
				return -30
			}
		}

		public function checkWicketTaken($wickets){
			return $wickets * 30;
		}

		public function checkWicketHaul($wickets){
			if($wickets == 3){
				return 40;
			}
			elseif($wickets == 4){
				return 50;
			}elseif($wickets == 5){
				return 60;
			}elseif($wickets == 6){
				return 75;
			}
		}
	}
?>