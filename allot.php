<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="teacher")
    header("Location: teacher.php");


 }
  else
    header("Location: index.php");?>
<html>
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
		<li class="active"><a href="allot.php">Allot Subject</a></li>
        <li><a href="chat.php"><?php echo $_SESSION['name'];?></a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</script>
</head>
<body>
<form class="col-md-12 center-block" method="POST">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="text-center">ALLOT</h1>
</div>
<div class="modal-body">

<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="TEACHER ID" name="name">
</div>
<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="SUBJECT" name="email">
</div>
<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="YEAR" name="pass">
</div>
<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="SECTION" name="pno">
</div>

<div class="form-group">
<input type="submit" class="btn btn-block btn-lg btn-primary" value="submit" name="submit">
</form>
<div class="modal-footer">
<div class="col-md-12">
</div>
</div>
</body>
</div>

<?php
$conn = mysqli_connect('localhost','root','') or die (mysql_error);
$db=mysqli_select_db($conn,'course') or die (mysql_error);
  
  if(isset($_POST['submit']))
    {
   
  //Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];

    mysqli_query($conn,"INSERT INTO `subject_assign`(`t_id`,`subject`,`year`,`section`) VALUES ('$name', '$email','$pass','$pno')"); 

}
?>
</html>

<?php

?>
