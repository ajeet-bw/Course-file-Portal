<!DOCTYPE html>
<html lang="en">
<head>
  <title>COURSE FILE</title>
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
      <a class="navbar-brand" href="#">COURSE FILE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="chat.php">chat</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
  <div class="container-fluid"> 
    <ul style="list-style-type: none; display: inline-grid; margin-left:-50px;">
     <?php
  include "db.php";
  //$an=$_SESSION['subject'];
  $aa12=mysqli_query($conn,"SELECT `q_id` FROM `question` WHERE `video`='5'");
  $row12= mysqli_fetch_assoc($aa12);
  ?> 
    <li class="active col-sm-4" style="margin-bottom: 10px;"><a data-toggle="tab" href="#<?php echo $row12['q_id'];?>" class="btn btn-info btn-lg but" role="button"><?php echo "0".$row12['ques'];  ?> </a></li>
    <?php while($row12= mysqli_fetch_assoc($aa12)) { 
    ?>
    <li class="col-sm-4" style="margin-bottom: 10px;"><a data-toggle="tab" href="#<?php echo $row12['q_id'];?>" class="btn btn-info btn-lg but" role="button"><?php echo $row12['ques'];?>
    	
    </a></li>
<?php 
      $pp=$row12['q_id']; }

?>
  </ul>
    </div>
    </div>
    <div class="col-sm-4 text-left"> 
  <div class="tab-content">
  <?php
  
      $aa=mysqli_query($conn,"SELECT * FROM `question`");
      $row1= mysqli_fetch_assoc($aa);
      $q_id1=$row1['q_id'];
      
  ?> 
    <div id="1" class="tab-pane fade in active">
      <h1><?php echo $row1['ques']; ?></h1>
     <?php if($row1['image']!="") { 
      echo "<img src='".$row1['image']."' width=560px height=315px/>";?>
	  echo "<iframe src=\"file.pdf\" width=\"100%\" style=\"height:100%\"></iframe>";
     <br>
     <?php } 
      ?>    
    </div>
    <?php
   while($row1= mysql_fetch_assoc($aa)) {
      $q_id2=$row1['q_id'];?>  

    <div id="<?php echo $q_id2; ?>" class="tab-pane fade">
     <h1><?php echo "Ques".$q_id2; ?></h1>
      <p><?php echo $row1['ques']; ?></p>
       <?php if($row1['image']!="") { 
      echo "<img src='".$row1['image']."' width=560px height=315px/>";?>
	   <br>
	   
	   </div>
   </div>
  </div>
    </div> 
</body>
</html>