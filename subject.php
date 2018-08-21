<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="admin")
    header("Location: hod.php");

 }
  else
    header("Location: index.php");
$_SESSION['subject']=array_search('submit', $_POST);;
echo $_SESSION['subject'];
header("Location: tdash.php");
?>