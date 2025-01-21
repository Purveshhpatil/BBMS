<?php
    include('connection.php');
    session_start();
?>
<html>
    <head>
        <title> Admin Login </title>
        <link rel="stylesheet" types="text/css" href="css/style.css">
    </head>
    
    <body>
    
            <div ><h1 align="center" style="color:red;  font-size:40px;"> <a href="admin-home.php" style="text-decoration:none;color:black;">Blood Bank Management System</a></h1>
          
        </div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un)   
                {
                    header("Location:index.php");
                }
                ?>
              <h2 align="center" style="font-size:30px;">Welcome</h2><br>
              <style>
                        body {
                                background-image: url("img 1.jpg");
                                background-color: #cccccc;
                                height: 100%; 
                                background-position: center;    
                                background-repeat: no-repeat;
                                background-size: cover;
                            }
                            </style>
              
              <center>
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;"><a href="doner-registration.php">Donor Registration</a></button>
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;"><a href="doner-list.php"> Registered Donor list</a></button>
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;"><a href="stock-blood-list.php">Stock Blood List</a></button>
                
                <br><br>
            
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;"><a href="exchange-blood.php">Exchange Blood List</a> </button>
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;"><a href="doctor-list.php"> List of Doctors </style></a></button>
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;"><a href="delete-donor.php">Delete the User</a></button>
                  <br><br>
                  <button style="margin: 10px;border-radius:20px; width: 200px;text-decoration:none;background-color:aqua ; height: 100px; align-items: center; margin: top 10px;px;" "><a href="outstock.php">Out Stock Blood List</a> </button>
                </center>
            
            </div>
            <br><br><br><br><br><br><br><br>
            <center><button style="margin: 10px;border-radius:30px; background-color: aqua; width: 150px; height: 50px; align-items: center"><a href="about-us.php">about us </style></a></button></center>
            <div >
                <h2><p align="center"> <a href="start.php"><font color="white">Logout</a></p></h2>
            </div>

    </body>
</html>