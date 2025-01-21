<?php
    include('connection.php');
    session_start();
?>
<html>
    <head>
    <title> Donor Registration </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <style>
    body {
            background-image: url("about.jpg");
            background-color: #cccccc;
                                height: 100%; 
                                background-position: center;    
                                background-repeat: no-repeat;
                                background-size: cover;
        }
        </style>
       
            <div  ><h1 align="center"> <a href="admin-home.php" style="text-decoration:none;color:black;">Blood Bank Management System<a></h1>
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
            <h1 align="center">Doner Registration</h1><br>
            <center>
                <div > 
                    <form action="" method="post"> 
                        <table>
                            <tr>
                                <style>
                                    td{
                                        font-size:25px;
                                    }
                                </style>
                                <td width="200px" height="50px"><b>First Name :</b></td>
                                <td width="250px" height="90px"><input type="text" name="name" placeholder="Enter First Name" ></td>
                                <td width="200px" height="50px"><b>Last Name :</b></td>
                                <td width="200px" height="50px"><input type="text" name="Lname" placeholder="Enter Last Name" ></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px"><b>Address :</b></td>
                                <td width="200px" height="50px"><textarea name="address" ></textarea></td>
                                <td width="200px" height="50px"><b>City :</b></td>
                                <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City" ></td>
                            </tr>
                            <tr>
                                <td width="200px" height="50px"><b>Age :</b></td>
                                <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age" ></td>
                                <td width="200px" height="50px"><b>Blood Group :</b></td>
                                <td width="200px" height="50px">
                                    <select name="bgroup">
                                        <option>O+</option>
                                        <option>B+</option>
                                        <option>AB+</option>
                                        <option>O-</option>
                                        <option>B-</option>
                                        <option>AB-</option>
                                        <option>A+</option>
                                        <option>A-</option>

                                    </select> 
                                </td>                             
                            </tr>
                            <tr>
                                <td width="200px" height="50px"><b>E-mail :</b></td>
                                <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter email" ></td>
                                <td width="200px" height="50px"><b>Mobile no. :</b></td>
                                <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter mobile no" ></td>
                            </tr>
                            
                               
                            
                        </table>  <br><br><br><br><br>     
                        <button style="background-color: aqua; width: 90px; height: 50px;"><input type="submit" name="sub" value="SUBMIT">   </button>   
                    </form>
                  <?php
                        if (isset($_POST['sub']))
                        {
                            $name=$_POST['name'];
                            $Lname=$_POST['Lname'];
                            $address=$_POST['address'];
                            $city=$_POST['city'];
                            $age=$_POST['age'];
                            $bgroup =$_POST['bgroup'];
                            $email=$_POST['email'];
                            $mno=$_POST['mno'];
                            
                            $q=$db->prepare("INSERT INTO doner_registration(name,Lname,address,city,age,bgroup,email,mno)
                            VALUES ( :name,:Lname,:address,:city,:age,:bgroup,:email,:mno)");
                            $q->bindValue('name',$name);
                            $q->bindValue('Lname',$Lname);
                            $q->bindValue('address',$address);
                            $q->bindValue('city',$city);
                            $q->bindValue('age',$age);
                            $q->bindValue('bgroup',$bgroup);
                            $q->bindValue('email',$email);
                            $q->bindValue('mno',$mno);
                            if($q->execute())
                            {
                                echo "<script>alert('Registered Successfully')</script>";
                            }
                            else
                            {
                                echo "<script>alert('Registered Successfully')</script>";
                            }

                        }
                        
                    ?>
                   
                  </div>
              </center>
            </div>
              
            
          </div>
        
        
    </body>
</html>