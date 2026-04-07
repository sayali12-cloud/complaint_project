<html>
    <head>
        <title> Update Grievence </title>
    </head>
    <body>
        <form method="POST" >
            <pre>
            <select id="Complaint" name="Complaint">
           <option value="select">Select</option>
          <option value="Hostel">Hostel</option>
</select>

        <input type="submit"  name="Update" value="submit">
</pre>
</form>

<?php
include('connection.php');
if (isset($_POST['apply']))
{
$alid=mysqli_real_escape_string($con,$_POST['alid']);
$eid=mysqli_real_escape_string($con,$_POST['alid']);

$query="insert into eventreg(alid,eid)values('$alid','$eid')";
$rs = mysqli_query($con,$query);
if($query)
{
 echo "<script> alert('Grievence Solve Successfully ')</script>";
}
  
}
?>
</body>
</html>