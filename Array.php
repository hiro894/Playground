<?php
$array = array(1,5,3,414,7,1332);

var_dump($array);

$array[] = 9999;

var_dump($array);

echo $array[2]."\n";

sort($array);

var_dump($array);

$array['foo'][] = 5678;
$array['foo'][] = 7890;
$array[] = 1111;
$array['foo'][] = 3333;

var_dump($array);

$array['foo']['bar'][] = 7777;
$array['foo']['bar'][] = 6666;
$array['foo']['bar'][] = 3333;

var_dump($array);

arsort($array);

var_dump($array);

sort($array);

var_dump($array);

$listData = [
		 [1,'abc','zzz']
		,[2,'bbb','xxx']
		,[3,'hkl','yyy']
	];

foreach( $listData as $data ){
	var_dump($data);
}

var_dump($array['unkown']);
