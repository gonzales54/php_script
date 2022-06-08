<?php
$age = array("Peter"=>35, "ben"=>37,"Joe"=>43);
$cars = array("volvo","BMW", "Toyota");
$json1 = '{"Peter":54, "Ben":37, "Joe":43}';
$obj = json_decode($json1);
$arr = json_decode($json1, true);

echo json_encode($age);
echo "<br>";
echo json_encode($cars);
echo "<br>";
var_dump(json_decode($json1));
echo "<br>";
var_dump(json_decode($json1), true);
echo "<br>";

echo $obj->Peter;
echo "<br>";
echo $obj->Ben;
echo "<br>";
echo $obj->Joe;
echo "<br>";

echo $arr["Peter"];
echo "<br>";
echo $arr["Ben"];
echo "<br>";
echo $arr["Joe"];
echo "<br>";

foreach($obj as $key => $value){
	echo $key  . "=>" . $value . "<br>";
}
?>