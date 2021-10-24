<?php 
echo $_SERVER['PHP_SELF'];//当前执行脚本的文件名，与 document root 有关。
echo "<br>";
echo $_SERVER['SERVER_NAME'];//当前运行脚本所在的服务器的主机名。
echo "<br>";
echo $_SERVER['HTTP_HOST'];//当前请求头中 Host: 项的内容，如果存在的话。
echo "<br>";
echo $_SERVER['HTTP_REFERER'];//引导用户代理到当前页的前一页的地址（如果存在）。由 user agent 设置决定。并不是所有的用户代理都会设置该项，有的还提供了修改 HTTP_REFERER 的功能。简言之，该值并不可信。)
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];//包含当前脚本的路径。这在页面需要指向自己时非常有用。__FILE__ 常量包含当前脚本(例如包含文件)的完整路径和文件名。
?>