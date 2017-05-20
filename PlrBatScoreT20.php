<?php 

	public class PlrBatScoreT20
	{
		
	$totalPoints = 0;

	public function checkOutBallsFaced($balls, $runs){
		if(balls == 1 && $runs == 0){
			return -20;
		}elseif (balls == 2 && $runs == 0) {
			return -10;
		}else{
			return 0;
		}
	}

	public function runRatebonus($runrate){
		if($runrate >= 250){
			return 60;
		}elseif ($runrate <= 249.9 & $runrate >= 200) {
			return 50;
		}elseif ($runrate <= 199.9 & $runrate >= 175.0) {
			return 40;
		}elseif ($runrate <= 174.9 & $runrate >= 150.0) {
			return 20;
		}elseif ($runrate <= 149.99  & $runrate >= 125.00 ) {
			return 10;
		}elseif ($runrate <= 124.99  & $runrate >= 100 ) {
			return 10;
		}elseif ($runrate <= 99.99  & $runrate >= 75.01 ) {
			return 10;
		}elseif ($runrate <= 75.00  & $runrate >= 0 ) {
			return -10;
		}
	}

	public function allRunsBonus($runs){
		return $runs * 1;
	}
}
?>