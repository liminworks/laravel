<?php
// $key 不能相等
$arr = [
'13.00'=>["姚霞","李敏","周辉","林炯辉","黄昊进","李玉"],
'13.33'=>["姚霞","李敏","周辉","林炯辉","黄昊进","李玉"],
'13.83'=>["姚霞","李鹏飞","周辉","林炯辉","黄昊进","李玉"],
];

$data = [];
foreach($arr as $price => $names){
	foreach($names as $name){
		$data[$name] += ($price);
	}
}

echo  json_encode($data);

?>
