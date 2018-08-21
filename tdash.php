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

<div class="container-fluid"> 
<div class="row"> 
<div class="col-sm-3 col-md-2 sidebar" style="border-right:1px solid #CCC;background:#101010"> 
<ul class="nav nav-sidebar"> 
<li><a href=""><img src="kiet/p1.jpg" style="width:170px;height:150px;margin-top:75px" class="img-rounded"></li> 

<li><a href="u.php"><span class="glyphicon glyphicon-edit"></span>Course File</a></li> 
<li><a href="progress.php?option=submit_title"><span class="glyphicon glyphicon-edit"></span>Check Progress</a></li> 

<li><a href="index.php?option=remainder"><span class="glyphicon glyphicon-edit"></span>Remainder</a></li>  

<li><a href="Remark.php?option=inbox"><span class="glyphicon glyphicon-edit"></span>View Remark</a></li> 

<li><a href="index.php?option=Announcements" title="Announcements for all supervisior and Student"><span class="glyphicon glyphicon-check"></span>Announcements</a></li> 


<li><a href="index.php?option=update_password"><span class="glyphicon glyphicon-lock"></span> Update_Password</a></li> 
<li><a href="index.php?option=inbox"></a></li> 
<li><a href="index.php?option=inbox"></a></li> 
<li><a href="index.php?option=inbox"></a></li> 
<li><a href="index.php?option=inbox"></a></li>
<li><a href="index.php?option=inbox"></a></li>

</ul> 

</div>  
	<!-- sidebar end--> 
<div class="col-sm-0 col-sm-offset-0 col-md-8 col-md-offset-1 main" style="background:#000000">
 <div class="col-lg-12 well" style="margin-top:70px;">
		   <h1 class="text-center text-primary">About Course File </h1>
         <div class="col-lg-4">		
	<a href="view.php">
	<h4 align="left" class="btn btn-success" style="padding:50px;">View Course File </h4>
         </a>
</div>
<div class="col-lg-4">
<a href="images/update.php">
	<h4 align="left" class="btn btn-warning" style="padding:50px;">Update Course File</h4>
</a>
</div>
<div class="col-lg-4">
<a href="index.php?option=supervisior_request">
	<h4 align="left" class="btn btn-warning" style="padding:50px;">Delete Course File</h4>
</a>
</div>

<div class="col-lg-4">
<a href="images/merge.php">
	<h4 align="left" class="btn btn-danger" style="padding:45px;">Upload Course File </h4>
</a>
</div>

<div class="col-lg-4">
<a href="create.php?option=remainder">
	<h4 align="left" class="btn btn-success" style="padding:45px;">Create &nbspCourse&nbsp File&nbsp  </h4>
</a>
</div>

<div class="col-lg-4">
<a href="index.php?option=submit_title">
	<h4 align="left" class="btn btn-danger" style="padding:45px;">Submit Your Report&nbsp</h4>
</a>
</div>
		 
		 
		 
          </div>
		  		  
        </div>
      </div>
    </div>
 <!-- /#wrapper -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({"lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]]});
        } );
    </script>
	
  </body>
</html>



