<?php 

session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nur-Tour</title>
  <style>
    .item {
    display: none;
    position: relative;
    .transition(.60s ease-in-out left);
  }
      .form-group input[type="text"]{
        width: calc(50% - 25px);
        height:45px;
        border: 1px solid #ddd;
        padding: 0 10px;
        border-radius: 2px;
        font-size:15px;
      
      }
      .form-group button{
        width:20%;
        background-color: #c9ade9;
        border: none;
        font-size: 15px;
        padding: 14px 0;
        border-radius: 5px;
        text-transform: uppercase;
        color:white;
      }

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #F5EAFB;">
<nav class="navbar navbar-default " style="background-color: #CCB6EE; padding:10px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: black">Nur-Tour(icon)</a>
      </div>
      <ul class="nav navbar-nav">
        <li class=""><a href="home.php">Home</a></li>
        <li class="active"><a href="tracker.php">Map</a></li>
        
        <li class=""><a href="comment.php">Feedback</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
    </ul>
    </div>
</nav>
 <form name="bmiForm">
<div class="container">
 
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1MQgMNDDFlCwBTTdCp6IX_FfoYtWghlm8" width="100%" height="650"></iframe>

</div>
</form>
<footer>
  <div class="jumbotron" style="background-color: #DDD3EC;">
        <div class="container" >
          <div class="col-lg-5 col-md-12 col-sm-12">
      <a href="https://www.instagram.com">
        <img src="instagram.png" width="45" 
        height="45" alt="hi" title="next page"></a>
      <a href="https://www.youtube.com/channel/UCgLRtLaWTe0unYguQQPM7Gg">
        <img src="youtube.png" width="49" 
        height="49" alt="hi" title="next page"></a></div>
       

        <div class="col-lg-4 col-md-12 col-sm-12">
        <p>Contacts: +707-707-70-07</p>
      </div>
      </div>
  </div>
</footer>
</body>
</html>
