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
	<title><?php echo $row['title']; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body style="">
	<?php
		include 'header.php';
	?>
	<section class="attraction">
		<div class="container">
			<div class="row shadow_wrapper">
				<div class="col-lg-7 p-0">
					<img style="width: 90%;height: 500px;margin: 0 auto;margin-top: 20px;display: block;padding-bottom: 20px;"  src="<?php echo $row['picture_link'];?>" alt="">
				</div>
				<div class="col-lg-5 p-0">
					<p class="titleOfAttraction"><?php echo $row['title']; ?></p>
					<p class="DescriptionOfAttraction"><?php echo $row['description']; ?></p>
					<a class="addToDesired" href="desired.php?attraction_id=<?php echo $row['map_id'] ?>">Add to desired places</a>
				</div>
			</div>
		</div>
	</section>
	<section class="review">
		<div class="container">
			<div class="row shadow_wrapper2">
				<div class="col-lg-12">
					<form action="addReview.php?<?php echo "attraction_id=" . $row['map_id'] . "&" . "user_id=" . $_SESSION['user_id']?>" method="POST">
						<input placeholder="Leave your impression here..." class="textOfReview" type="text" name="textOfReview">
						<button class="leaveReviewButton" type="submit">Send</button>
					</form>
				</div>
			</div>
			<div class="row shadow_wrapper2">
				<?php
					$query_to_select = "SELECT review.review_id, review.textOfReview, review.attraction_id, review.user_id, review.timeLeft, registr.user_id, registr.fullname FROM review INNER JOIN registr ON review.user_id = registr.user_id WHERE attraction_id = " . $row['map_id'];
                	$result = $connect->query($query_to_select);
                	$rows = array();
                	while($row = $result->fetch_assoc()){
                	    $rows[] = $row;
                	}
                	for($i = 0; $i < count($rows); $i++){
                		echo "<div class=\"col-lg-12 shadow_wrapper3\">
						<p class=\"usernameLeftReview\">" . $rows[$i]['fullname'] . "</p>
						<p class=\"textOfReviewLeft\">" . $rows[$i]['textOfReview'] . "</p>
						<p style=\"float: right;\">" . $rows[$i]['timeLeft'] . "</p>
						</div>";
                	}
				?>
				
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>




<!-- SELECT review.review_id, review.textOfReview, review.attraction_id, review.user_id, review.timeLeft, registr.user_id, registr.fullname 
FROM review 
WHERE attraction_id = 1
INNER JOIN registr ON review.user_id = registr.user_id -->