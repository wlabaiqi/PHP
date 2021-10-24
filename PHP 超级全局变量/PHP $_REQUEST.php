<html>
<body>
 
<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>" name="fname" target="_blank">
Name: <input type="text" name="fname">
<input type="submit">
</form>
 
<?php 

$name = $_REQUEST['fname']; 
echo $name; 

?>
 
</body>
</html>