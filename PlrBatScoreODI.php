<?php 

	public class PlrBatScoreODI
	{
		
	$totalPoints = 0;

	public function checkOutBallsFaced($balls, $runs){
		if(balls == 1 && $runs == 0){
			$totalPoints -= 20;
		}elseif (balls == 2 && $runs == 0) {
			$totalPoints -= 10;
		}
	}

	public function runRatebonus($runrate){
		if($runrate > 200){
			return 50;
		}elseif ($runrate <= 199.9 & $runrate >= 150) {
			return 40;
		}elseif ($runrate <= 149.9 & $runrate >= 125) {
			return 30;
		}elseif ($runrate <= 100 & $runrate >= 100) {
			return 20;
		}elseif ($runrate < 99.9 & $runrate > 80.0) {
			return 10;
		}else{
			return 0;
		}
	}

	public function allRunsBonus($runs){
		return $runs * 1;
	}
}
?>