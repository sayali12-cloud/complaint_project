<html>
    <head>
        <title> Update Grievence </title>
    </head>
    <link rel="Stylesheet" href="home4.css">
<style>
  body {
         background-image: url('cell2.jpg');
         background-repeat: no-repeat;
         background-size: cover;
      }
      
      
      .container {
  border:none;
  width: 450px;
  height: 170px;
  margin-left:350;
  margin-right: 200px;
  margin-top: 80px;
  margin-bottom:100px;
  border-radius: 5px;
  background-color: #cfc6c6;
  padding: 10px;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: lightseagreen;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
.navbar {
color:rgb(245, 241, 241);
overflow: hidden;
width: 800px;
margin: auto;
color:lightseagreen;
font-size: 30%;
font-family: Arial;

}

.btn{
  width:20%;
  height:40px;
  margin-left:25%;
  color:blue;
}

</style>

    <body>
   
    <header class="header">
        <div class="left">
            
            <div> </div>
        </div>

        
     
        <div class="navbar">
        <div class="dropdown">
          <a href="home3.html">Home</a>
                
                </button>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Admin
                  
                </button>
                <div class="dropdown-content">
                  
                 <a href="login.html">Login</a>
                 <a href="view.php">View Grievence</a>
                 <a href="updt.php">Update Grievence</a>
                
                  
                </div>
              </div>
          <div class="dropdown">
            <button class="dropbtn">Student
            
            </button>
            <div class="dropdown-content">
              <a href="login.html">Login</a>
              <a href="complaint.html">Add Grievence</a>
              <a href="status.php">View Status</a>
            </div>
          </div>
        </div>
    </header>

        <form method="POST" action="">
        <div class="container">
        <pre>
           Enter Complaint:        <input type="text" name="compl"><br>

           Enter Complaint Status:  <input type='text' name='status' palceholder='Complaint Status' required><br>
         <input type='submit' name='updt' value='Update' class="btn">
</div>
</pre>

<?php
include('connection.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
$query="select subject from complaint where subject='".$_POST['compl']."'";
$rs = mysqli_query($conn,$query);
$cnt=mysqli_affected_rows($conn);
if(!$cnt)
{
    echo"Complaint Not Found";
}
else
if(isset($_POST['updt']))
{
  $query="update complaint set status='".$_POST['status']."' where subject='".$_POST['compl']."'";
  $rs = mysqli_query($conn,$query);
if($query)
{
    echo"<script>alert('Record updated Successfully');</script>";
}
else{
    echo"there is some problem";
}
}
}
?>
</form>
</body>
</html>
