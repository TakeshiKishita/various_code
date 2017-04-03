<?php
while($line=fgets(STDIN)){
	echo count_combination(strtoupper(rtrim($line))).PHP_EOL;
}
function count_combination($n){
	if ($n%2 == 0) {
		return 0;
	}
	$multiple_count = floor(1999999/$n);
	$ans = ceil($multiple_count/2);
	return $ans;
}