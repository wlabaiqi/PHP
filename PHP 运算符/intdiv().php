<?php
var_dump(intdiv(10, 3));//PHP7+ 版本新增整除运算符 intdiv()，该函数返回值为第一个参数除于第二个参数的值并取整（正数向下取整，负数向上取整）
var_dump(intdiv(-10, 3));
//var_dump(intdiv(-10, 0));如果 divisor 是 0，将抛出 DivisionByZeroError 异常。 
var_dump(intdiv( PHP_INT_MIN+1, -1));//PHP 7.0 这些错误包括尝试执行负值的位移，以及对 intdiv() 的任何调用会导致值超出整数的可能范围。
var_dump(intdiv( PHP_INT_MAX, 1),intdiv( PHP_INT_MIN, 1));