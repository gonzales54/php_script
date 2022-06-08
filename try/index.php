<?php
function demo($var){
	try{
		echo "Hello World";
		if($var==0){
			throw new Exception("Number is zero");
			echo "A";
		}
	}
	catch(Exception $e){
		echo "$e->getMessage()";	
	}
}
demo(5);
?>