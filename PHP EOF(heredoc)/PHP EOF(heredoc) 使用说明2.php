<?php
$name="runoob";
$a= <<<EOF
        "abc".$name
        "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
//在 heredoc 中，变量不需要用连接符 . 或 , 来拼接，因为在里面不是字符，只是文字
?>