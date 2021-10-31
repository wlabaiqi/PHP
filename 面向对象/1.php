<?php
class User{
protected $name;
protected static $classname='游戏';
public function say()
{
    return self::$classname.'中'.$this->name.':开始';
}
public function setName(string $name)
{
    $this->name=$name;
}
public function getName()
{
    return $this->name;
}
public static function getClassName()
{
    return self::$classname;
}
}
$obj=new User; 
$obj->setName('帝国时代');
echo $obj->say();
echo '<hr/>';
$obj->getClassName();
echo $obj->say();
//echo $obj::class;
//var_dump($obj);
//$this->
echo '<hr/>';
$lisi=new User;
$lisi->setName('魔兽');
echo $lisi->say();