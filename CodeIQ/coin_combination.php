<?php
set_time_limit(10);
$coin_arry = array(1,5,10,50,100,500);
$line=fgets(STDIN);
echo "ANS=".coin_combination(rtrim($line),0,0).PHP_EOL;
function coin_combination($value,$arry_num,$combi){
	global $coin_arry;
print '金額：'.$value.",コイン番号：".$arry_num.",パターン：".$combi.PHP_EOL;
	for ($i=0; $i <= floor($value/$coin_arry[$arry_num]); $i++) { 
		if ($value != ($coin_arry[$arry_num]*$i) && $arry_num < count($coin_arry)) {
			//余りがあった場合
			print '余り'.PHP_EOL;
			$value2 = $value - $coin_arry[$arry_num]*$i;
			$combi = coin_combination($value2,$arry_num+1,$combi);
		}else{
			//余りがなかった場合
			print '無し'.PHP_EOL;
			$combi += 1;
		}
	}
	return $combi;
}