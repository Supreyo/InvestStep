 <?php

session_start();  //starting the seasion

$servername = "localhost";
$username = "fareedt_UserData";
$password = "littletrees";
$dbname = "fareedt_UserData";
 
$mysqli = new mysqli('localhost','fareedt_UserData','littletrees' , 'fareedt_UserData');
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
} 
// Check connection

if (isset($_POST["Cre"])){
  
  
  $name = $_REQUEST['name'];
$username = $_REQUEST['uname'];
$password = $_REQUEST['pass'];


$sql = 'INSERT INTO login (name, username, password) VALUES( "'.$name.'", "'.$username.'", "'.$password.'")';

  
  if ($mysqli ->query($sql)) {
            printf("New User Created.<br />");
         }
         if ($mysqli->errno) {
            printf("Could not create New User<br />", $mysqli->error);
         }

  
} 



if (isset($_POST["Cre1"])){
  
    $id = $_REQUEST['unameDel'];
  
    
  $sql = "DELETE FROM `login` WHERE `username`='$id'";
   
  if ($conn->query($sql)) {
            printf("<h3>RowDeleted </h3>");
         }
         if ($mysqli->errno) {
            printf("Could not create table: %s<br />", $mysqli->error);
         }




  
} 

 ?>

<html lang="en">
<head>

<title>Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!-- link for bootstrap styling -->
<link rel="stylesheet" href="css/styles.css"> <!-- external css file -->

</head>
<body style="background-color:#1E1C1C;">
   <h1 style="text-align: center; color: #FFFAF0; margin-bottom: 30px;margin-top: 20px;">Admin Dashboard</h1>
  
	<nav class="navbar navbar-default navbar-expand-xl navbar-light" style="background-color: #FFFAF0;"><!-- nav tag for a menu-->
		<!-- Collection of nav links, forms, and other content for toggling -->
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			</ul>			
		</div>
	</nav>
    <div class="container"> <!--holds all users and add user function  -->
        <div class="card" style="background-color: #FFFAF0;">
            <div class="card-header">
                <div class="row">
                  
                    <div class="col-sm-6">
                      
                      
                      
                      
                      
                        <h2>New User</h2>
                      
                      <form  method="post">
    <!--text input for the details-->
<input type="text"  id="fname" name="name" placeholder="Full Name" class="login-input">


  <input type="text"  id="uname" name="uname" placeholder="Username" class="login-input">

  <input type="text"  id="pass" name="pass" placeholder="Password" class="login-input">

    
      <input type="submit" name="Cre" value="Create user">

    
   
    
    
    

    
                      </form>
                      
                    
            </div>
                  
                  
                  
                  
                  
                  
                    <div class="">
                      <br>
                        <h2>Delete users</h2>
                      


  <input type="text"  id="uname" name="unameDel" placeholder="Username" class="login-input">
                      
                  
                
      <input type="submit" name="Cre1" value="Create user">

                    
            </div>
                  
                  
                      <div class="">
                      <br>
                        <h2>Delete users</h2>
                    
            </div>
                  
                  <br>
                  
                  <h2> Current Users:</h2>
                  
                  
                  
                  
                  
                  
            <div class="card-body">
        
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Password</th>
                        </tr>
                      
                      
                    </thead>
                    <tbody>

                        <?php
                        // Attempt select query execution
                        $sql = "SELECT * FROM login";
                        if($result = $mysqli->query($sql)){
                            if($result->num_rows > 0){
                                while($row = $result->fetch_array()){
                        ?><!-- prints user records  -->
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td>
                                <a href="edit_user.php?userid=<?php echo $row['id']; ?>" class="btn btn-success">
                                    <span>Edit</span>
                                </a>
                                <a href="delete_user.php?userid=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?');">
                                    <span>Delete</span>
                                </a>
                            </td>
                        </tr>
                        <?php
                                }
                                // Free result set
                                $result->free();
                            } else{
                                echo "<p class='lead'><em>No records were found.</em></p>";
                            }
                        } else{
                            echo "ERROR: Could not execute $sql. " . $mysqli->error;
                        }
                                            
                        // Close connection
                        $mysqli->close();
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    
</body>
</html> 
