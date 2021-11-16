<?php
abstract class Notify
{
    protected $color="green";
    protected $credit=10;
    abstract public function content();
    public  function message()
    {
        return  '<span style="color:'.$this->color.'">'.$this->content().'奖励'.$this->credit().'个</span>';
    }
    public function credit()
    {
        return $this->credit;
    }
}
class User extends Notify
{
    protected $color="red";
    protected $credit=5;
    public function register()
    {
        return $this->message();
        return'欢迎加入';
    }
    public function message()
    {
       return parent::message();
    }
    public function content()
    {
        return '感谢申请';
    }
}
class Comment extends Notify
{
    protected $color="blue";  
    protected $credit=100;
public function  register()
 {
    return $this->message();
 }
 public function content(){
     return '感谢注册';
 }
} 
echo(new User)->register();
echo "<hr/>";
echo(new Comment)->register();