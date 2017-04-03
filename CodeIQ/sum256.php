<?php
$sum_array = array();
while(true){
	$line = trim(fgets(STDIN));
	if ($line === ''){
		break;
	}
	$sum_array = array_merge($sum_array,explode(" ",$line));
}
echo sum256($sum_array).PHP_EOL;

function sum256($sum_array){
	$ans = "no";
	foreach ($sum_array as $key => $value) {
		for ($i=$key+1; $i < count($sum_array) ; $i++) {
			if ($value + $sum_array[$i] == 256) {
				$ans = "yes";
			}
		}
	}
	return $ans;
}
