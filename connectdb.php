<?php
	$id = "";
	$catid = "";
	if (isset($_GET['id']) && isset($_GET['catid'])) {
		$id = $_GET['id'];
		$catid = $_GET['catid'];
	}
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$dbname = "test";
	$usertable = "josfe_content";
	$conn = new mysqli($hostname, $username, $password, $dbname);
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$query = "SELECT * FROM $usertable WHERE id=$id and catid=$catid";

	$result = $conn->query($query);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$images = "a.jpeg";
			$title = $row["title"];
			$time = $row["modified"];
			$date = explode(" ", $time, 2);
			$content = $row["introtext"];
		}
	} else {
		$images = "a.jpeg";
		$title = "";
		$time = "";
		$date = "";
		$content = "";
	}
?>