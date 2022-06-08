<?php
/*function hello($word){
    return $word;
}

echo hello("Good Morning");

function add($a, $b){
    echo $a + $b;
}
add(1, 5);

*/

function sum(...$nums){
    $sum = 0;
    foreach($nums as $n){
        $sum += $n;
    }
    return $sum;
}
echo sum(1,2,3,4,5,6);
?>