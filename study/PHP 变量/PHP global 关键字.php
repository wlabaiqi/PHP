<?php
$x=5;
$y=10;

echo $y;
echo PHP_EOL;

function myTest()
{
    $x=1;
    global $y;
    echo "X=".$x;//全局变量，没有定义，也为0
    $y=$x+$y;
    $x=$y+$x;
  
    echo "X=".$x;
    echo PHP_EOL;
    echo "Y=".$y;
}

myTest();
echo PHP_EOL;

echo $y; // 输出 11,(全局变量定以后，在后面程序中值一直保留)
echo PHP_EOL;
echo $x;// 输出 5
?>