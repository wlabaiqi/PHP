<?php
$txt1="学习 PHP";
$txt2="RUNOOB.COM";
$cars=array("Volvo","BMW","Toyota");
 
print $txt1;
print "<br>";
print '$txt1';//单引号中变成文字
print "<br>";
print ("$txt1");//括号对变量没有影响，单双引号有影响。
print "<br>";
print $txt1.$txt2.$cars[2];//可以用连接符.
print "<br>";
print "在 $txt2 学习 PHP ";
print "<br>";
print "我车的品牌是 {$cars[0]}";
?>