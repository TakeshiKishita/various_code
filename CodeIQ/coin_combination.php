<?php
set_time_limit(10);
$coin_arry = array(1,5,10,50,100,500);
$line=fgets(STDIN);
echo "ANS=".coin_combination(rtrim($line),0,0).PHP_EOL;
function coin_combination($value,$arry_num,$combi){
	global $coin_arry;
print '���z�F'.$value.",�R�C���ԍ��F".$arry_num.",�p�^�[���F".$combi.PHP_EOL;
	for ($i=0; $i <= floor($value/$coin_arry[$arry_num]); $i++) { 
		if ($value != ($coin_arry[$arry_num]*$i) && $arry_num < count($coin_arry)) {
			//�]�肪�������ꍇ
			print '�]��'.PHP_EOL;
			$value2 = $value - $coin_arry[$arry_num]*$i;
			$combi = coin_combination($value2,$arry_num+1,$combi);
		}else{
			//�]�肪�Ȃ������ꍇ
			print '����'.PHP_EOL;
			$combi += 1;
		}
	}
	return $combi;
}