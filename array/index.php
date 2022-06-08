<?php 
/*$arr = array("banana", "orange", "apple", "peach", "grape");
print_r($arr);

echo "<br>";

$fruit = array_shift($arr);
print_r($arr);

echo "<br>";

print_r($fruit);

------------------------------------

$fruit = array_pop($arr);
print_r($arr);
print_r($fruit);

echo "<br>";

$arr[] = "mango";
print_r($arr);

------------------------------------

array_unshift($arr, "mango", "melon");
print_r($arr);
echo "<br>";
$arr1 = array_slice($arr, 2);
print_r($arr1);
echo "<br>";
$arr1 = array_slice($arr, -2);
print_r($arr1);
echo "<br>";
$arr3 = array_slice($arr, -4, -1);
print_r($arr3);
echo "<br>";
$arr4 = array_slice($arr, 2, -1);
print_r($arr4);
echo "<br>";
$arr5 = array_slice($arr, 2, -1, true);
print_r($arr5);

array_splice($arr, 1,3,array("mango","melon"));
print_r($arr);

$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));

print_r(array_merge_recursive($ar1, $ar2));

$arr = array(1,3,4,5,6,7);
echo array_sum($arr);

function odd($num){
  //奇数かどうかを返す
  return($num & 1);
}

function even($num){
  //偶数かどうかを返す
  return(!($num & 1));
}

$arr = [1,2,3,4,5];
print_r(array_filter($arr,"odd"));
echo "<br>";
print_r(array_filter($arr,"even"));*/

function en($n, $m){
	return($n . "is $m in English");
}

function fr($n, $m){
	return($n . "is $m in French");
}

$arr1 = [1,2,3,4,5,6];
$arr2 = ["one","two","three","four","five","six"];
$arr3 = ["un","deux","trois","quatre","cinq"];

print_r(array_map("en",$arr1,$arr2));
echo "<br>";
print_r(array_map("fr",$arr1,$arr3));
?>