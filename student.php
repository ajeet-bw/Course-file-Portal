<?php
session_start();

 if(isset($_SESSION['user_session'])!="")
 {
  
  if($_SESSION['rank']=="admin")
    header("Location: admin.php");
  if($_SESSION['rank']=="done")
     header("Location: done.php");

 }
  else
    header("Location: index.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUIZ</title>
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
      <a class="navbar-brand" href="#">QUIZ</a>
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
  $aa12=mysql_query("SELECT `q_id` FROM `question`");
  $row12= mysql_fetch_array($aa12);
      $row12['q_id'];
  ?> 
    <li class="active col-sm-4" style="margin-bottom: 10px;"><a data-toggle="tab" href="#<?php echo $row12['q_id'];?>" class="btn btn-info btn-lg but" role="button"><?php echo "0".$row12['q_id'];  ?> </a></li>
    <?php while($row12= mysql_fetch_array($aa12)) { 
    ?>
    <li class="col-sm-4" style="margin-bottom: 10px;"><a data-toggle="tab" href="#<?php echo $row12['q_id'];?>" class="btn btn-info btn-lg but" role="button"><?php if ($row12['q_id']<10)echo "0".$row12['q_id']; else echo $row12['q_id']; ?>
    	
    </a></li>
<?php 
      $pp=$row12['q_id']; }

?>
  </ul>

    </div>
    </div>
    <div class="col-sm-4 text-left"> 
<form action="final.php" method="POST">
  <div class="tab-content">
  <?php
  
  $aa=mysql_query("SELECT * FROM `question`");
  $row1= mysql_fetch_array($aa);
      $q_id1=$row1['q_id'];
      
  ?> 
    <div id="1" class="tab-pane fade in active">
    
      <h1><?php echo "Ques".$q_id1; ?></h1>
      <p><?php echo $row1['ques']; ?></p>
     <?php if($row1['image']!="") { 
      echo "<img src='".$row1['image']."' width=560px height=315px/>";?>
     <br>
     <?php } 
      ?>
      <?php if($row1['video']!="") { 
echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/1RIHF1U3KZc" frameborder="0" allowfullscreen></iframe>'?>
<br>
<?php
}

?>

      <?php $ab=mysql_query("SELECT * FROM `options` WHERE `q_id`='$q_id1'");
  while($row2= mysql_fetch_array($ab)) {
     
      ?>
 <input type="radio" value="<?php echo $row2['o_id'];?>" name="<?php echo $q_id1; ?>" />&nbsp;<?php echo $row2['opt'];?><br>
      <?php
      }

      ?>
     
    </div>
    <?php
   while($row1= mysql_fetch_array($aa)) {
      $q_id2=$row1['q_id'];?>  

    <div id="<?php echo $q_id2; ?>" class="tab-pane fade">
     <h1><?php echo "Ques".$q_id2; ?></h1>
      <p><?php echo $row1['ques']; ?></p>
       <?php if($row1['image']!="") { 
      echo "<img src='".$row1['image']."' width=560px height=315px/>";?>
      <br>
      <?php } 
      ?>
            <?php if($row1['video']!="") { 
echo'<iframe width="560" height="315" src='.$row1['video'].' frameborder="0" allowfullscreen></iframe>'?>
<br>
<?php
}

?>
      <?php $ad=mysql_query("SELECT * FROM `options` WHERE `q_id`='$q_id2'");
  while($row4= mysql_fetch_array($ad)) 
  { 
     ?>
      <input type="radio" value="<?php echo $row4['o_id'];?>" name="<?php echo $q_id2; ?>" />&nbsp;<?php echo $row4['opt'];?><br>
    <?php
      }
      ?>
      <?php if ($q_id2==$pp) {?>
      <input type="submit" name="">
      <?php }?>
      </div>    
 <?php 
}
 ?>
  
    </div>
    </form>
   </div>
  </div>
    </div> 
</body>
</html>