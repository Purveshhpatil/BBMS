<?php
    include('connection.php');
    session_start();
?>
<html>
<head>
        <title> Admin </title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    
    
    
    <body>
                <center>
                    <br> 
                        <h1> Blood Bank Management System </h1>
                    <br><hr>
                </center>
                <nav class="navbar navbar-expand bg-dark navbar-dark">
  <div class="container-fluid" >
    <ul class="navbar-nav">
      <li class="nav-item" >
        <a class="nav-link "  href="doner-registration.php">Donor Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="doner-list.php">Donor List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="stock-blood-list.php">Blood Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="delete-donor.php">Delete Doner</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="stock-blood-list.php">Blood Stock</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="stock-blood-list.php">Blood Stock</a></t>
      </li>
  
    </ul>
    <a class="nav-link " href="t_start.php" style="float:right;">Logout</a>
  </div>
</nav>


</body>
</html>