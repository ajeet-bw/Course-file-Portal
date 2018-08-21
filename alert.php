<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
 if($_SESSION['rank']=="teacher")
    header("Location: teacher.php");

 }
  else
    header("Location: index.php");
$db=mysqli_connect('localhost','root','','course');
$sql="SELECT user_id from tbl_users where user_id not in(select t_id from subject_assign)";
$res=mysqli_query($db,$sql);
?>
<html>
<body bgcolor="white">
<div id="d1">
</div>	
<center>	
<table width="800" border="1" cellpadding="1" cellsapcing="1">
<tr>
<th>Teacher_ID</th>
<th>Allot SUBJECT</th>
</tr>
<?php
$i=0;
while($registration1=mysqli_fetch_assoc($res))
{$i=1;
echo "<tr>";

echo "<td>".$registration1['user_id']."</td>";
?><td><a href="allot.php">Allot</a></td>
<?php
echo "</tr>";
}if($i)echo"SELECT SUBJECT";else echo"SUBJECT NOT ALLOTED YET";
?>
</table></center>
</body>
</html>
