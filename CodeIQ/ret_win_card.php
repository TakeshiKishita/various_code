<?php
while($line=fgets(STDIN)){
	echo ret_win_card(strtoupper(rtrim($line))).PHP_EOL;
}
function ret_win_card($line_str){
	$zero = false;
	$max = null;
	$min = null;
	foreach(str_split($line_str) as $value){
		if($value == 0){
			$zero = true;
		}
		if(($max == null || $max<$value) && $value != 0){$max = $value;}
		if(($min == null || $min>$value) && $value != 0){$min = $value;}
	}
	$win_card = $max;
	if($zero){$win_card = $min;}
	return $win_card;
}