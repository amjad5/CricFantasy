<!--
      ___           ___           ___           ___           ___           ___                         ___     
     /__/\         /__/\         /  /\         /  /\         /  /\         /  /\                       /  /\    
    _\_ \:\        \  \:\       /  /:/_       /  /::\       /  /::\       /  /:/_                     /  /::|   
   /__/\ \:\        \__\:\     /  /:/ /\     /  /:/\:\     /  /:/\:\     /  /:/ /\    ___     ___    /  /:/:|   
  _\_ \:\ \:\   ___ /  /::\   /  /:/ /:/_   /  /:/~/:/    /  /:/~/:/    /  /:/ /:/_  /__/\   /  /\  /  /:/|:|__ 
 /__/\ \:\ \:\ /__/\  /:/\:\ /__/:/ /:/ /\ /__/:/ /:/___ /__/:/ /:/___ /__/:/ /:/ /\ \  \:\ /  /:/ /__/:/ |:| /\
 \  \:\ \:\/:/ \  \:\/:/__\/ \  \:\/:/ /:/ \  \:\/:::::/ \  \:\/:::::/ \  \:\/:/ /:/  \  \:\  /:/  \__\/  |:|/:/
  \  \:\ \::/   \  \::/       \  \::/ /:/   \  \::/~~~~   \  \::/~~~~   \  \::/ /:/    \  \:\/:/       |  |:/:/ 
   \  \:\/:/     \  \:\        \  \:\/:/     \  \:\        \  \:\        \  \:\/:/      \  \::/        |  |::/  
    \  \::/       \  \:\        \  \::/       \  \:\        \  \:\        \  \::/        \__\/         |  |:/   
     \__\/         \__\/         \__\/         \__\/         \__\/         \__\/                       |__|/    


    CricAPI is a product of Wherrelz IT Solutions Private Limited

    By using this product you agree to the terms and conditions as defined & updated on the website.

-->

<?php

  //unique_id=946765
	$cricketMatchesTxt = file_get_contents('http://cricapi.com/api/cricket/?apikey=s3TFwSsA4XXhNB8BL6vXgHaMOY53');

  	// change with your API key
	$cricketMatches = json_decode($cricketMatchesTxt);

  $matchString = "http://cricapi.com/api/cricketScore/cricketScore?apikey=s3TFwSsA4XXhNB8BL6vXgHaMOY53&&";

  foreach($cricketMatches->data as $item) {
    //$matchScoreTxt = file_get_contents('http://cricapi.com/api/cricketScore/cricketScore?apikey=s3TFwSsA4XXhNB8BL6vXgHaMOY53&&');
?>
    <h4><?php echo($item->title); ?></h4>

    <p><?php
        $newmatchString = ""; 
        $newmatchString = $matchString ."unique_id=". $item->unique_id;
        $matchScoreTxt = file_get_contents($newmatchString);
        $matchScore = json_decode($matchScoreTxt,true);
        echo($matchScore['innings-requirement']); 
        echo($matchScore['type']);
        ?></p>
<?php } ?>