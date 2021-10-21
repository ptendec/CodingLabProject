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
	$queryToGetAttraction = "SELECT * FROM map WHERE map_id = '$attraction_id'";
	$result = $connect->query($queryToGetAttraction);
	if($result->num_rows == 1){
		$row = $result->fetch_assoc();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Attractions</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
		include 'header.php'; 
	?>
	<section class="attractions">
		<div class="container">
			<div class="row">
				<?php
					 	$query_to_select = "SELECT * FROM map";
                        $result = $connect->query($query_to_select);
                        $rows = array();
                        while($row = $result->fetch_assoc()){
                            $rows[] = $row;
                        }

                        for($i = 0; $i < count($rows); $i++){
                            echo "<div class=\"col-lg-4\">
					<div class=\"wrapper_room_preview\">
						<a href=\"attraction.php?attraction_id=" . $rows[$i]['map_id'] . "\" class=\"img\">
							<img src=\" " . $rows[$i]['picture_link'] . "\" class=\"room_img\" alt=\"\">
						</a>
						<a class=\"room_description\" href=\"attraction.php?attraction_id=" . $rows[$i]['map_id'] . "\">
							<p class=\"type_of_room\"> " . $rows[$i]['title'] . "</p>
							<p class=\"description_p\"> " . $rows[$i]['description'] . "</p>
						</a>
					</div>
				</div>";
                        }
				?>
				
			</div>
		</div>
	</section>
</body>
</html>