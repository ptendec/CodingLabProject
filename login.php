
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nur-Tour</title>
  <style>
      .login-box{
        position:relative;
        margin: 10px auto;
        width: 500px;
        height: 380px;
        background-color: #fff;
        padding: 10px;
        border-radius: 3px;
        box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
      }
      .lb-header{
        position:relative;
        color: #00415d;
        margin: 5px 5px 10px 5px;
        padding-bottom:10px;
        border-bottom: 1px solid #eee;
        text-align:center;
        height:28px;
      }

      .form-container{
        position:relative;
        float: left;
        width: 100%;
        height:auto;
        margin-top: 20px;
        text-align:center;
      }
      .form-group{
        width:100%;
        margin-bottom: 10px;
      }
      .form-group input[type="text"],
      .form-group input[type="password"]{
        width: calc(50% - 22px);
        height:45px;
        border: 1px solid #ddd;
        padding: 0 10px;
        border-radius: 5px;
        font-size:15px;
      }
      .form-group button[type="submit"]{
        width:30%;
        background-color: #c3ade0;
        border: none;
        font-size: 15px;
        padding: 14px 0;
        border-radius: 5px;
        text-transform: uppercase;
      }

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
        <li class=""><a href="tracker.php">Map</a></li>
      
        <li class=""><a href="comment.php">Feedback</a></li>   
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="login.php"> <span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Log out</a></li>
    </ul>
    </div>
</nav>
<div class="login-box">
    <div class="lb-header">
      <h3>Login</h3>
    </div>
      <form action="validation.php" method="post" class="form-container">
       <div class="form-group">
        <label for="email"><b>Username</b></label>
    <input type="text" name="username" placeholder="Enter Username.."  required><br>
      </div>
      <div class="form-group">
    <label for="psw"><b>Password</b></label>
    <input type="password" name="password" placeholder="Enter Password.."  required><br>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
        </div>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    <p>Don't have an account yet? Sign up!</p>
    <a href="signup.php">Sign Up</a>
      
    </form>
  </div>
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

  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
