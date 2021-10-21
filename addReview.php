<?php
	$server_name = "localhost";
	$database_username = "root";
	$database_password = "root";
	$database_name = "project";
	
	$connect = new mysqli($server_name, $database_username, $database_password, $database_name);

	if($connect->connect_error){
		echo "ERROR";
	}
	if(session_id() == '') {
    	session_start();
	}
	$user_id = $_GET['user_id'];
	$attraction_id = $_GET['attraction_id'];
	$textOfReview = $_POST['textOfReview'];
	$date = date('Y-m-d', time());
	$queryToLeftReview = "INSERT INTO review(textOfReview, attraction_id, user_id, timeLeft) VALUES ('$textOfReview', '$attraction_id', '$user_id', '$date')";
	$result = $connect->query($queryToLeftReview);
	if ($result) {
		
	}
	else{
		printf("Сообщение ошибки: %s\n", $connect->error);
	}
	$previousPage = $_SERVER["HTTP_REFERER"];
		header('Location: '.$previousPage);
		exit;

?>