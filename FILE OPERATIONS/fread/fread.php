<?php 
$file=fopen("D:/PHP_PRACTICE/FILE OPERATIONS/fwrite/fopen.txt","r");
$length=filesize("D:/PHP_PRACTICE/FILE OPERATIONS/fwrite/fopen.txt");
$data=fread($file,$length);
echo $data;
fclose($file);
?>
<!-- op------
this line is from fwrite program -->