
        <?php
        $Firstname="";
         $Lastname="";
         $Department="";
         $DOB="";
         $Username="";
         $Password="";
         $Cpassword="";
         $Email="";
         $Mobile="";
         $errors=array();
        $db=mysqli_connect('localhost' , 'root','' ,'Project1');
         if((isset($_POST['register'])))
         {
             $Firstname=mysqli_real_escape_string($db,$_POST['Firstname']);
             $Lastname=mysqli_real_escape_string($db,$_POST['Lastname']);
             $Department=mysqli_real_escape_string($db,$_POST['Department']);
            // $DOB=$_POST['DOB'];
			              $DOB=mysqli_real_escape_string($db,$_POST['DOB']);

             $Username=mysqli_real_escape_string($db,$_POST['Username']);
             $Password=mysqli_real_escape_string($db,$_POST['Password']);
             $Cpassword=mysqli_real_escape_string($db,$_POST['Cpassword']);
             $Email=mysqli_real_escape_string($db,$_POST['Email']);
             $Mobile=mysqli_real_escape_string($db,$_POST['Mobile']);
           if(empty($Firstname))
             {
                 array_push($errors,"Firstname is required");
             }
             if(empty($Lastname))
             {
                 array_push($errors,"Lastname is required");
             }
              if(empty($Department))
             {
                 array_push($errors,"selection is required");
             }
            if(empty($DOB))
             {
                 array_push($errors,"DOB is required");
             }
             if(empty($Username))
             {
                 array_push($errors,"Username is required");
             }
             if(empty($Password))
             {
                 array_push($errors,"Password is required");
             }
                        if(empty($Cpassword))
             {
                 array_push($errors,"confirm Password is required");
             }
               if(empty($Email))
             {
                 array_push($errors,"Email is required");
             }
                         if(empty($Mobile))
             {
                 array_push($errors,"Mobile no. is required");
             }
            if($Password !=$Cpassword)
            {
                array_push($errors,"Password are not required");
            }
        if(count($errors)==0)
        {    //echo $DOB;
            //$password=md5(Password);//Encrypt the password before stroing db
          $sql="INSERT INTO registration (Firstname,Lastname,Department,DOB,Username,Password,Cpassword,Email,Mobile)values('$Firstname','$Lastname','$Department','$DOB' ,'$Username','$Password','$Cpassword','$Email','$Mobile')";   
         mysqli_query($db, $sql);
        }
  
         }
         
        ?>
   