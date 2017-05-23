<?php

//$xml = simplexml_load_file();
$xml=simplexml_load_file("http://synd.cricbuzz.com/j2me/1.0/livematches.xml") or die("Error: Cannot create object");
//echo htmlspecialchars(file_get_contents("http://synd.cricbuzz.com/j2me/1.0/livematches.xml"), ENT_QUOTES);

$doc = new DOMDocument();
$doc->loadHTML($xml);

?>