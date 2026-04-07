<?php
 include('connection.php');
 if(isset($_POST['submit']))
	{
   $fname=$_POST['fname'];
   $cno=$_POST['cno'];
   $email=$_POST['email'];
   $soc=$_POST['soc'];
   $des=$_POST['des'];
   $from=$_POST['from'];
   $age=$_POST['age'];
   $Busty=$_POST['Busty'];
   $gen=$_POST['gen'];
   $cost=$_POST['cost'];

	
$sql="insert into buspass(fullname contactno,email,source,destination,date,age,passtype,gender,cost) 
values('$fname','$cno','$email','$soc','$des','$from','$age','$Busty','$gen','$cost')";
$rs = mysqli_query($connec,$sql);
    if($sql)
   {
	   echo "<script> alert('Buss pass Booked')";
   }
   else{
	   echo"there is some problem";
   }
	}
   
?>