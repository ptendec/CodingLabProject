<?php
	$attraction_id = $_GET['attraction_id'];
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
	$queryToAddAttractionToDesiredPlaces = 
?>