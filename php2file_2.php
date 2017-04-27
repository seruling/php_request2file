<?php
$myfile = fopen("aaaa.txt", "a") or die("Unable to open file!");
fwrite($myfile, $result);
foreach ($_REQUEST as $key => $value) {
 	fwrite($myfile, $key);
 	fwrite($myfile, ":");
 	fwrite($myfile, $value);
 	fwrite($myfile, "\n");
}
fclose($myfile);
?>
