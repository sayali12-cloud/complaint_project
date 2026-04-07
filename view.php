<?php  
 include('connection.php');
 $sql = "SELECT * FROM complaint";  
 $result = mysqli_query($connec, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>View</title>  
           <link rel="Stylesheet" href="home3.css">
      </head>  
     
      <style>

  body{
     background-image: url('c2.jpg');
  background-size: cover;
  width: 90%;
  height: 90%;
  }  

   h3{
     color:black;
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
    border: 2px solid black;
    color:black;

}
.btn{
     background-color: #4CAF50; 
  color: white;
  position: absolute;
  left: 45%;
  padding: 15px 32px;
  margin-top:-290px;
  margin-bottom:340px;
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
                  
                </div>
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

          <form action="updt.php"method="POST">
           <br />  
           <div class="container">  
                <h3 align="center">Grievence</h3><br />                 
                
                     <table border='2' align="center">  
                          <tr>  
                          <th>Roll No</th>
	                      <th>Full Name</th>
			              <th>Complaint</th>
			              <th>Subject</th>
                        </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["rollno"]; ?></td>  
                               <td><?php echo $row["fullname"];?></td>  
                               <td><?php echo $row["complaint"]; ?></td>  
                               <td><?php echo $row["subject"]; ?></td> 
                              
                                
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />
           <input type="submit" value="Proceed" name="Procced" class="btn"> 
          
      </form> 
      </body>  
 </html>