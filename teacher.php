<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="admin")
    header("Location: hod.php");

 }
  else
    header("Location: index.php");
$my=$_SESSION['user_session'];
$db=mysqli_connect('localhost','root','','course');
$sql="SELECT * from subject_assign where t_id='$my'";
$res=mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>COURSE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">COURSE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
       <li><a href="chat.php"><?php echo $_SESSION['name'];?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<head>
	<style>
	#d1{
		background:BLUE;
		width:1350px;
		height:40px;  
	}
	</style>
</head>
<body bgcolor="skyblue">
<div id="d1">
</div>	
<center>	
<table width="800" border="1" cellpadding="1" cellsapcing="1">
<tr>
<th>Teacher_ID</th>
<th>Subject</th>
<th>Year</th>
<th>Section</th>
<th>Select</th>
</tr>
<?php
$i=0;
while($registration1=mysqli_fetch_assoc($res))
{$i=1;
echo "<tr>";

echo "<td>".$registration1['t_id']."</td>";
echo "<td>".$registration1['subject']."</td>";
echo "<td>".$registration1['year']."</td>";
echo "<td>".$registration1['section']."</td>";
?>
<td> <form action="subject.php" method="POST">&emsp;<input type="submit" value="submit" name="<?php echo $registration1['sno'];?>"/></form></td>
<?php
echo "</tr>";
}if($i)echo"SELECT SUBJECT";else echo"SUBJECT NOT ALLOTED YET";
?>
</table></center>
</body>
</html>
