<?php

session_start();
include_once('include/config.php');	
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Maggie Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styledb.css" type="text/css">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand">Maggie Maylin</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Councelling</a>
          </li>
        <li><a href="#">Meditation</a></li>
        <li><a href="#">Fees</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a> Welcome, Maggie </a></li>
          <li><a href="logout.php">Logout</a> </li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-1 sidenav">
      <p><a href="fees_edit.php">Edit Fees</a></p>
      <p><a href="#">Add Images</a></p>
      <p><a href="#">Add Videos</a></p>
    </div>
    <div class="col-sm-11 text-left"> 
      <h1></h1>
      <p></p>
        
     
      <h3></h3>
      <p></p>
        <p></p>
    
        
    </div>
   
  </div>
</div>

<?php include("include/footer.inc") ?>
</body>
</html>
