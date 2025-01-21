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
            <div id="header" ><h1 align="center">Blood Bank Management System</h1></div>
            <div id="body">
            <center>
                <img src="quote-removebg-preview.png"
                <br><br>
</center>
                <center>
                <form action="" method ="post">
                    <style>
                        body {
                                background-image: url("bg.jpg");
                                background-color: #cccccc;
                                height: 100%; 
                                background-position: center;    
                                background-repeat: no-repeat;
                                background-size: cover;}
                  form{ 
                    background-color:lightGrey;
                    background-size: cover;
                    width: 300px;
                    border-radius:20px;
                    padding: 50px;
                
                }</style>
                <table align="center">
                    <tr>
                        <td width="200px" height="70px"><b>Enter Username :</b></td>
                        <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username" style ="width: 180px; height: 30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px"><b>Enter Password :</b></td>
                        <td width="200px" height="70px"><input type="password" name="ps" placeholder="Enter Password" style ="width: 180px; height: 30px; border-radius: 10px;"></td>
                    </tr>
                
                </table>
               
                <center><input type="submit" name="sub" value="Login"style ="width: 60%; height: 30px; border-radius: 15px; background-color:red;"></center>
                <center><h3><p align="center"> <a href="register.php"><font color="black">Forget Password ?</a></p></h3></center>
                <center><h3><p align="center"> <a href="register.php"><font color="black">Change Password !</a></p></h3></center>
                <center><h2><p align="center"> <a href="start.php"><font color="black"> Back</a></p></h2></center>
            
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