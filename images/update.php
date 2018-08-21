<?php
session_start();
error_reporting(0);
 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="admin")
    header("Location: hod.php");


 }
  else
    header("Location: index.php");
$var1=$_SESSION['subject'];?>
<html>
<form method="POST">
<input type="text" name="file1" placeholder="ENTER 1 FILE NAME"value=""><br>
<input type="text" name="file2" placeholder="ENTER 2 FILE NAME"value=""><br>
<input type="text" name="file3" placeholder="NO OF PAGES TO BE TAKEN FROM 1 FILE"value=""><br>
<input type="text" name="file4" placeholder="NO OF PAGES TO BE TAKEN FROM 2 FILE"value=""><br>
<input type="text" name="file5" placeholder="NO OF PAGE AFTER WHICH 2 FILE TO APPEND"value=""><br>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
$var1=$_POST['file1'];
$var2=$_POST['file2'];
$var3=$_POST['file3'];
$var4=$_POST['file4'];
$var5=$_POST['file5'];
echo "$var1 $var2 $var3 $var4 $var5";
$my=shell_exec("python update.py $var1 $var2 $var3 $var4 $var5");
?>
