
<?php 
session_start();
header('location:login.php');


$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "project";

$connect = new mysqli($host, $user, $pass, $dbname);


if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
    $fullname=$_POST['fullname'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $confpass = $_POST['confirmpassword'];


    $s = "SELECT * FROM registr where username = '".$name."'";
    $result = mysqli_query($connect, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
      echo "This username already taken";
    }
    else{
      $reg ="INSERT INTO registr(fullname,username,email,phone,password) VALUES ('".$fullname."','".$name."','".$email."','".$phone."','".$pass."')";
      mysqli_query($connect,$reg);
      echo "Registration Successful";
    }

 ?>
 <?php

$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "project";

$connect = new mysqli($host, $user, $pass, $dbname);


if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
    
    $fullname=$_POST['fullname'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $confpass = $_POST['confirmpassword'];


    $s = "SELECT * FROM registr where username = '".$name."'";
    $result = mysqli_query($connect, $s);

    $num = mysqli_num_rows($result);

    if ($pass===$confpass) {
      echo "Passwords same";
    }
    else{
      session_start();
      session_destroy();

      header('location:signup.php');

    }

   ?>