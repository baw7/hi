<?php
$date =  date('Y-m-d', time());
$date = str_replace('-', '/', $date);
echo "The value of \$date: ".$date."<br>";
print_r(explode('/', $date, 3))."<br>";
echo str_word_count("$date")."<br>";
echo strlen("$date")."<br>";
echo chr(1) . "<br>";
$rest = substr("$date", -2);
print "$rest" . "<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
~   
