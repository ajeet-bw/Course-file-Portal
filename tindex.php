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
<?php
$my=$_SESSION['subject'];
$db=mysqli_connect('localhost','root','','course');
$sql="SELECT * from subject_assign where sno='$my'";
$res=mysqli_query($db,$sql);
$registration1=mysqli_fetch_assoc($res);

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
      <a class="navbar-brand" href="#">COURSE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="teacher.php">Change subject</a></li>
        <li><a href="#"><?php echo $_SESSION['name'];echo"("; echo $_SESSION['subject']; echo ")";?></a><li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<head>
 <style>
 .akm{
      height:100%;
	  width:100%;
     }
  .row{
	width:100%;
	background-color:#F5F5F5 ;
	border:double;
	margin-top:10px;
  }
 </style>
  <title>File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <form class="akm">
   <div class="container">
   <div class="row">
     <div class ="col-lg-2">
     </div>
	 <div class="col-lg-8" style="margin-top:50px;">
	    <center><font size="300px"><b>K. I .E. T.</b></font></center><br><br>
        <center><h1><b>WELCOME TO COURSE MANUAL </b></h1></center><br><br>
		<center><img src="kiet.jpeg" class="img-rounded" alt="KIETlogo"/></center><br><br>
		<center><label class="l1"><?php echo $registration1['subject'];?></label> <label>LAB FILE </label>  <label class="glyphicon glyphicon-file"></label><br><br></center><br><br>
		<center><label>Subject Code : </label> <label class="l2"><?php echo $_SESSION['subject'];?></label><br><br></center>
		<table>
		  <tr><td><h3>Name     :</h3></td><td><label class="l3"><?php echo $_SESSION['name'];?></label></td></tr>
		  <tr><td><h3>Id  :</h3></td><td><label class="l3"><?php echo $_SESSION['user_session'];?></label></td></tr>
		  <tr><td><h3>Sec  :</h3></td><td><label class="l3"><?php echo $registration1['section'];?></label></td></tr>
		  <tr><td><h3>Year   :</h3></td><td><label class="l3"><?php echo $registration1['year'];?></label></td></tr>
		</table><br><br>
		<center><h1><b>KIET GROUP OF INSTITUTION</b></h1></center>
      
	 </div>
	 <div class ="col-lg-2">
	 <button class="btn btn-primary pull-right" type="button" onClick="window.print()"><label class="glyphicon glyphicon-print"></label> Print</button>
	 </div>
	</div>
	</div>
 </form>
</body>
</html>
