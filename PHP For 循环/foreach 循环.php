<?php
$x=array("Google","Runoob","Taobao");
foreach ($x as $value)
{
    echo  $value . PHP_EOL;
}

$x=array(1=>"Google", 2=>"Runoob", 3=>"Taobao");
foreach ($x as $key => $value)
{
    echo "key  为 " . $key . "，对应的 value 为 ". $value . PHP_EOL;
}
?>