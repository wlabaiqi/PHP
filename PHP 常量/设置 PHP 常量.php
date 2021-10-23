<?php
define("CONSTANT", "Hello world.");
echo CONSTANT; // outputs "Hello world."
// outputs "Constant" and issues a notice.

//define("GREETING", "Hello you.", true);警告
//PHP 7.3.0 起废弃了定义不区分大小写的常量。
//echo GREETING; // outputs "Hello you."


// Works as of PHP 7
define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"

?>