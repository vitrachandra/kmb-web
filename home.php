<!DOCTYPE HTML>
<HTML lang="en">
<HEAD>
	<title> KMB ITB - Home </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="kmb, itb">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
	
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
					<li class="active"><a href="#"> Home </a></li>
					<li><a href="News.php"> News </a></li>
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
	<!--Carousel-->
	<div id="carouselHome" class="carousel slide text-center" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselHome" data-slide-to="0" class="active"></li>
			<li data-target="#carouselHome" data-slide-to="1"></li>
			<li data-target="#carouselHome" data-slide-to="2"></li>
			<li data-target="#carouselHome" data-slide-to="3"></li>
			<li data-target="#carouselHome" data-slide-to="4"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="a.jpeg" data-color="lightblue">
				<div class="carousel-caption">
	        		<h2>First Image</h2>
	        	</div>
			</div>
			<div class="item">
				<img src="perhubungan.jpg" data-color="lightblue">
				<div class="carousel-caption">
        			<h2>First Image</h2>
        		</div>
			</div>
			<div class="item">
				<img src="sky.jpg" data-color="lightblue">
				<div class="carousel-caption">
        			<h2>First Image</h2>
        		</div>
			</div>
			<div class="item">
				<img src="listrik.jpg" data-color="lightblue">
				<div class="carousel-caption">
        			<h2>First Image</h2>
        		</div>
			</div>
			<div class="item">
				<img src="taman.jpg" data-color="lightblue">
				<div class="carousel-caption">
        			<h2>First Image</h2>
        		</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carouselHome" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		</a>
		<a class="right carousel-control" href="#carouselHome" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		</a>
	</div>

	<!-- EVENTS & NEWS -->
	<div class="container">
		<div class="container-fluid text-center">
			<h3>NEWS</h3>
			<hr>
			<div class="row text-center">
				<div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="a.jpeg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
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
								<img src="sky.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
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
								<img src="taman.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
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
				<div>
					<button class="see-more">
						<span>See More</span>
					</button>
				</div>
			</div>
		</div>

		<div class="container-fluid text-center">
			<h3>EVENTS</h3>
			<hr>
			<div class="row text-center">
				<div class="col-sm-4">
					<a href="#">
						<div class="thumbnail">
							<div class="thumbnail-img">
								<img src="perhubungan.jpg" />
								<div class="overlay">
									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>Event Name</p>
								<p>dd-Mmm-yyyy</p>
							</div>
							<div class="thumbnail-events-date">
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
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>Event Name</p>
								<p>dd-Mmm-yyyy</p>
							</div>
							<div class="thumbnail-events-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
							<button class="btn"><span>Register</span></button>
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
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit mauris ac dui placerat faucibus sed eget diam. Proin eu nunc leo. Vivamus ornare bibendum facilisis. Maecenas a odio commodo, tempus magna sed, convallis nisl. Fusce eu malesuada diam, auctor egestas enim.
									</p>
								</div>
							</div>
							<div class="thumbnail-name">
								<p>Event Name</p>
								<p>dd-Mmm-yyyy</p>
							</div>
							<div class="thumbnail-events-date">
								<p>Submitted on dd-Mmm-yyyy</p>
							</div>
						</div>
					</a>
				</div>
				<div>
					<button class="see-more">
						<span>See More</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		Copyright © KMB Dhammañano ITB
	</div>
	<script type="text/javascript" src="script.js"></script>
</BODY>
</HTML>