<?php

$filepath = getcwd() . "/countlog.txt";
/* counter */
//opens countlog.txt to read the number of hits
$datei = fopen($filepath,"r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;

// opens countlog.txt to change new hit number
$datei = fopen($filepath,"w");
fwrite($datei, $count);
fclose($datei);

?>
