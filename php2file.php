<?php
ob_start();
var_dump($_REQUEST);
$result = ob_get_clean();

$myfile = fopen("output.txt", "a") or die("Unable to open file!");
fwrite($myfile, $result);
fclose($myfile);

?>
