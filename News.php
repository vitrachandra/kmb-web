<?php
	require 'connectdb.php';
?>
<!DOCTYPE HTML>
<HTML lang="en">
<HEAD>
	<title> KMB ITB - News </title>
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
					<li class="active"><a href="News.php"> News </a></li>
					<li><a href="Events.php"> Events </a></li>
					<li><a href="Magazine.html"> Magazine </a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> About </a>
						<ul class="dropdown-menu">
							<li><a href="About.html"> About KMB </a></li>
							<li><a href="Organization.php"> Organization </a></li>
						</ul>
					</li>
					<li><a href="Contact.html"> Contact </a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="container-fluid text-center">
			<h3>NEWS</h3>
			<hr>
	<?php
		$catid = "1";
		$query = "SELECT * FROM $usertable WHERE catid=$catid ORDER BY modified DESC LIMIT 6";
		$result = $conn->query($query);
		$i = 1;	
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$images = "a.jpeg";
				$title = $row["title"];
				$time = $row["modified"];
				$date = explode(" ", $time, 2);
				$content = $row["introtext"];
				if ($i == 1 || $i == 4) {
					echo "<div class=\"row text-center\">";
				}
				$i++;
	?>
			
				<div class="col-sm-4">
					<a href="News - Article.php?id=<?php echo $id;?>&catid=<?php echo $catid;?>">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="<?php echo $images;?>" />
								<div class="overlay">
									<?php echo $content;?>
								</div>
							</div>
							<div class="thumbnail-name">
								<p> <?php echo $title;?> </p>
							</div>
							<div class="thumbnail-news-date">
								<p>Submitted on <?php echo $date[0];?></p>
							</div>
						</div>
					</a>
				</div>
	<?php
				if ($i == 3 || $i == 6) {
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
				
				<!--div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="a.jpeg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>News Name</p>
							</div>
							<div class="thumbnail-news-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="listrik.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>News Name</p>
							</div>
							<div class="thumbnail-news-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
						</div>
					</a>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="sky.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>News Name</p>
							</div>
							<div class="thumbnail-news-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
						</div>
					</a>
				</div>
				
				<div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="perhubungan.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>News Name</p>
							</div>
							<div class="thumbnail-news-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
						</div>
					</a>
				</div>

				<div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="pendidikan.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>News Name</p>
							</div>
							<div class="thumbnail-news-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
						</div>
					</a>
				</div>
			</div-->
			<div>
				<button class="see-more">
					<span>See More</span>
				</button>
			</div>
		</div>
	</div>

	<div class="footer">
		Copyright © KMB Dhammañano ITB
	</div>
</BODY>
</HTML>