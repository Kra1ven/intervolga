<?php
function insertIntoArray(&$arr, $i, $val, &$len){
	for($curr = $len; $curr > $i;){
		$arr[$curr] = $arr[$curr - 1];
		$curr--;
	}
	$arr[$i + 1] = $val;
	$len++;
}

$array = range(1, 100);
$len = count($array);
$val = 0;

for($i = 0; $i < $len; $i++) {
	if(preg_match('/[2]/', $array[$i])){
		insertIntoArray($array, $i, $val, $len);
	}
}

echo "<pre>";
print_r($array);
echo "</pre>";
?>
