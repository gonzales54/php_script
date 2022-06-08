<?php
$arr = array(4,8,6,5,2,2,12,645,615,6,4,8,56,64,51,5,1,35);
function linear_seach($target){
	global $arr;
	$i = 0;
	foreach ($arr as $num){
		if($num == $target){
			echo "I found target : '$target' in $i of array";
			echo "<br>";
			$i += 1;
			continue;
		}else{
			$i += 1;
			continue;
		}
		break;
	}
}

linear_seach(2);
?>