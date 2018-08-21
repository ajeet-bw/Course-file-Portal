<HTML>
<head>
<title>COURSE FILE</title>
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
<h1 class="text-center">REGISTER</h1>
</div>
<div class="modal-body">

<div class="form-group">
<input type="text" class="form-control input-lg" placeholder="name" name="name">
</div>
<div class="form-group">
<input type="email" class="form-control input-lg" placeholder="email" name="email">
</div>
<div class="form-group">
<input type="password" class="form-control input-lg" placeholder="*******" name="pass">
</div>
<div class="form-group">
<input type="number" class="form-control input-lg" placeholder="9720123222" name="pno">
</div>

<div class="form-group">
<input type="submit" class="btn btn-block btn-lg btn-primary" value="submit" name="submit">
<span class="pull-right"><a href="index.php">log In</a></span>
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

    mysqli_query($conn,"INSERT INTO `tbl_users`(`user_name`,`user_email`,`user_password`,`rank`) VALUES ('$name', '$email','$pass','teacher')"); 

}
?>
</html>
