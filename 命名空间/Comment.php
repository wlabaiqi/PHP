<?php
namespace Comment;
include 'helper.php';
include 'cal.php';
define("web","sohu.com");
class Comment
{
    public static function make()
    {
        echo __METHOD__;
        echo '    comment';
    }
 }
 comment::make();
 echo show();
 echo cal(1,2);