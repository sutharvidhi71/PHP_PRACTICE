<?php
$file=fopen("fopen.txt","w");
$data="this line is from fwrite program";
fwrite($file,$data);
fclose($file);

?>

so i wanted to open fopen file of different folder since i didnt gave
path to it php tried to find it in corrent folder but it was nor there so
php created new file named fopen 