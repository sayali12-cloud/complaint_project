<?php  
 include('connection.php');
 $sql = "SELECT * FROM complaint_db";  
 $result = mysqli_query($connec, $sql);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>update</title>   
      </head>  
      <style>
          table{
    width: 50%;
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
          <form method="POST">
           <br />  
           <div class="container">  
                <h3 align="center">Status</h3><br />                 
                
                     <table border='2' align="center">  
                          <tr>  
                          <th>Roll No</th>
	                      <th>Full Name</th>
			              <th>Complaint</th>
                          <th>Status</th>
			              
                        </tr>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                          ?>  
                          <tr>  
                               <td><?php echo $row["rollno"]; ?></td>  
                               <td><?php echo $row["fullname"];?></td>  
                               <td><?php echo $row["subject"]; ?></td>  
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
