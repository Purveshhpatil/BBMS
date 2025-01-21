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
                                background-image: url("start.jpg");
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
                        <td width="200px" height="70px"><b>Enter Name :</b></td>
                        <td width="100px" height="70px"><input type="text" name="name" placeholder="Enter Username" style ="width: 180px; height: 30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px"><b>Enter email :</b></td>
                        <td width="100px" height="70px"><input type="text" name="email" placeholder="Enter email" style ="width: 180px; height: 30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px"><b>Enter Username :</b></td>
                        <td width="100px" height="70px"><input type="text" name="username" placeholder="Enter Username" style ="width: 180px; height: 30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px"><b>Enter Password :</b></td>
                        <td width="200px" height="70px"><input type="password" name="password" placeholder="Enter Password" style ="width: 180px; height: 30px; border-radius: 10px;"></td>
                    </tr>
                
                </table>
                <center><input type="submit" name="sub" value="Register"style ="width: 60%; height: 30px; border-radius: 15px; background-color:red"></center>
                <center><h2><p align="center"> <a href="index2.php"><font color="black">Back</a></p></h2></center>
            
                </form>
            </center>
            <?php
                        if (isset($_POST['sub']))
                        {
                            $name=$_POST['name'];
                            $username=$_POST['username'];
                            $password=$_POST['password'];
                            $email=$_POST['email'];
                            
                            $q=$db->prepare("INSERT INTO user_registration(name,email,username,password)
                            VALUES ( :name,:email,:username,:password)");
                            $q->bindValue('name',$name);
                            $q->bindValue('email',$email);
                            $q->bindValue('username',$username);
                            $q->bindValue('password',$password);
                           
                            if($q->execute())
                            {
                                echo "<script>alert('Registered Successfully')</script>";
                            }
                            else
                            {
                                echo "<script>alert('Registered Unsuccessfully')</script>";
                            }
                        }
                ?>

            </div>
          
        </div>
    </body>
</html>