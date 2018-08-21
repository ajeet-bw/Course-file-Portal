<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="student")
    header("Location: student.php");


 }
  else
    header("Location: index.php");
$var1=$_SESSION['subject'];
$conn = mysqli_connect('localhost','root','') or die (mysql_error);
$db=mysqli_select_db($conn,'course') or die (mysql_error);
mysqli_query($conn,"UPDATE `subject_assign` SET `exist`='1' WHERE `sno`='$var1'"); 
$my=shell_exec("python new.py $var1");
     mysqli_query($conn,"INSERT INTO `question`(`ques`,`image`,`video`) VALUES ('$var1 file','$var1.pdf','$var1')");
?>
