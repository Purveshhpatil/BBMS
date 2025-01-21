<?php
    include('connection.php');
    session_start();
?>
<html>
    <head>
    <title> Stock Blood List </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        td{
            width:200px;
            height:25px;
            
        }
        
    </style>
    </head>

    <body >
        <style>
        body {
            background-image: url("stbg.jpg");
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
                <h1 align="center">Stock Blood List</h1><br>
                <style>
                        h1{
                                font-size: 40px;
                           }
                           </style>
                <center>
                    <div> 
                    <table>
                    <style>
                        table {
                               width:35%;
                               
                                height: 100%; 
                                background-position: center;    
                                background-repeat: no-repeat;
                                background-size: cover;
                            }
                            </style>
                            
                        <tr>
                            <style>
                        tr {
                                font-size: 25px;
                           }
                           </style>

                        <td><center><b><font color="purple">Blood Group </font><b></center></td>
                            <td><center><b><font color="purple"> Quantity </font><b></center></td>
                            
                        </tr>
                       
                                <tr>
                                    <td><center><b>O+ <b></center></td>
                                    <td><center><b>
                                        <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='O+'");
                                            echo $row=$q->rowcount();
                                        ?>
                                    </b></center></td>    
                                </tr>
                                <tr>
                                    <td><center><b>B+ <b></center></td>
                                    <td><center><b>
                                    <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='B+'");
                                            echo $row=$q->rowcount();
                                    ?>
                                    </b></center></td>    
                                </tr>
                                <tr>
                                    <td><center><b>AB <b></center></td>
                                    <td><center><b>
                                    <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='AB+'");
                                            echo $row=$q->rowcount();
                                    ?>
                                    </b></center></td>    
                                </tr>
                                <tr>
                                    <td><center><b>O- <b></center></td>
                                    <td><center><b>
                                        <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='O-'");
                                            echo $row=$q->rowcount();
                                        ?>
                                    </b></center></td>    
                                </tr>
                                <tr>
                                    <td><center><b>B- <b></center></td>
                                    <td><center><b>
                                    <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='B-'");
                                            echo $row=$q->rowcount();
                                    ?>
                                    </b></center></td>    
                                </tr>
                                <tr>
                                    <td><center><b>AB- <b></center></td>
                                    <td><center><b>
                                        <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='AB-'");
                                            echo $row=$q->rowcount();
                                        ?>
                                    </b></center></td>
                                </tr>
                                <tr>
                                    <td><center><b>A- <b></center></td>
                                    <td><center><b>
                                    <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='A-'");
                                            echo $row=$q->rowcount();
                                    ?>
                                    </b></center></td>    
                                </tr>
                                <tr>
                                    <td><center><b>A+ <b></center></td>
                                    <td><center><b>
                                    <?php
                                            $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='A+'");
                                            echo $row=$q->rowcount();
                                    ?>
                                    </b></center></td>    
                                </tr>
                    </table>
                    </div>
                </center>
            </div>
          
          </div>
       
        
    </body>
</html>