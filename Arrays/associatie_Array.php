<?php
$product=array("laptop"=>50000,"mouse"=>50,"keyboard"=>1000);

var_dump($product)."<br/>";
echo $product['mouse']."<br/>";
echo $product['keyboard']."<br/>";
echo $product['laptop']."<br/>";
$product['mouse']=100000;
echo $product['mouse']."<br/>";

?>
<!-- op--- -->
<!-- array(3) { ["laptop"]=> int(50000) ["mouse"]=> int(50) ["keyboard"]=> int(1000) } 50
1000
50000
100000 -->