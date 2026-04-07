 <!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> Login Page </title>  
<style>   
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: rgb(224, 63, 38);  
  background-image: url('clg6.jpg');
  background-size: cover;
  width: 100%;
  height: 100%;
  
 
}  
h1{
    color: ;
}
button {   
       background-color:lightblue;   
       width: 60%;  
       color:black;
        padding: 10px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
   
 input[type=text], input[type=password] {   
        width: 80%;   
        margin: 20px 0;  
        padding:6px 5px;   
        display: inline-block;   
        border: 2px solid rgb(48, 48, 44);   
        box-sizing: border-box;   
    }  
    label{
        color:black;
    }
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
     width:40%;

        padding: 10px;   
        border: 2px solid black;
    }   
</style>   
</head>    
<body>    
    <center> <h1> Login To System </h1> </center>   
    <form method="POST" >
        <center>
        <div class="container">   
            <label>Username : </label>   
            <input type="text" placeholder="Enter Username" name="username" required>  <br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" required><br>  
            <input type="submit" name="login" value="Login"> <br>
            <button type="button" class="cancelbtn"> Cancel</button> <br> 
            <h4>Not a Member?<a href="register.php"> Register Here</a></h4> 
              <h4><a href="home3.html">Go Back to Home-></a></h4> 
       </div>
    </center>    
    </form>     
</body>     
</html>
<?php
include ('connection.php');
    if(isset($_POST['login']))
    {
        
        $uname=$_POST['username'];
        $pass=$_POST['password'];
        $sql="select * from login_db where username='$uname' and password='$pass'";
        $rs=mysqli_query($connec,$sql);
        $row=mysqli_fetch_array($rs,MYSQLI_ASSOC);
        $cnt=mysqli_num_rows($rs);
        if ($cnt == 1) {
            echo "<script>alert('Login Successful');</script>";
        } 
    }
?>
