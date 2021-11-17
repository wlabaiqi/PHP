<?php

use Topic as GlobalTopic;

trait Site
{
    public function getSiteName(){
        return  'sohu.com';
    }


}
trait Log
{
    public function save()
    {
        return __METHOD__;
    }
}
trait Comment
{
    use Site;
    abstract public function name();
    public static function show(){
return 'show';
    }
    public  function save()
    {
        return __METHOD__;
    }
}

class Topic
{
    use Log,Comment{

        Log::save insteadOf Comment;
        //Log::save as protected;
        Comment::save as send;
    }
    public function name()
    {

    }
}

$topic=new Topic;
echo $topic->save();
echo '<br/>';
echo $topic->getSiteName();
//echo $topic->total();
echo '<br/>';
//echo $topic->total1();
echo Topic::show();