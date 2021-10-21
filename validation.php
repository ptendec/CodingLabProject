<?php 
session_start();


$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "project";

$connect = new mysqli($host, $user, $pass, $dbname);


if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
    $fullname = $_POST['fullname'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];


    $s = "SELECT * FROM registr where username = '".$name."' && password ='".$pass."' ";
    $result = mysqli_query($connect, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $row = $result->fetch_assoc();
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['user_id'] = $row['user_id'];
        header('location:Главная.php');
    }
    else{
      header('location:signup.php');
    }
    echo $_SESSION['user_id'];

 ?>