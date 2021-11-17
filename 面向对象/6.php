<?php
trait Site{
    public function
}
trait Log
{
    protected function save()
    {
        return __METHOD__;
    }
}
trait Comment
{
    protected function save()
    {
        return __METHOD__;
    }
}
trait Three 
{
    public function total1()
   {
       return "__METHOD__";
    }
}
class Site
{
    public function total()
    {
            return __METHOD__;
    }
}
class Topic extends Site
{
    use Log,Comment,Three{
    Log::save insteadof Comment;
    Comment::save as send;
}

}
$topic=new Topic;
echo $topic->send();
echo '<br/>';
echo $topic->total();
echo '<br/>';
//echo $topic->total1();