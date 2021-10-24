<?php 
$x = 75; 
$y = 25;
 
function addition() 
{ 
    $a=1;
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y']; 
    $a=$GLOBALS['x'] + 2*$GLOBALS['y'];
    echo $a,'<br>'; 
}
 
addition(); 
echo $z; 
//echo $a; 出了函数,变量就失效了。
?>