<?php  
 include('connection.php');
 $sql = "SELECT * FROM complaint";  
 $result = mysqli_query($conn, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Grievence Status </title> 
           <link rel="Stylesheet" href="home3.css">
          
      </head>  
      <style>
          
        body{
          background-image: url('grive.jpg');
         background-repeat: no-repeat;
         background-size: cover;
          }

          .container {
      border: 2px solid rgb(37, 39, 37);
      margin-bottom: 210px;
      margin-top:-100px;
      margin-left:-10px;
      width: 100%;
      border-radius: 28px;
      border:none;
  }



          table{
    width: 50%;
    border: 2px solid black;
    color:black;
}
th,td{
    height: 50px;
    text-align: center;
}
.btn{
     background-color: #4CAF50; 
  color: white;
  position: absolute;
  left: 45%;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
.btn:hover {
     background-color: #c7c0c0;;
}

</style>
      <body>  
      <header class="header">
        <div class="left">
            <img src="logo.jpg" alt="">
            <div> </div>
        </div>

        
     
        <div class="navbar">
            <div class="dropdown">
                <button class="dropbtn">Home
                
                </button>
                <div class="dropdown-content">
                <a href="home3.html">Home</a>
                  <a href="para2.html">About College</a>

                  
                </div>
              </div>
              <div class="dropdown">
                <button class="dropbtn">Admin
                  
                </button>
                <div class="dropdown-content">
                  
                 <a href="login.php">Login</a>
                 <a href="view.php">View Grievence</a>
                 <a href="updt.php">Update Grievence</a>
                
                  
                </div>
              </div>
          <div class="dropdown">
            <button class="dropbtn">Student
            
            </button>
            <div class="dropdown-content">
              <a href="login.php">Login</a>
              <a href="register.php">Registration</a>
              <a href="complaint.html">Add Grievence</a>
              <a href="solve.php">Solved Grievence </a>
            </div>
          </div>
        </div>
    </header>
        
          <form >
           <br />  
           <div class="container">  
                <h3 align="center"> Grievence Status</h3><br />                 
                
                     <table border='2' align="center">  
                          <tr>  
                          <th>Roll No</th>
			              <th>Subject</th>
                             <th>Status</th>
                        </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["rollno"]; ?></td>  
                               <td><?php echo $row["subject"];?></td>  
                               <td><?php echo $row["status"]; ?></td>   
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />
          
      </form> 
      </body>  
 </html>
