<?php
$x="Hello world!";
var_dump($x);
echo "<br>"; 
print_r("$x");//必须加双引号才能显示变量
echo "<br>"; 
print_r('$x');//单引号显示文字
echo "<br>"; 
$x=null;
var_dump($x);
echo "<br>"; 
print_r("$x");//不显示
?>