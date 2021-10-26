<?php
$x=5;//全局变量
$y=10;//全局变量

function myTest()
{
    echo $x*10000;//全局变量函数内部失效
    echo PHP_EOL;
    echo $y*10000;//全局变量函数内部失效
    echo PHP_EOL;
    echo $GLOBALS['x']*100;//global 关键字用于函数内访问全局变量。在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
    echo PHP_EOL;
    echo $GLOBALS['y']*100;//global 关键字用于函数内访问全局变量。在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
    echo PHP_EOL;
    for ($i=1; $i <10 ; $i++) {
        $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
        $GLOBALS['X']=$GLOBALS['x']+$GLOBALS['y'];
        echo $GLOBALS['X'];
        echo PHP_EOL;
        echo $GLOBALS['y'];
        echo PHP_EOL;
        
    }
}
myTest();
?>