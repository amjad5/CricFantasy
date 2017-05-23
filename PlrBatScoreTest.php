<?php 

	class PlrBatScoreTest
	{

		function checkOutBallsFaced($balls, $runs){
		if(balls == 1 && $runs == 0){
			return -30;
		}elseif (balls == 2 && $runs == 0) {
			return -20;
		}
	}

	function totalRunsBonus($runs){
		if($runs>=100 && $runs <= 149.9){
			return 40;
		}
		elseif($runs>=150 && $runs <= 199.9){
			return 70;
		}
		elseif($runs>=200 && $runs <= 249.9){
			return 140;
		}
		elseif($runs>=250 && $runs <= 299.9){
			return 180;
		}
		elseif($runs>=350){
			return 210;
		}
	}

	public function totalRunPoints($runs){
		return $runs * 1;
	}

}
?>