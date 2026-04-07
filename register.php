<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register.css">
</head> 
<?php
include ('connection.php');
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
  $check_emailid="select * from register_db where emailid='$email'";
  $data=mysqli_query($connec,$check_emailid);
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
    $query="insert into register_db(rollno,class,fullname,division,emailid,phoneno) values('$rollno','$class','$fname','$div','$email','$phone')";
  
    $rs = mysqli_query($connec,$query);
    if($query)
    {
     echo "<script> alert('Registration successfully')</script>";
     echo "<script>window.location.href = 'complaint.html';</script>"; 
    
    
    }
    else{
      echo"there is some problem";
    }
}
}
}
}
?>

<body>  
<p style="color:red">
  <?php
  
   if(isset($error))
   {
    echo $error;
    
   }
  ?></p>
  <form action=""method="POST">
  <center> 
     <h1> Student Registration Form</h1> </center>  
 
      <b> Enter Full Name</b>
 <input type="text" name="fullname" placeholder="Your name.." required > <br>
    
      <b>Enter Roll No</b>
  <input type="text" name="rollno" placeholder="Your Roll No.." required ><br>

       <b>Enter Class </b>
  <input type="text" name="class" placeholder="Your Class.." required><br>

        <b>Enter Division</b>
   <input type="text" name="division" placeholder="Your Division.." required><br>

        <b>Enter Email</b>
  <input type="text" name="emailid" placeholder="Your Email.." required><br>

        <b>Phone :</b>
   <input type="text" name="phoneno" placeholder="Country Code" / required> <br>  

       <b>Gender :</b>   
   <input type="radio" value="Male" name="gender"  > Male   
   <input type="radio" value="Female" name="gender"> Female   
   <input type="radio" value="Other" name="gender"> Other  
    <button type="submit" class="registerbtn" name="register">Register</button>
    
    
    <h4>Already have an account!!<a href="login.php"> Login</a></h4> <h4><a href="home3.html"> Go Back To Home-></a></h4> 
</form>  
</body>  
</html>  
