<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="student")
    header("Location: student.php");


 }
  else
    header("Location: index.php");
?>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  .head{height: 460px;}
</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">QUIZ</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="chat.php">Chat</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<form class="col-md-12 center-block " enctype="multipart/form-data" action="" method="post" name="changer">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h1 class="text-center">UPLOAD</h1>
</div>
<div class="modal-body ">

<div class="form-group">

<textarea class="form-control input-lg" placeholder="enter Topic" name="ques">
</textarea>
</div>
<div class="media-body">
<div class="form-group col-sm-6">
<input name="image"  type="file" class="media-object form-control input-lg"></div>
<div class="form-group">
<input type="submit" class="btn btn-block btn-lg btn-primary" value="submit" name="submit">
</div></form>

<?php
  $link = mysqli_connect("localhost", "root", "");
  $c=mysqli_select_db($link,"course");
  if(isset($_POST['submit'])){
	  $ques=$_POST['ques'];
     move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);
     $file="images/".$_FILES["image"]["name"];
	 $an=$_SESSION['subject'];
     mysqli_query($link,"INSERT INTO `question`(`ques`,`image`,`video`) VALUES ('$ques','$file','$an')");
     echo "!!!!FILE SUBMITTED";
  }
   mysqli_close($link);
?>
</html>