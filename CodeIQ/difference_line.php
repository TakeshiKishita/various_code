<?php
while($line=fgets(STDIN)){
	echo custom_line(rtrim($line)).PHP_EOL;
}

function custom_line($line){
	$line_arry = str_split($line);
	for ($i=1; $i < count($line_arry); $i++) {
		if (abs($line_arry[$i-1] - $line_arry[$i]) == 1) {
			array_splice($line_arry,$i-1,2);
			$i = 0;
		}
	}
	return implode("",$line_arry);
}

// 【問題】
// 20桁の数字が提示されます。
// 一番左の桁を先頭として、右の桁へと順に見ていきます。
// そして、隣り合った数が連続する数だった場合は、その双方を削除して先頭に戻ります。
// 最終的に、削除ができなくなった時点で数字を出力してください。
// 【入力】
// 標準入力から、複数行のデータが与えられます。1行のデータが、1つの20桁の数字になります。
// 【出力】
// 1行ずつ処理を行ない、その答えを1行ごと標準出力に出力します。
