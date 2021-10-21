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

  </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #F5EAFB;">
<nav class="navbar navbar-default" style="background-color: #CCB6EE; padding:10px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: black">Nur-Tour(icon)</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class=""><a href="tracker.php">Map</a></li>
    
        <li class=""><a href="comment.php">Feedback</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
    </ul>
    </div>
</nav>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <h1>Hello <?php echo $_SESSION['username']; ?> </h1>
      <div class="item active">
        <img src="https://putidorogi-nn.ru/images/stories/aziya/kazahstan/bayterek_2.jpg" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://kompastour.kz/public/upload/content/images/58f09a6b9e380.jpg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://ummet.kz/images/2018/kurban-ait/9570149238916242_840f.jpg" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="https://astana.gov.kz/data/media/news/images/61486cee6c11c4fa7c1bb49bd0a1de08.jpg" style="width:100%;">
      </div>
      
      <div class="item">
        <img src="https://www.avianews.com/wp-content/uploads/2019/03/astana.jpg" style="width:100%;">
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<h3 class="text-center" style="color: #71419C; padding: 20px; font-size: 20px">Welcome <span style="color: black"> <?php echo $_SESSION['username']; ?> </span> Check out tips, guides, and expert advice on fitness, equipment, adventure, style, and more from the editors on this website.<br> We specialize in healthy living, weight loss, resistance training, and gluten-free nutrition.<br> We educate, motivate, and empower others to turn their excuses into solutions and become the best they can do.<br> we help you make the decision to take control of your body, mind, business, and life, and we will share with you the tools to get to the point and succeed!</h3>

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

</body>
</html>
