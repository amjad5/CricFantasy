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
						<div class="col-md-9" id="add-team">
							<h2>ADD TEAM</h2>
							<p>To create your team you will need to use the 'Add Team' form below, selecting the players for each role within the side from the drop down menus. There is a link to Stats Spider to assist you on players roles and playing record.</p>
							<p>There are no restrictions on who you can and can't pick as long as you stay within your team budget. This can be viewed at the bottom of the page.</p>
							<p>Don't forget you also need to select a Captain for your side. He will earn you double points but be warned, he will also lose double points.</p>
							<p>You are adding a team to Indian Premier League 2017, and below is a summary of the modifications and matches for your information.</p>
							<p>Your team name must be unique. Please click here to check if the team name that you want to use is already taken.</p>						

							<form action="add-team-post.php" method="post">
								<h4>TEAM NAME:</h4>
								<input type="text" id="tNameInput" name="team_name">
								<table>
									<thead>
										<tr>
											<th>Position</th>
											<th>Player</th>
											<th>Budget</th>
											<th>Capt</th>
											<th>Stats Spider</th>
										</tr>																				
									</thead>
									<tbody>
										<tr>
											<td>Bat 1:</td>
											<td>
												<select id="bat1" name="Opener1" onchange="return checkscore(this.selectedIndex,this.name)">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Bat 2:</td>
											<td>
												<select id="bat2" name="Opener2" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Bat 3:</td>
											<td>
												<select id="bat3" name="Opener3" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>WK:</td>
											<td>
												<select id="wk" name="wk" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Bowler 1:</td>
											<td>
												<select id="bowl1" name="bowler1" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Bowler 2:</td>
											<td>
												<select id="bowl2" name="bowler2" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Bowler 3:</td>
											<td>
												<select id="bowl3" name="bowler3" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td colspan="5">
												Mixed Roles Positions show all Batsmen, Wicketkeepers and Bowlers:
											</td>
										</tr>
										<tr>
											<td>Mix Role 1:</td>
											<td>
												<select id="mix1" name="allr1" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Mix Role 2:</td>
											<td>
												<select id="mix2" name="allr2" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Mix Role 3:</td>
											<td>
												<select id="mix3" name="allr3" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Mix Role 4:</td>
											<td>
												<select required id="mix4" name="allr4" onchange="return checkscore(this.selectedIndex,this.name)" class="jcf-hidden">
												<option>-------------------------------------------</option>
											</td>
											<td>
												<input type="text" name="budget" >
											</td>
											<td>
												<label><input type="radio" name="optradio">&nbsp;(c)</label>
											</td>
											<td></td>
										</tr>
										<tr>
											<td>Remaining Budget:</td>
											<td colspan="4"><input type="text" name="budget"></td>
										</tr>
										<tr>
											<td></td>
											<td colspan="4"><button type="submit" class="btn btn-success">Add Team</button></td>
										</tr>
									</tbody>

								</table>
							</form>
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


