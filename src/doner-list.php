<?php
    include('connection.php');
    session_start();
?>
<html>
    <head>
    <title align="center">Donor List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        td{
            width:200px;
            height:35px;
        }
        
    </style>
    </head>

    <body>
    <style>
        body {
            background-image: url("blood list.jpg");
            background-color: #cccccc;
                                height: 100%; 
                                background-position: center;    
                                background-repeat: no-repeat;
                                background-size: cover;
        }
        </style>
            <div id="header" ><h1 align="center"> <a href="admin-home.php" style="text-decoration:none;color:black;">Blood Bank Management System<a></h1>
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
                <h1 align="center">Doner List</h1><br>
                <center>
                    <div > 
                    <table>
                    <style>
        tr
        {
            font-size:25px;
        }
        </style>
        <td><center><b><font color="darkyellow">First Name </font><b></center></td>
                            <td><center><b><font color="darkyellow">Last Name </font><b></center></td>
                            <td><center><b><font color="darkyellow">Address </font><b></center></td>
                            <td><center><b><font color="darkyellow">City </font><b></center></td>
                            <td><center><b><font color="darkyellow">Age </font><b></center></td>
                            <td><center><b><font color="darkyellow">Blood Group </font><b></center></td>
                            <td><center><b><font color="darkyellow">E-mail </font><b></center></td>
                            <td><center><b><font color="darkyellow">Mobile No.</font><b></center></td>
                        </tr>
                        <?php

                           $q=$db->query("SELECT * FROM doner_registration");
                           while($r1=$q->fetch(PDO::FETCH_OBJ))
                            {
                                ?>
                                <tr>
                                    <td><center><b><?=$r1->name;?> <b></center></td>
                                    <td><center><b><?=$r1->Lname;?> <b></center></td>
                                    <td><center><b><?=$r1->address;?> <b></center></td>
                                    <td><center><b><?=$r1->city;?> <b></center></td>
                                    <td><center><b><?=$r1->age;?> <b></center></td>
                                    <td><center><b><?=$r1->bgroup;?> <b></center></td>
                                    <td><center><b><?=$r1->email;?> <b></center></td>
                                    <td><center><b><?=$r1->mno;?> <b></center></td>
                                </tr>
                                <?php
                            }
                            ?>
                        
                    </table>
                    </div>
                </center>
            </div>
           
          </div>
        
    </body>
</html>