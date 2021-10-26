<?php
$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");
 
echo "双引号 $txt1 ";//双引号是变量
echo "<br>";
echo '单引号 $txt1 ';//单引号是文字
echo "<br>";
echo ('单引号 $txt1');//括号没有影响
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[2]}";//输出指定数组
?>