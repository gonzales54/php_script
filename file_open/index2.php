<?php
$myfile = fopen("main.txt", "r") or die("Unable to open");
echo fread($myfile, filesize("main.txt")) . "<br>";
echo fgets($myfile);
fclose($myfile);
?>