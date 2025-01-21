<?php
    include('connection.php');
    session_start();
?>
<html>
    <head>
    <title >Donor List</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
        td{
            width:200px;
            height:35px;
        }
        
    </style>
    </head>

    <body>
        <div id ="full">
            <div id="inner_full"></div>
            <div id="header" ><h1 align="center"> <a href="admin-home.php" style="text-decoration:none;color:black;">Blood Bank Management System<a></h1>
            </div>
            <h1>Doner Registration</h1><br>
            <center>
                <div id="form"> 
                    <form action="" method="post"> 
                        <table>
                            <tr>
                                <td width="200px" height="50px"><b>Id :</b></td>
                                <td width="200px" height="50px"><input type="text" name="id" placeholder="Enter id" ></td>
                                
                            </tr>
                            <center>
                            <tr>
                              <td> <input type="submit" name="delete" value="Delete"></td>
                            </tr>
    </center>
    </table>
    </form>
    <?php
    $id = $_GET['id'];
if (isset($_POST['id'])) {
    require_once 'connection.php';
    $db = new PDO();
    $id = $_POST['id'];
    $flag = $db->remove($id);

    if ($flag) {
        header("Location: http://localhost/BDManagement/admin/employee.php");
    }
}
if (isset($_POST['noBtn'])) {
    header("Location: http://localhost/BDManagement/admin/employee.php");
} 
?>    
        </div>
        
    </body>
</html>