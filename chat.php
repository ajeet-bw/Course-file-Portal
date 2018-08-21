<?php
session_start();

include('db.php');

 if(isset($_SESSION['user_session'])=="")
 {
  
    header("Location: student.php");


 }
$a=$_SESSION['user_session'];
$ss="SELECT * FROM `tbl_users` WHERE `user_id` ='$a'";
$check = mysql_query($ss);
$row=mysql_fetch_assoc($check);
$ip=$row['user_name'];
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="font/css/font-awesome.css">
  <link rel="stylesheet" href="font/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  .head{height: 460px;}
</style>
<script>
function shivam() 
  {
    var sess="<?php echo $ip;?>";
    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({                                      
      url: 'chatajaxread.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var i=0;
        var x="";
        while(data.data[i])
        {
if (sess==String(data.data[i]['user'])) {
         x+="<div style=\"background-color:#DAF7A6;border-radius:5px;padding:10px;float:right;\"><div style=\"width:300px;\">"+String(data.data[i]['chat'])+"</div></div><br><br><br>";
}
else
{
   x+="<div style=\"background-color:#D5DBDB  ;border-radius:5px;padding:10px;float:left;\"><div style=\"color:green;\">"+String(data.data[i]['user'])+"</div><br><div style=\"width:300px;\">"+String(data.data[i]['chat'])+"</div></div><br><br><br><br>";
}

       i++;
                //get name
               
        }
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
           //Set output element html
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
      
     $('#output').html(x);
      } 
    });
  }

setInterval(shivam,100);







$(function() {
$(".submit_button").click(function() {
var textcontent = $("#content").val();
var dataString = 'content='+ textcontent;
if(textcontent=='')
{
alert("Enter some text..");
$("#content").focus();
}
else
{
$("#flash").show();
$("#flash").fadeIn(400).html('<span class="load">Loading..</span>');
$.ajax({
type: "POST",
url: "chatajaxwrite.php",
data: dataString,
cache: true,
success: function(html){
$("#show").after(html);
document.getElementById('content').value='';
$("#flash").hide();
$("#content").focus();
}  
});
}
return false;
});
});
</script>
</head>
<body style="background-image: url('back.jpg');">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">BRANCH SELECTOR</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li class="active"><a href="chat.php">Chat</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<form class="col-md-12 center-block "  action="" method="POST" name="form">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header" style="background-color:#CCD1D1  ">
<h1 class="text-center" >Chat</h1>
</div>
<div class="modal-body " style="background-color:#eee;">

<div class="form-group">

<div class="form-control input-lg" style="height: 40%;overflow: scroll;background-image: url('back.jpg');" id="output">
</div><br>
<div class="col-xs-9">
<input class="form-control input-lg" placeholder="enter text" name="content" id="content" rows="1" >
</input>
</div>
</div>

<div class="media-body">
<div class="form-group col-sm-6">
<div class="form-group">
    
 <button type="submit" value="submit" name="submit" class="submit_button" style=" width: 70px;

 
  font-size: 30px;
  line-height: 1.33;
  border-radius: 30px;" ><i class="fa fa-paper-plane" aria-hidden="true" ></i></button>

</div>
</div>
</div>
</div>
</div>
</div>
</form>
</form>
</body>
</html>