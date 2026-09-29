<?php
$students=array("Abhinav","Shreya","Hirl","Vidhi");
$n=count($students);
for ($i=0; $i < $n; $i++) { 
echo $students[$i]." ";
} 
echo sort($students);
for ($i=0; $i < $n; $i++) { 
echo $students[$i]." ";
} 

?>
<!-- op----
Abhinav Shreya Hirl Vidhi 1Abhinav Hirl Shreya Vidhi -->