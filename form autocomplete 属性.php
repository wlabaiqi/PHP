<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8"> 
<title>菜鸟教程(runoob.com)</title> 
</head>
<body>

<form action=<?php echo $_SERVER['PHP_SELF'];?> method="get" autocomplete="on">
  First name:<input type="text" name="fname"><br>
  E-mail: <input type="email" name="email"><br>
  <input type="submit">
</form>

<p>填写并提交表单,然后重载页面,再次填写表格,看看 autocomplete 是如何工作的。</p>
<p>然后,尝试设置 autocomplete 为“off”。</p>

<p><b>注意：</b>除了 Opera，其他主流浏览器都支持 autocomplete 属性。</p>

</body>
</html>