<?php
	require 'connectdb.php';
?>
<!DOCTYPE HTML>
<HTML lang="en">
<HEAD>
	<title> KMB ITB - About </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="script.js"></script>
</HEAD>

<BODY>
	<!--Navbar-->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" on-click="changeButton()">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<p class="navbar-brand"> KMB ITB </p>
			</div>
			<div class="collapse navbar-collapse" id="navbar-menu">
				<ul class="nav navbar-nav">
					<li><a href="Home.php"> Home </a></li>
					<li><a href="News.php"> News </a></li>
					<li><a href="Events.php"> Events </a></li>
					<li><a href="Magazine.html"> Magazine </a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> About </a>
						<ul class="dropdown-menu">
							<li><a href="About.html"> About KMB </a></li>
							<li class="active"><a href="#"> Organization </a></li>
						</ul>
					</li>
					<li><a href="Contact.html"> Contact </a></li>
				</ul>
			</div>
		</div>
	</nav>


	<!--Contents-->
	<div class="container">
		<img src="a.jpeg" class="img-responsive center-block">
		<h3 class="header"> Vision </h3>
		<div class="article">
			<p>
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
		</div>
		<h3 class="header"> Mision </h3>
		<div class="article">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
		<h3 class="header"> Team </h3>
		<?php
			$catid = "2";
			$query = "SELECT * FROM $usertable WHERE catid=$catid ORDER BY modified DESC LIMIT 6";
			$result = $conn->query($query);
			$i = 1;	
			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$images = "a.jpeg";
					$title = $row["title"];
					$content = $row["introtext"];
					if ($i == 1 || $i == 4) {
						echo "<div class=\"row\">";
					}
		?>
		<div class="row">
			<div class="col-xs-6 col-sm-2">
				<div class="team-img text-center">
					<img src="<?php echo $images;?>">
					<div class="info">
						
							<p><?php echo $title;?> 
							</p><br>
							<?php echo $content;?>
						
					</div>
				</div>
			</div>
		<?php
			if ($i % 6 == 0) {
				echo "</div>";
			}
			$i++;
		}
			} else {
				$images = "a.jpeg";
				$title = "";
				$date = "";
				$content = "";
			}
			$conn->close();
		?>
			<!--div class="col-xs-6 col-sm-2">
				<div class="team-img">
					<img src="fic.jpg">
					<div class="info">
						<p>
							Taufic Leonardo S
							<br>
							IF '14
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="team-img">
					<img src="polp.jpg">
					<div class="info">
						<p>
							Chalvin
							<br>
							IF '14
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="team-img">
					<img src="a.jpeg">
					<div class="info">
						<p>
							Malvin Juanda
							<br>
							IF '14
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="team-img">
					<img src="sky.jpg">
					<div class="info">
						<p>
							Kristianto Karim
							<br>
							IF '14
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-2">
				<div class="team-img">
					<img src="listrik.jpg">
					<div class="info">
						<p>
							Jessica Nathania
							<br>
							STI '14
						</p>
					</div>
				</div>
			</div>
		</div>
	</div-->
	<div class="footer">
		Copyright © KMB Dhammañano ITB
	</div>
</BODY>
</HTML>