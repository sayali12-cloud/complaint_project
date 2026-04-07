<?php
$fname=$_POST['fullname'];
$rollno=$_POST['rollno'];
$complaint=$_POST['complaint'];
$subject=$_POST['subject'];

  $dbuser="root";
  $dbpass="nikita";
  $host="localhost";
  $dbname="project";
  $connec=new mysqli($host,$dbuser,$dbpass,$dbname);
  if($connec->connect_error)
  {
      die("connection failed:".$connec->connect_error);
  }  
 
	 $sql="insert into complaint_db(fullname,rollno,complaint,subject) values('$fname','$rollno','$complaint','$subject')";
  
     if($connec->query($sql)==true)
     {
         echo"sucessfully Inserted";
     }
     else {
         echo"Error:".$sql."<br>".$connec->error;
     }
     $connec->close();
  ?>