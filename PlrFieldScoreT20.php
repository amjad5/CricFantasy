<?php 

	public class PlrFieldScoreT20
	{
		public function checkCathesFielder($catches){
			return $catches * 10;
		}

		public function checkCathesWK($catches){
			return $catches * 8; 
		}

		public function checkStumpsWK($stumps){
			return $stumps * 15; 
		}

		public function checkRunOuts($runOuts){
			return $runOuts * 10; 
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
			}elseif ($runrate <= 9.99 && $runrate >= 7.00){
				return -15;
			}elseif ($runrate >= 10.00) {
				return -20;
			}
		}
	}
?>