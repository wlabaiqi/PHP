<?php
class Code{
    protected $width;
    public function __construct(int $width=200)
    {
        $this->width=$width;
    }
     public function make()
     {
           return '获取'.$this->width.'分';
     }
     public function __destruct()
     {
         echo 'destruct';
     }
}

//echo (new Code())->make();
$a=(new Code());
$b=$a;
echo $a->make();
echo '<hr/>';