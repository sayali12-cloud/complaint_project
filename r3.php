<?php
$fname=$_POST['fullname'];
$rollno=$_POST['rollno'];
$class=$_POST['class'];
$div=$_POST['division'];
$email=$_POST['emailid'];
$phone=$_POST['phoneno'];


  $dbuser="root";
  $dbpass="nikita";
  $host="localhost";
  $dbname="project";
  $connec=new mysqli($host,$dbuser,$dbpass,$dbname);
  if($connec->connect_error)
  {
      die("connection failed:".$connec->connect_error);
  }  
 
	 $sql="insert into register_db(rollno,class,fullname,division,emailid,phoneno) values('$rollno','$class','$fname','$div','$email','$phone')";
  
 if($connec->query($sql)==true)
     {
         echo"sucessfully Inserted";
     }
     else {
         echo"Error:".$sql."<br>".$connec->error;
     }
     $connec->close();
  ?>