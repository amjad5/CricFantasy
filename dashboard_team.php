<?php 
	// Includes Login Script
	session_start();
	if(!isset($_SESSION['login_user']) && empty($_SESSION['CompetitionId'])){
		header("Location: signup.php"); // Redirecting To SignUp Page
		exit();
	}	
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
		<link rel="stylesheet" type="text/css" href="style/sitestyle.css" />
	</head>
	
	<body>
		<div class="container-fluid">
			<div id="header">
				<div id="header-top">
					<div id="header-1">
						<div class="col-md-2 col-lg-2">
						</div>
						<div class="col-sm-2 col-md-2 col-lg-2" id="flagtext-div">
							<p id="team-text ">TEAM SITES >> </p>
						</div>
						<div class="ol-sm-5 col-md-5 col-lg-5" id="flags">
							<ul>
								<li><a href="icol1.jpg"><img src="images/icol1.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol2.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol3.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol4.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol5.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol6.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol7.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol8.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol9.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol10.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol11.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol12.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol13.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol14.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol15.jpg"> </a></li>
								<li><a href="icol1.jpg"><img src="images/icol16.jpg"> </a></li>
							</ul>
						</div>
						<div class="col-md-2 col-lg-2">
						</div>
					</div>
				</div>
			</div>
			
			<div id ="social">
				<div class="col-md-2 col-lg-2">
				</div>
				<div class="col-md-3 col-lg-3 col-sm-12" id="logo-item">
					<img src="images/logo.png">
				</div>

				<div class="col-md-5 col-lg-6 col-sm-12" id="social-banner">
					<div class="row">
						<div id="socail-icons">
							<i class="fa fa-youtube" style="color:red"><span style="color:white">Youtebe</span></i>
							<i class="fa fa-facebook" style="color:blue"><span style="color:white">Facebook</span></i>
							<i class="fa fa-google-plus" >Google+</i>
							<div class="input-group" id="search-group">
							   <input type="text" class="form-control">
							   <span class="input-group-btn">
							        <button class="btn" id="btnSearch" type="button">Search</button>
							   </span>
							</div>
						</div>
					</div>
					<div class="row" id="fantasy-box-head">
						<a href="images/india_v_nz.jpg"> <img class="img-responsive" src="images/india_v_nz.jpg" /> </a>
					</div>
				</div>
				<div class="col-md-2 col-lg-2">
				</div>
			</div>
		</div>
		<div class="container-fluid" id="main-contain">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12" id="main-section">
					<div class="col-md-1 col-lg-1">
					</div>
					<div class="col-md-10 col-lg-10 col-sm-12" id="navigation">
						<div class="row">
							<nav class="navbar navbar-default">
							  <div class="container-fluid">
							    <ul class="nav navbar-nav" id="main-nav">
							      <li ><a href="#">HOME</a></li>
							      <li><a href="#">FORUM</a></li>
							      <li><a href="#">FANTASY CRICKET</a></li>
							      <li><a href="#">PREDICTIONS</a></li>
							      <li><a href="#">CW GAMES</a></li>
							      <li><a href="#">BLOGS</a></li>
							      <li><a href="#">BOOK REVIEWS</a></li>
							      <li><a href="#">GAMES & DOWNLOADS</a></li>
							      <li><a href="#">STATS SPIDER</a></li>
							    </ul>
							  </div>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="row" id="main-top-content">
				<div class="col-md-2">
				</div>
				<div class="col-md-9" id="main-top">
					<img id="players-top" src="images/logo-contnent.png" />
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<nav class="navbar navbar-default">
								  <div class="row">
								    <ul class="nav navbar-nav" id="bottom-nav">
								      <li ><a href="#">HOME</a></li>
								      <li><a href="#">FORUM</a></li>
								      <li><a href="#">FANTASY CRICKET</a></li>
								      <li><a href="#">PREDICTIONS</a></li>
								      <li><a href="#">CW GAMES</a></li>
								      <li><a href="#">BLOGS</a></li>
								      <li><a href="#">BOOK REVIEWS</a></li>
								      <li><a href="#">GAMES & DOWNLOADS</a></li>
								    </ul>
								  </div>
								</nav>
							</div>
						</div>	
					</div>

					<div class="row">
						<div class="col-md-9" id="form-signup">
						<h4 id="dashboard">Dashboard</h4>
							<table id="dash_team_playersss">
								<tr>
									<th>Player Name</th>
									<th>Points</th>
								</tr>
							</table>
						</div>
							<?php 
								 // Includes Login Script
								if(isset($_SESSION['login_user'])){
								echo '<div class="col-md-3" id="login"><div id="outer"><div id="inner"><div class="row">User Logged in: ' . $_SESSION['login_user']. '</div><form action="logout.php" method="post" id="main-login"><button class="btn btn-success pull-right" name="submit" type="submit">Logout</button> </form></div></div></div>';
								}
							?>
					</div>
				</div>
				<div class="col-md-1">
				</div>
			</div>
			<div class="container-fluid">
				
			</div>
		</div>
	</body>

	<script type="text/javascript" src="jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="myscripts/player_list.js" ></script>

</html>


