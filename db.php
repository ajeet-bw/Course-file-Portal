<?php

$conn = mysqli_connect('localhost','root','') or die (mysql_error);
$db=mysqli_select_db($conn,'course') or die (mysql_error);

?>