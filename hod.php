<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="teacher")
    header("Location: teacher.php");


 }
  else
    header("Location: index.php");
?>
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
                <li class="active"><a href="alert.php">Alert</a></li>
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
  <style>
  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
   <div class="container">
    <form class="form-group">
    <div class="row" style="margin-top:20px;">
	    <div class="col-md-2">
        </div>		
        <div class="col-md-8">
            <h2>Search Techniques.....</h2>
            <div class="panel panel-default">
               <div class="panel-heading">
               <ul class="nav nav-tabs">
               <li class="active"><a data-toggle="tab" href="#home"><h4>Search by Teacher Name</h4></a></li>
               <li><a data-toggle="tab" href="#menu1"><h4>Search by Department Name</h4></a></li>
               <li><a data-toggle="tab" href="#menu2"><h4>Search for Advance</h4></a></li>
               </ul>
               </div>
              <div class="panel-body">
               <div class="tab-content">
               <div id="home" class="tab-pane fade in active">
               <h3>Teacher Name</h3>
			   <div class="input-group">
                 <input name="rname" placeholder="Teacher Name" class="form-control"  type="text"><br><br>
	             <button type="button" class="btn btn-primary btn-lg">Search now....</button>
               </div>
			   </div>
               <div id="menu1" class="tab-pane fade">
                <h3>Department Name</h3>
				<div class="input-group">
                <input name="pname" placeholder="Department Name" class="form-control"  type="text"><br><br>
	            <button type="button" class="btn btn-primary btn-lg">Search now....</button>
                </div>
				</div>
                <div id="menu2" class="tab-pane fade">
            	<h3>Advance Option</h3>
				<div class="input-group">
				<input name="rname" placeholder="Teacher Name" class="form-control"  type="text"><br><br>
				<input name="Lastname" placeholder="Department Name" class="form-control"  type="text"><br><br>
                <input name="tname" placeholder="Advance" class="form-control"  type="text"><br><br>
           	    <button type="button" class="btn btn-primary btn-lg">Search now....</button>
               </div>
	           </div>
               </div>      
              </div>
			  </div>
              </div>
			</div>	
          </form>			
		</div>	
 </body>
</html>
