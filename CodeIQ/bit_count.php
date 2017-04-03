<?php
// 



$line = trim(fgets(STDIN));
$bit_arry = explode(" ",$line);
echo count_bits($bit_arry).PHP_EOL;

function count_bits ($bit_arry){
	$ans=0;
	$2bit = decbin($bit_arry[0]);
	$2bit_len = mb_strlen($2bit);
	for ($i=0; $i < $bit_arry[1]; $i++) { 
		$ans += 2bit_len**$i;
	}




	return $ans;
}


