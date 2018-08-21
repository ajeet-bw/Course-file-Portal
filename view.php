<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="admin")
    header("Location: hod.php");

 }
  else
    header("Location: index.php");
 include "db.php";
  $an=$_SESSION['subject'];
  $aa12=mysqli_query($conn,"SELECT `image` FROM `question` WHERE `video`='$an'");
  $row12= mysqli_fetch_assoc($aa12);
  $path=$row12['image'];
  header('Content-type: application/pdf');
  readfile("images/$path");
?>
