<?php
class Notify
{
    public function send()
    {
        return 'notify';
    }
}

class User extends Notify
{
    public function say()
    {
        return 'hell world'. $this->send();
    }
}

$user=new User;
echo $user->say();