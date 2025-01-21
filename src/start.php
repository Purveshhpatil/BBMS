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
  
        <div id ="full">
            <div id="inner_full"></div>
            <div ><h1 align="center" style="font-size:50px">Blood Bank Management System</h1></div><br><br>
            <div id="body">
         
                <center>
                <form action="" method ="post">
                    <style>
                        body {
                                background-image: url("start.png");
                                background-color: #cccccc;
                                height: 100%; 
                                background-position: center;    
                                background-repeat: no-repeat;
                                background-size: cover;}
                  form{ 
                
                    background-size: cover;
                    width: 300px;
                    border-radius:20px;
                    padding: 50px;
                
                }</style>
               
                <button style="margin: 10px;border-radius:20px; width: 150px;text-decoration:none;background-color:aqua ; height: 75px; align-items: center; margin: top 10px;px;"><a href="index.php">Admin</a></button>
                <button style="margin: 10px;border-radius:20px; width: 150px;text-decoration:none;background-color:aqua ; height: 75px; align-items: center; margin: top 10px;px;"><a href="index2.php">User</a></button>
                
            
                </form>
            </center>
                <?php
                if(isset($_POST['sub']))
                {
                     $un=$_POST['un'];
                     $ps=$_POST['ps'];
                     $q=$db->prepare("SELECT * FROM admin WHERE uname='$un' AND pass='$ps'");
                     $q->execute();
                     $res=$q->fetchAll(PDO::FETCH_OBJ);
                     if($res)
                     {
                         $_SESSION['un']=$un;
                         header("Location:admin-home.php");
                     }
                     else
                    {
                        echo "<script> alert('Wrong User')</script>";
                    }
                     
                }
                ?>

            </div>
          
        </div>
    </body>
</html>