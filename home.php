<?php
session_start();

if(isset($_SESSION['user_session'])!="")
{
	
	
 	if($_SESSION['rank']=="admin")
 		header("Location: admin.php");
 	else if($_SESSION['rank']=="student")
 		header("Location: student.php");
    else
        
header("Location: index.php");
}
else
header("Location: index.php");

?>