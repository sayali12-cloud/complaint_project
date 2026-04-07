
<?php
include ('connection.php');
?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="reg.css">
</head>
<?php
$error="";
if(isset($_POST['register']))
{
    
$fname=$_POST['fullname'];
$rollno=$_POST['rollno'];
$class=$_POST['class'];
$div=$_POST['division'];
$email=$_POST['emailid'];
$phone=$_POST['phoneno'];
if(empty($fname))
  {
    $error="fullname is required";
  }
  if(empty($rollno))
  {
    $error="rollno is required";
  }
  if(empty($class))
  {
    $error="class is required";
  }
  if(empty($div))
  {
    $error="division is required";
  }
  else  if(empty($email))
  {
    $error="emailid is required";
  }
  else  if(empty($phone))
  {
    $error="Phone number is required";
  }
  
   else if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
        $error = "Name must contain only alphabets and space";
        }
       else if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $error = "Please Enter Valid Email ID";
        }
       else  if(strlen($phone) < 10) {
            $error = "Mobile number must be minimum of 10 characters";
        }
        
else
{
  $check_email="select * from register_db where emailid='$email'";
  $data=mysqli_query($connec,$check_email);
  $r=mysqli_fetch_array($data);
  if($r>0){  
    $error="email already exist";
  }
  else{
    $check_fname="select * from register_db where fullname='$fname'";
  $data=mysqli_query($connec,$check_fname);
  $r=mysqli_fetch_array($data);
  if($r>0){  
    $error="name already exist";
  }
else
{
    $sql="insert into register_db(rollno,class,fullname,division,emailid,phoneno) values('$rollno','$class','$fname','$div','$email','$phone')";
  
    $rs = mysqli_query($connec,$sql);
    if($sql)
    {
     echo "<script> alert('Record successfully inserted')</script>";
    }
}
}
}
}
?>
<body>  
  <form method="POST">
    <?php
      echo "$error";
    ?>
  <center> 
     <h1> Student Registration Form</h1> </center>  
     

  Enter Full Name<input type="text" name="fullname" placeholder="Your name.."><br>
    
  Enter Roll No<input type="text" name="rollno" placeholder="Your Roll No.."><br>

  Enter Class <input type="text" name="class" placeholder="Your Class.."><br>

  Enter Division <input type="text" name="division" placeholder="Your Division.."><br>

  Enter Email<input type="text" name="emailid" placeholder="Your Email.."><br>

  Phone :  <input type="text" name="phoneno" placeholder="Country Code" /> <br>  

   Gender :   
   <input type="radio" value="Male" name="gender" checked > Male   
   <input type="radio" value="Female" name="gender"> Female   
   <input type="radio" value="Other" name="gender"> Other  
    <button type="submit" name="register" class="registerbtn">Register</button>
    
    <h4>Already have an account!!<a href="login.html"> Login</a></h4> 

  
</form>  
</body>  
</html>  
