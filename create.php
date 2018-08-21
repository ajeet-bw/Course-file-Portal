<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="admin")
    header("Location: hod.php");

 }
  else
    header("Location: index.php");
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
		<li class="active"><a href="teacher.php">Change Subject</a></li>
        <li><a href="chat.php"><?php echo $_SESSION['name'];echo"("; echo $_SESSION['subject']; echo ")";?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<h1><a href="tindex.php">INDEX PAGE</a></h1>

<?php
$my=$_SESSION['subject'];
$db=mysqli_connect('localhost','root','','course');
$sql="SELECT * from subject_assign where sno='$my' AND exist='1'";
$res=mysqli_query($db,$sql);
if($registration1=mysqli_fetch_assoc($res))
echo "FILE ALREADY EXIST";
else{
?><h1><a href="images/new.php">CREATE FILE</a></h1>
<?php } 
?>
</html>
