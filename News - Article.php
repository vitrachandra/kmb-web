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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
					<li class="active"><a href="#"> News </a></li>
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


	<div class="fixed-share">
		<span> Share </span>
		<br>
		<i class="fa fa-facebook-square"></i>
		<br>
		<i class="fa fa-google-plus-square"></i>
	</div>

	<!--Content-->
	<div class="container">
		<img src="a.jpeg" class="img-responsive center-block">
		<div class="container-fluid">
			<div class="row article-header">
				<h3> <?php echo $title;?> </h3>
				<p>Submitted on <?php echo $date[0];?></p>
			</div>
			<div class="row">
				<div class="col-sm-1 share">
					<span> Share </span>
					<br>
					<i class="fa fa-facebook-square"></i>
					<br>
					<i class="fa fa-google-plus-square"></i>
				</div>
				<div class="col-sm-1">
					<div class="vr">
					</div>
				</div>
				<div class="col-sm-10">
					<div class="article">
						<?php echo $content;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php $conn->close();?>
	<div class="footer">
		Copyright © KMB Dhammañano ITB
	</div>
</BODY>
</HTML>