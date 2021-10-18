
<html>
<body>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="sname">
<input type="submit">
</form>
 
<?php 
$name = $_REQUEST['sname']; 
echo $name; 
?>
 
</body>
</html>