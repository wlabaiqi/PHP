<?php
$x=1;
function myTest($x)//参数是通过调用代码将值传递给函数的局部变量。参数是在参数列表中声明的，作为函数声明的一部分：
{
    static $x=2;//static只是在函数内部有用，外部失效。
    echo $x;
}
myTest(51);
echo PHP_EOL;
echo $x;
echo PHP_EOL;
myTest(5);
echo PHP_EOL;
echo $x;
?>