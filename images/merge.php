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
<input type="text" name="file" value="" placeholder="ENTER FILE NAME "><br>
<input type="submit" name="submit" value="submit">
</form>
</html>
<?php
$var2=$_POST['file'];
$my=shell_exec("python merge.py $var1 $var2");
?>
